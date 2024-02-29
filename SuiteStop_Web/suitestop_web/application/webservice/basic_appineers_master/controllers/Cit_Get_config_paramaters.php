<?php


/**
 * Description of Get Config Paramaters Extended Controller
 *
 * @module Extended Get Config Paramaters
 *
 * @class Cit_Get_config_paramaters.php
 *
 * @path application\webservice\basic_appineers_master\controllers\Cit_Get_config_paramaters.php
 *
 * @version 4.4
 *
 * @author Sandeep c
 *
 * @since 06.09.2021
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cit_Get_config_paramaters extends Get_config_paramaters
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Used to return config parametrs.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $return_arr return unique user status & message.
     */
    public function returnConfigParams(&$input_params = array())
    {
        //pr($input_params); die;
        $return_arr['log_status_updated']  = '';

        $current_timezone = date_default_timezone_get();
        // convert the current timezone to UTC
        date_default_timezone_set('UTC');
        $current_date = date("Y-m-d H:i:s");
        // Again coverting into local timezone
        date_default_timezone_set($current_timezone);

        //check for login user

        $auth_header = $this->input->get_request_header('AUTHTOKEN');

        //pr($input_params); die;

        try {
           
            $userid = $input_params["user_id"]; 
          
            if (!empty($userid)) {
             
                $this->db->select('vTermsConditionsVersion,vPrivacyPolicyVersion,eLogStatus,iFirstLogin,iIsMobileNoVerified,eOneTimeTransaction,eModeratorFlag');
                $this->db->from('users');
                $this->db->where('iUserId', $userid);
                //echo "line 63"; die;
                //pr($version_data); die;
                $version_data = $this->db->get();
        
                $version_data = is_object($version_data) ? $version_data->result_array() : array();
                $isSubscriptionAllow = $version_data[0]['eModeratorFlag']; 
                //echo "line 66";
                //pr($version_data); die;

                // check user has any upcomening event
                $this->db->select('iEventId');
                $this->db->from('events');
                $this->db->where('iUserId', $userid);
                $this->db->where('dEventDate >', date("Y-m-d H:i:s"));
                $event_data = $this->db->get();


                $event_data = is_object($event_data) ? $event_data->result_array() : array();
                //echo "line 78";
                //pr($event_data); die;

                //get subscription data
                $this->db->select('vProductId as product_id,dLatestExpiryDate,"" as subscription_status, lReceiptData as purchase_token'); //vOrginalTransactionId
                $this->db->from('user_subscription');
                $this->db->where('iUserId', $userid);
                $this->db->order_by('dLatestExpiryDate', 'DESC');
                $status_data = $this->db->get();
                $status_data = is_object($status_data) ? $status_data->result_array() : array();
                //echo "line 86";
                //pr($status_data); die;
                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }

                $terms_conditions_version = $version_data[0]['vTermsConditionsVersion'];
                $privacy_policy_version  = $version_data[0]['vPrivacyPolicyVersion'];
                $return_arr['log_status_updated'] =  $version_data[0]['eLogStatus'];
                $return_arr['is_first_login'] = $version_data[0]['iFirstLogin'];
                $return_arr['is_mobile_number_verified'] = $version_data[0]['iIsMobileNoVerified'];
                $return_arr['address'] = $version_data[0]['tAddress'];

                $return_arr['terms_conditions_version'] = $terms_conditions_version;
                $return_arr['privacy_policy_version'] = $privacy_policy_version;
                $return_arr['allow_stripe_disconnect'] = !empty($event_data) ? 1 : 0;

                $subscription = array();
                $subscription_plans = array();


                if($isSubscriptionAllow == '1'){
                    $subscription[0]['subscription_status'] = 1;

                    $subscription[0]['purchase_token'] = "ekiamocjnfnbljdhjhccfijb.AO-J1Owr_B_MhLCdBOACUlgWksW2ilk2gGiAZLyT-E8l6zIyPOg85xscXKOKwm5CwrZJLlrU3TFLZrgAWRwtNuQnNG0U3GL0jQ";
                    $subscription[0]['product_id'] = "com.app.outletapp.monthly";
                    //$subscription[0]['product_id'] = "lifetime";
                }
                else{

                    foreach ($status_data as $key => $value) {

                        if (in_array($value['product_id'], $subscription_plans)) {
                            continue;
                        }

                        $expire_date = $value['dLatestExpiryDate'];

                        unset($value['dLatestExpiryDate']);
                        //latest expire date is greater than current date

                        if (strtotime($expire_date) > strtotime($current_date) || $expire_date == "0000-00-00 00:00:00") {
                            $value['subscription_status'] = 1;
                        } else {
                            $value['subscription_status'] = 0;
                        }

                        $subscription[] = $value;

                        $subscription_plans[] = $value['product_id'];
                    }
                }

                $return_arr['subscription'] = $subscription;
            }else
            {

                $return_arr['terms_conditions_version'] = "";
                $return_arr['privacy_policy_version'] = "";
                $return_arr['allow_stripe_disconnect'] = 0;


            }
            

            $this->db->select('vVersion,vPageCode');
            $this->db->from('mod_page_settings');

            $this->db->where_in('vPageCode', array('termsconditions','privacypolicy'));
            $termsconditions_code_version = $this->db->get();
            $resArray = is_object($termsconditions_code_version) ? $termsconditions_code_version->result_array() : array();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            $termsconditions_code_version = [];
            $privacypolicy_code_version = [];

            foreach($resArray as $v){

                if(trim($v["vPageCode"]) == "termsconditions"){

                    $termsconditions_code_version['vVersion'] = $v["vVersion"];   
                }

                if(trim($v["vPageCode"]) == "privacypolicy"){

                    $privacypolicy_code_version['vVersion'] = $v["vVersion"];   
                } 
            }
            $privacy_policy_version_application = $privacypolicy_code_version['vVersion'];
            $terms_conditions_version_application =$termsconditions_code_version['vVersion'];
            $return_arr['privacy_policy_version_application']= $privacy_policy_version_application;
            $return_arr['terms_conditions_version_application']= $terms_conditions_version_application;

        } catch (Exception $e) {
            $input_params['db_query'] = $this->db->last_query();
            $this->general->apiLogger($input_params, $e);
        }
        //end
        $message = $this->config->item('VERSION_CHECK_MESSAGE');
        $app_name = $this->config->item('COMPANY_NAME');
        if ($this->config->item('VERSION_UPDATE_CHECK') == 'Enabled') {

            $return_arr['version_update_check'] = 1;
        } else {

            $return_arr['version_update_check'] = 0;
        }
        if ($this->config->item('VERSION_UPDATE_MANDATORY_IOS') == 'Enabled') {

            $return_arr['version_update_mandatory_ios'] = 1;
        } else {

            $return_arr['version_update_mandatory_ios'] = 0;
        }


        if ($this->config->item('VERSION_UPDATE_MANDATORY_ANDROID') == 'Enabled') {

            $return_arr['version_update_mandatory_android'] = 1;
        } else {

            $return_arr['version_update_mandatory_android'] = 0;
        }
        //mandatory array filed
        //$is_email_id_mandatory = $this->config->item('IS_EMAIL_ID_MANDATORY');
        $is_address_mandatory = $this->config->item('IS_ADDRESS_MANDATORY');
        $is_mobile_no_mandatory = $this->config->item('IS_MOBILE_NO_MANDATORY');

      
        $mandatory_array = array(
            //'is_email_id_mandatory' => $is_email_id_mandatory,
            'is_address_mandatory' => $is_address_mandatory,
            'is_mobile_no_mandatory' => $is_mobile_no_mandatory
        );

        $return_arr['cancellation_day']  = $this->config->item('CANCLELATION_DAY');


        if ($this->config->item('TOKBOX_MODE') == 'live') {
            $return_arr['open_tok_secret_key']  = $this->config->item('OPENTOK_SECRET_KEY_LIVE');
            $return_arr['open_tok_api_key']  = $this->config->item('OPEN_TOK_API_KEY_LIVE');
        } else {
            $return_arr['open_tok_secret_key']  = $this->config->item('OPENTOK_SECRET_KEY_TEST');
            $return_arr['open_tok_api_key']  = $this->config->item('OPEN_TOK_API_KEY_TEST');
        }

        $return_arr['google_places_api_key']=  $this->config->item('GOOGLE_MAPS_API_KEY'); 
        $return_arr['google_client_id']=  $this->config->item('GOOGLE_OAUTH_CLIENT_ID');

        $return_arr['mandatory_array'] = array($mandatory_array);

        $return_arr['go_ad_free'] = $version_data[0]['eOneTimeTransaction'];
        $return_arr['stripe_percentage_fee'] = $this->config->item('STRIPE_PERCENTAGE_FEES');
        $return_arr['stripe_fix_fee'] = $this->config->item('STRIPE_FIX_FEES');
        $return_arr['application_fees'] = $this->config->item('APPLICATION_FEE');


        $return_arr['android_version_number'] = $this->config->item('ANDROID_VERSION_NUMBER');
        $return_arr['iphone_version_number']  = $this->config->item('IPHONE_VERSION_NUMBER');
        $return_arr['is_login'] = !empty($auth_header) ? 1 : 0;

        if($this->config->item('PROJECT_DEBUG_LEVEL') == 'development'){
            $return_arr['ios_app_id']  =  $this->config->item('IOS_APP_ID_DEVELOPMENT');
            $return_arr['ios_banner_id']  = $this->config->item('IOS_BANNER_AD_ID_DEVELOPMENT');
            $return_arr['ios_interstitial_id']  = $this->config->item('IOS_INTERSTITIAL_AD_ID_DEVELOPMENT');
            $return_arr['ios_native_id']  = $this->config->item('IOS_NATIVE_AD_ID_DEVELOPMENT');
            $return_arr['ios_rewarded_id']  =  $this->config->item('IOS_REWARDED_AD_ID_DEVELOPMENT');
            $return_arr['ios_mopub_banner_id']  = $this->config->item('IOS_MOPUB_BANNER_AD_UNIT_ID_DEVELOPMENT');
            $return_arr['ios_mopub_interstitial_id']  = $this->config->item('IOS_MOPUB_INTERSTITIAL_AD_UNIT_ID_DEVELOPMENT');
            $return_arr['android_app_id']  = $this->config->item('ANDROID_APP_ID_DEVELOPMENT');
            $return_arr['android_banner_id']  = $this->config->item('ANDROID_BANNER_AD_ID_DEVELOPMENT');
            $return_arr['android_interstitial_id']  = $this->config->item('ANDROID_INTERSTITIAL_AD_ID_DEVELOPMENT');
            $return_arr['android_native_id']  = $this->config->item('ANDROID_NATIVE_AD_ID_DEVELOPMENT');
            $return_arr['android_rewarded_id']  = $this->config->item('ANDROID_REWARDED_AD_ID_DEVELOPMENT');
            $return_arr['android_mopub_banner_id']  = $this->config->item('ANDROID_MOPUB_BANNER_AD_UNIT_ID_DEVELOPMENT');
            $return_arr['android_mopub_interstitial_id']  = $this->config->item('ANDROID_MOPUB_INTERSTITIAL_AD_UNIT_ID_DEVELOPMENT');

            $return_arr['stripe_client_id']  = $this->config->item('STRIPE_CLIENT_ID_TEST');
            $return_arr['stripe_public_key']  = $this->config->item('STRIPE_PUBLIC_KEY_TEST');
            $return_arr['stripe_secret_key']  = $this->config->item('STRIPE_SECRET_KEY_TEST');

        }
        else{

            $return_arr['ios_app_id']  =  $this->config->item('IOS_APP_ID_PRODUCTION');
            $return_arr['ios_banner_id']  = $this->config->item('IOS_BANNER_AD_ID_PRODUCTION');
            $return_arr['ios_interstitial_id']  = $this->config->item('IOS_INTERSTITIAL_AD_ID_PRODUCTION');
            $return_arr['ios_native_id']  = $this->config->item('IOS_NATIVE_AD_ID_PRODUCTION');
            $return_arr['ios_rewarded_id']  = $this->config->item('IOS_REWARDED_AD_ID_PRODUCTION');
            $return_arr['ios_mopub_banner_id']  = $this->config->item('IOS_MOPUB_BANNER_AD_UNIT_ID_PRODUCTION');
            $return_arr['ios_mopub_interstitial_id']  = $this->config->item('IOS_MOPUB_INTERSTITIAL_AD_UNIT_ID_PRODUCTION');
            $return_arr['android_app_id']  = $this->config->item('ANDROID_APP_ID_PRODUCTION');
            $return_arr['android_banner_id']  = $this->config->item('ANDROID_BANNER_AD_ID_PRODUCTION');
            $return_arr['android_interstitial_id']  = $this->config->item('ANDROID_INTERSTITIAL_AD_ID_PRODUCTION');
            $return_arr['android_native_id']  = $this->config->item('ANDROID_NATIVE_AD_ID_PRODUCTION');
            $return_arr['android_rewarded_id']  = $this->config->item('ANDROID_REWARDED_AD_ID_PRODUCTION');
            $return_arr['android_mopub_banner_id']  = $this->config->item('ANDROID_MOPUB_BANNER_AD_UNIT_ID_PRODUCTION');
            $return_arr['android_mopub_interstitial_id']  = $this->config->item('ANDROID_MOPUB_INTERSTITIAL_AD_UNIT_ID_PRODUCTION');
            
            $return_arr['stripe_client_id']  = $this->config->item('STRIPE_CLIENT_ID_LIVE');
            $return_arr['stripe_public_key']  = $this->config->item('STRIPE_PUBLIC_KEY_LIVE');
            $return_arr['stripe_secret_key']  = $this->config->item('STRIPE_SECRET_KEY_LIVE');

        }
        $return_arr['aws_folder_name'] = $this->config->item("AWS_FOLDER_NAME");
        $return_arr['aws_bucket_name'] = $this->config->item("AWS_BUCKET_NAME");
        $return_arr['aws_access_key'] = $this->config->item("AWS_ACCESSKEY");
        $return_arr['aws_base_path_name'] = $this->config->item("AWS_BASE_PATH_NAME");
        $return_arr['aws_secret_key'] = $this->config->item("AWS_SECRECTKEY");
              
        $return_arr['fcm_key']  = $this->config->item('PUSH_NOTIFY_ANDROID_KEY');
 
        $return_arr['project_debug_level']  = $this->config->item('PROJECT_DEBUG_LEVEL');

        $return_arr['version_check_message']  = str_replace('|appname|', $app_name, $message);
     
        return $return_arr;
    }
}

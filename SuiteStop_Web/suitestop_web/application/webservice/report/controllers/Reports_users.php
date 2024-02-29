<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Reports Users Controller
 *
 * @category webservice
 *
 * @package misc
 *
 * @subpackage controllers
 *
 * @module Reports Users
 *
 * @class reports_users.php
 *
 * @path application\webservice\report\controllers\Reports_users.php
 *
 * @version 4.4
 *
 * @author CIT Dev Team
 *
 * @since 03.05.2019
 */

class Reports_users extends Cit_Controller
{
    public $settings_params;

    /* @var array $output_params contains output parameters */
    public $output_params;

    /* @var array $single_keys contains single array */
    public $single_keys;

    /* @var array $multiple_keys contains multiple array */
    public $multiple_keys;

    /** @var array $block_result contains query returns result array*/
    public $block_result;

    /**
    * To initialize class objects/variables.
    */

    public function __construct()
    {
        parent::__construct();
        $this->settings_params = array();
        $this->output_params = array();
        $this->single_keys = array(
            "insert_reports",
        );
        $this->block_result = array();

        $this->load->library('wsresponse');
        $this->load->library('lib_log');
        $this->load->model("notification/notification_model");
        $this->load->model("basic_appineers_master/users_model");
        $this->load->model('report/reports_model');
    }

    /**
     * Used to validate api input params.
    
     * @param array $request_arr request_arr array is used for api input.
     
     * @return array $valid_res returns output response of API.
     */
    public function rules_reports_users($request_arr = array())
    {
        $valid_arr = array(
            "user_id" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "user_id_required",
                )
            ),
            "report_on" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "report_on_required",
                )
            ),
            "reason_id" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "reason_id_required",
                )
            )
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "reports_users");

        return $valid_res;
    }

    /**
     * Used to initiate api execution flow.
     * 
     * @param array $request_arr request_arr array is used for api input.
     * 
     * @param bool $inner_api inner_api flag is used to idetify whether it is inner api request or general request.
     * 
     * @return array $output_response returns output response of API.
     */
    public function start_reports_users($request_arr = array(), $inner_api = FALSE)
    {
        try
        {
            $validation_res = $this->rules_reports_users($request_arr);
            if ($validation_res["success"] == FAILED_CODE)
            {
                if ($inner_api === TRUE)
                {
                    return $validation_res;
                } else{
                    $this->wsresponse->sendValidationResponse($validation_res);
                }
            }
            $output_response = array();
            $input_params = $validation_res['input_params'];
            $output_array = $func_array = array();
            $input_params = $this->insert_reports($input_params);
            $condition_res = $this->check_insereted($input_params);
            if ($condition_res["success"])
            {
                $input_params = $this->get_reports_user_for_notifi($input_params);
                    $input_params = $this->custom_function($input_params);
                    $input_params = $this->post_notification($input_params);
                    /*$condition_res = $this->check_receiver_device_token($input_params);
                    if ($condition_res["success"]) {

                        $input_params = $this->push_notification($input_params);
    
                        //$output_response = $this->reports_users_finish_success($input_params);
                        //return $output_response;
                    } else {
                        //$output_response = $this->messages_finish_success_1($input_params);
                    
                        //return $output_response;
                    }  */          
                $output_response = $this->reports_users_finish_success($input_params);
                return $output_response;
            } else{
                $output_response = $this->reports_users_finish_success_1($input_params);
                return $output_response;
            }
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }
        return $output_response;
    }

    /**
     * Used to process query block.
     * 
     * @param array $input_params input_params array to process loop flow.
     
     * @return array $input_params returns modfied input_params array.
     */
    public function insert_reports($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $params_arr = array();
            if (isset($input_params["user_id"]))
            {
                $params_arr["user_id"] = $input_params["user_id"];
            }
            if (isset($input_params["message"]))
            {
                $params_arr["message"] = $input_params["message"];
            }
            if (isset($input_params["report_on"]))
            {
                $params_arr["report_on"] = $input_params["report_on"];
            }
            if (isset($input_params["reason_id"]))
            {
                $params_arr["reason_id"] = $input_params["reason_id"];
            }
            if (isset($input_params["reason_description"]))
            {
                $params_arr["reason_description"] = $input_params["reason_description"];
            }
            $params_arr["_dtaddedat"] = "NOW()";
            $this->block_result = $this->reports_model->insert_reports($params_arr);
            if(!$params_arr)
            {
            	throw new Exception("Exception Found");
            	
            }
        }
        catch(Exception $e)
        {
            $success = 0;
            $this->block_result["data"] = array();
            $this->general->apiLogger($params_arr, $e);
        }
        $input_params["insert_reports"] = $this->block_result["data"];
        $input_params["insert_reports"]["success"] =$this->block_result["success"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);

        return $input_params;
    }
    /**
     * Used to process conditions.
     *
     * @param array $input_params input_params array to process condition flow.
     
     * @return array $block_result returns result of condition block as array.
     */
    public function check_insereted($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = (($input_params["insert_reports"] == 0) ? 0:1);
            $cc_ro_0 = 1;

            $cc_fr_0 = ($cc_lo_0 == $cc_ro_0) ? TRUE : FALSE;
            if (!$cc_fr_0)
            {
                throw new Exception("Sorry, abusive user report not saved.");
            }
            $success = 1;
            $message = "Conditions matched.";
        }
        catch(Exception $e)
        {
            $success = 0;
            $message = $e->getMessage();
            $this->general->apiLogger($input_params, $e);
        }
        $this->block_result["success"] = $success;
        $this->block_result["message"] = $message;

        return $this->block_result;
    }
    /**
     * Method is used to process query block.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function get_reports_user_for_notifi($input_params = array())
    {
        $this->block_result = array();
        try {
            $sender_id = isset($input_params["user_id"]) ? $input_params["user_id"] : "";
            $receiver_id = isset($input_params["report_on"]) ? $input_params["report_on"] : "";

            $this->block_result = $this->reports_model->get_reports_user_for_notifi($sender_id, $receiver_id);
            if (!$this->block_result["success"]) {
                throw new Exception("No records found.");
            }

        } catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        $input_params["get_reports_user_for_notifi"] = $this->block_result["data"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);

        return $input_params;
    }
    
    /**
     * Used to process custom function.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function custom_function($input_params = array())
    {
        if (!method_exists($this, "PrepareHelperMessage")) {
            $result_arr["data"] = array();
        } else {
            $result_arr["data"] = $this->PrepareHelperMessage($input_params);
        }
        $format_arr = $result_arr;
        $format_arr = $this->wsresponse->assignFunctionResponse($format_arr);
        $input_params["custom_function"] = $format_arr;

        $input_params = $this->wsresponse->assignSingleRecord($input_params, $format_arr);

        return $input_params;
    }

    /**
    * post_notification method is used to process query block.
    *
    * @param array $input_params input_params array to process loop flow.
    *
    * @return array $input_params returns modfied input_params array.
    */
    public function post_notification($input_params = array())
    {
        $this->block_result = array();
        try {
            $params_arr = array();

            if (isset($input_params["notification_message"])) {
                $params_arr["notification_message"] = $input_params["notification_message"];
            }
            if (isset($input_params["r_users_id"])) {
                $params_arr["r_users_id"] = $input_params["r_users_id"];
            }
            if (isset($input_params["report_id"])) {
                $params_arr["entity_type"] = "Report user";
                $params_arr["entity_id"] = $input_params["report_id"];
            }
            $params_arr["redirection_type"] = "Report user";
            $params_arr["_enotificationtype"] = "Report user";
            $input_params["notification_type"] = "Report user";
            $params_arr["_dtaddedat"] = "NOW()";
            $params_arr["_dtupdatedat"] = "NOW()";
            $params_arr["_estatus"] = "Unread";
            if (isset($input_params["s_users_id"])) {
                $params_arr["s_users_id"] = $input_params["s_users_id"];
            }
            $this->block_result = $this->notification_model->post_notification($params_arr);

        } catch (Exception $e) {
            $success = FAILED_CODE;
            $this->block_result["data"] = array();
        }
        $input_params["post_notification"] = $this->block_result["data"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);

        return $input_params;
    }

    /**
     * check_receiver_device_token method is used to process conditions.
     * 
     * @param array $input_params input_params array to process condition flow.
     * 
     * @return array $block_result returns result of condition block as array.
     */
    public function check_receiver_device_token($input_params = array())
    {
        $this->block_result = array();
        try {
            $cc_lo_0 = $input_params["r_device_token"];

            $cc_fr_0 = (!is_null($cc_lo_0) && !empty($cc_lo_0) && trim($cc_lo_0) != "") ? true : false;
            if (!$cc_fr_0) {
                throw new Exception("Some conditions does not match.");
            }
            $success = SUCCESS_CODE;
            $message = "Conditions matched.";
        } catch (Exception $e) {
            $success = FAILED_CODE;
            $message = $e->getMessage();
        }
        $this->block_result["success"] = $success;
        $this->block_result["message"] = $message;
        return $this->block_result;
    }

    /**
     * push_notification method is used to process mobile push notification.
     * @created CIT Dev Team
     * @modified Devangi Nirmal | 18.06.2019
     * @param array $input_params input_params array to process loop flow.
     * @return array $input_params returns modfied input_params array.
     */
    public function push_notification($input_params = array())
    {
        $this->block_result = array();
        try {
            
            $device_id = $input_params["r_device_token"];
            $input_params["notification_message"] = $input_params["notification_message"];
            $code = "USER";
            $sound = "default";
            $badge = $input_params["get_count"]["data"][0]["notification_count"];
            $title = "";
            $send_vars = array(
                array(
                    "key" => "type",
                    "value" => "Message",
                    "send" => "Yes",
                ),
                array(
                    "key" => "receiver_id",
                    "value" => "".$input_params["r_users_id"]."",
                    "send" => "Yes",
                ),
                array(
                    "key" => "sender_id",
                    "value" => "".$input_params["s_users_id"]."",
                    "send" => "Yes",
                ),
                array(
                    "key" => "sender_name",
                    "value" => $input_params["s_name"],
                    "send" => "Yes",
                ),
                array(
                    "key" => "sender_profile_image",
                    "value" => $input_params["sender_profile_image"],
                    "send" => "Yes",
                ),
                array(
                    "key" => "notification_type",
                    "value" => $input_params["notification_type"],
                    "send" => "Yes",
                ),
                array(
                    "key" => "entity_id",
                    "value" => $input_params["report_id"],
                    "send" => "Yes",
                )                
            );
            $push_msg = "".$input_params["notification_message"]."";
            $push_msg = $this->general->getReplacedInputParams($push_msg, $input_params);
            $send_mode = "runtime";

            $send_arr = array();
            $send_arr['device_id'] = $device_id;
            $send_arr['code'] = $code;
            $send_arr['sound'] = $sound;
            $send_arr['badge'] = intval($badge);
            $send_arr['title'] = $title;
            $send_arr['message'] = $push_msg;
            $send_arr['variables'] = json_encode($send_vars);
            $send_arr['send_mode'] = $send_mode;
            $uni_id = $this->general->insertPushNotification($send_arr);
            
            if (!$uni_id) {
                throw new Exception('Failure in insertion of push notification batch entry.');
            }

            $success = SUCCESS_CODE;
            $message = "Push notification send succesfully.";
        } catch (Exception $e) {
            $success = FAILED_CODE;
            $message = $e->getMessage();
        }
        $this->block_result["success"] = $success;
        $this->block_result["message"] = $message;
        $input_params["push_notification"] = $this->block_result["success"];

        return $input_params;
    }

    /**
     * This method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function messages_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "messages_finish_success",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reports_users";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * Used to process finish API success flow.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $responce_arr returns responce array of api.
     */
    public function messages_finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "messages_finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reports_users";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * reports_users_finish_success method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function reports_users_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "reports_users_finish_success",
        );
        $output_fields = array(
            "report_id"
        );
        $output_key = array(
            "insert_reports"
        );
        $ouput_aliases = array(
            "insert_reports" => "insert_reports",
            "report_id" => "report_id"
        );

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reports_users";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array['function']['output_keys'] = $output_key;
        $func_array['function']['ouput_aliases'] = $ouput_aliases;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }

    /**
     * reports_users_finish_success_1 method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function reports_users_finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "reports_users_finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reports_users";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
}

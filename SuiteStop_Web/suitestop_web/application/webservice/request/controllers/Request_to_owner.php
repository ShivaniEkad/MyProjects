<?php
defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Description of requested to owner Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module requested to owner
 *
 * @class Request_to_owner.php
 *
 * @path application\webservice\request\controllers\Request_to_owner.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */
class Request_to_owner extends Cit_Controller
{
    public $settings_params;
    public $output_params;
    public $single_keys;
    public $multiple_keys;
    public $block_result;

    public function __construct()
    {
        parent::__construct();
        $this->settings_params = array();
        $this->output_params = array();
        $this->single_keys = array(
           "request_to_owner"
        );
        $this->multiple_keys = array(
            
        );
        $this->block_result = array();

        $this->load->library('wsresponse');
        $this->load->model("notification/notification_model");
        $this->load->model("basic_appineers_master/users_model");
        $this->load->model('request/request_model');
    }

    /**
     * This method is used to validate api input params.
     * 
     * @modified Suresh Nakate | 31.08.2021
     *
     * @param array $request_arr request input array.
     *
     * @return array $valid_res validation output response.
     */
    public function rules_request_to_owner($request_arr = array())
    {
        $valid_arr = array(
            "space_id" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "space_id_required",
                ),
            ),
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "request_to_owner");

        return $valid_res;
    }

    /**
     * This method is used to initiate api execution flow.
     * 
     * @modified Suresh Nakate | 31.08.2021
     *
     * @param array $request_arr request_arr array is used for api input.
     * @param bool $inner_api inner_api flag is used to idetify whether it is inner api request or general request.
     *
     * @return array $output_response returns output response of API.
     */
    public function start_request_to_owner($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {
            $validation_res = $this->rules_request_to_owner($request_arr);
            if ($validation_res["success"] == FAILED_CODE)
            {
                if ($inner_api === TRUE)
                {
                    return $validation_res;
                }
                else
                {
                    $this->wsresponse->sendValidationResponse($validation_res);
                }
            }
            $output_response = array();
            $input_params = $validation_res['input_params'];
            $output_array = $func_array = array();
            $input_params = $this->check_unique_space($input_params);
            if ($input_params["check_unique_space"]["status"])
            {
                $input_params = $this->request_send_to_owner($input_params);
                if($input_params["request_send_to_owner"]["success"])
                {
                    $input_params = $this->get_user_details_for_notifi($input_params);
                    $input_params = $this->custom_function($input_params);
                    $input_params = $this->post_notification($input_params);
                    if($input_params['post_notification']['success'] == '1')
                    {                   
                        $condition_res = $this->check_receiver_device_token($input_params);
            
                        if ($condition_res["success"]) {

                            $input_params = $this->check_notification_count($input_params);
                            $input_params = $this->push_notification($input_params);
                            //$output_response = $this->request_to_owner_finish_success($input_params);
                            //return $output_response;
                        } else {
                            //$output_response = $this->messages_finish_success_1($input_params);
                        
                            //return $output_response;
                        }            
                        $output_response = $this->request_to_owner_finish_success($input_params);
                        return $output_response;
                    }
                } else {
                    $output_response = $this->request_to_owner_finish_failure($input_params);
                    return $output_response;
                }  
            } else{
                $input_params = $this->check_space_status($input_params);
                if ($input_params["eStatus"] == 'Accept') {
                    $output_response = $this->request_accept_finish_success($input_params);
                    return $output_response;
                } elseif($input_params["eStatus"] == 'Reject')
                {
                    $output_response = $this->request_reject_finish_success($input_params);
                    return $output_response;
                } else{
                    $output_response = $this->finish_success_1($input_params);
                    return $output_response;
                }
            }
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }
        return $output_response;
    }

    /**
     * Used to process query block & get requested to_owner.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function request_send_to_owner($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $space_id = isset($input_params["space_id"]) ? $input_params["space_id"] : "";
            $this->block_result = $this->request_model->request_send_to_owner($input_params, $space_id);
            if (!$this->block_result["success"])
            {
                throw new Exception("No records found.");
            }
            $result_arr = $this->block_result["data"];
           
        }
        catch(Exception $e)
        {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        $input_params["request_send_to_owner"] = $this->block_result['data'];
        $input_params["request_send_to_owner"]['success'] = $this->block_result['success'];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $input_params["request_send_to_owner"]);

        return $input_params;
    }

    /**
     * This method is used to check unique space.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $input_params returns modified input_params array.
     */
    public function check_unique_space($input_params = array())
    {
        if (!method_exists($this, "checkUniqueSpace")) {
            $result_arr["data"] = array();
        } else {
            $result_arr["data"] = $this->checkUniqueSpace($input_params);
        }
        $format_arr = $result_arr;

        $format_arr = $this->wsresponse->assignFunctionResponse($format_arr);
        $input_params["check_unique_space"] = $format_arr;

        $input_params = $this->wsresponse->assignSingleRecord($input_params, $format_arr);

        return $input_params;
    }
    /**
     * This method is used to check space status.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $input_params returns modified input_params array.
     */
    public function check_space_status($input_params = array())
    {
        if (!method_exists($this, "checkSpaceSatus")) {
            $result_arr["data"] = array();
        } else {
            $result_arr["data"] = $this->checkSpaceSatus($input_params);
        }
        $format_arr = $result_arr;

        $format_arr = $this->wsresponse->assignFunctionResponse($format_arr);
        $input_params["check_space_status"] = $format_arr;

        $input_params = $this->wsresponse->assignSingleRecord($input_params, $format_arr);

        return $input_params;
    }
    /**
     * Method is used to process query block.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function get_user_details_for_notifi($input_params = array())
    {
        $this->block_result = array();
        try {
            $user_id = isset($input_params["user_id"]) ? $input_params["user_id"] : "";
            $receiver_id = isset($input_params["space_id"]) ? $input_params["space_id"] : "";

            $this->block_result = $this->request_model->get_user_details_for_notifi($user_id, $receiver_id);
           
            if (!$this->block_result["success"]) {
                throw new Exception("No records found.");
            }

            $this->block_result['data'] = array_map(function (array $arr) {
                $image_arr = array();
                $image_arr["image_name"] = $arr["sender_profile_image"];
                $image_arr["ext"] = implode(",", $this->config->item("IMAGE_EXTENSION_ARR"));

                $image_arr["color"] = "FFFFFF";
                $image_arr["no_img"] = false;
                $image_arr["path"]=  $this->config->item("AWS_FOLDER_NAME") . "/user_profile/". $arr["s_users_id"];
                $data_1 = $this->general->get_image_aws($image_arr);
                $arr['sender_profile_image'] = $data_1;

                return $arr;
            }, $this->block_result['data']);

        } catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        $input_params["get_user_details_for_notifi"] = $this->block_result["data"];
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
            if (isset($input_params["space_id"])) {
                $params_arr["receiver_id"] = $input_params["space_id"];
            }
            if (isset($input_params["request_id"])) {
                $params_arr["entity_type"] = "Request to Owner";
                $params_arr["entity_id"] = $input_params["request_id"];
            }
            $params_arr["redirection_type"] = "Request to Owner";
            $params_arr["_enotificationtype"] = "Request to Owner";
            $input_params["notification_type"] = "Request to Owner";
            $params_arr["_dtaddedat"] = "NOW()";
            $params_arr["_dtupdatedat"] = "NOW()";
            $params_arr["_estatus"] = "Unread";
            if (isset($input_params["user_id"])) {
                $params_arr["user_id"] = $input_params["user_id"];
            }
            $this->block_result = $this->notification_model->request_post_notification($params_arr);
            
        } catch (Exception $e) {
            $success = FAILED_CODE;
            $this->block_result["data"] = array();
        }
        $input_params["post_notification"] = $this->block_result["data"];
        $input_params["post_notification"]["success"] =$this->block_result["success"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);
        if(!empty($input_params))
        {
            $input_params = $this->insert_notification_id($input_params);
        }
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
     * This method is used to process insert_notification_id for send request .

     * @param array $input_params input_params array to process loop flow.

     * @return array $input_params returns modfied input_params array.
     */
    public function insert_notification_id($input_params)
    {  
        $this->block_result = array();
        try {
            $params_arr =$where_arr = array();
            if (isset($input_params["user_id"])) {
                $where_arr["user_id"] = $input_params["user_id"];
            }
            if (isset($input_params["space_id"])) {
                $where_arr["space_id"] = $input_params["space_id"];
            }
            if (isset($input_params['insert_id'])) {
                $input_params['insert_id'] = $input_params['insert_id'];
            }
            $this->block_result = $this->request_model->insert_notification_id($input_params, $where_arr);
            
            if (!$this->block_result["success"]) {
                throw new Exception("Insertion failed.");
            }
            $success = 1;
            $data_arr = $this->block_result["data"];
        } catch (Exception $e) {
            $success = 0;
            $this->block_result["data"] = array();
        }
        $input_params["insert_notification_id"] = $this->block_result["data"];
        $input_params["insert_notification_id"]["success"] = $this->block_result["success"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);
        return $input_params;
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
                    "key" => "notification_id",
                    "value" => "".$input_params["insert_id"]."",
                    "send" => "Yes",
                ),
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
                    "value" => $input_params["request_id"],
                    "send" => "Yes",
                ),
                array(
                    "key" => "space_id",
                    "value" => $input_params["space_id"],
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
    public function check_notification_count($input_params = array())
    {
        if (!method_exists($this, "get_count")) {
            $result_arr["data"] = array();
        } else {
            $result_arr["data"] = $this->get_count($input_params["r_users_id"]);
        }
        $format_arr = $result_arr;

        $format_arr = $this->wsresponse->assignFunctionResponse($format_arr);
        $input_params["get_count"] = $format_arr;

        $params_arr = $this->wsresponse->assignSingleRecord($input_params, $format_arr);
        return $params_arr;
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

        $func_array["function"]["name"] = "request_to_owner";
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

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }

    /**
     * request_to_owner_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_to_owner_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "request_to_owner_finish_success",
        );
         $output_fields = array(
            'request_id',
        );
        $output_keys = array(
             'request_send_to_owner',
         );
         $ouput_aliases = array(
            'request_send_to_owner'=>'request_send_to_owner',
            'request_id'=> 'request_id',
        );
        $output_array["settings"] = array_merge($this->settings_params, $setting_fields);
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    
    /**
     * accepted_to_owner_finish_failure method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_to_owner_finish_failure($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "request_to_owner_finish_failure",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * request_accept_finish_success method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_accept_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "request_accept_finish_success",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(CONFLICT);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * request_reject_finish_success method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_reject_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "request_reject_finish_success",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(CONFLICT);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * Used to process finish API failure flow.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $responce_arr returns responce array of api.
     */
    public function finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "finish_success_1"
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_to_owner";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(CONFLICT);
        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);
        return $responce_arr;
    }
}
?>
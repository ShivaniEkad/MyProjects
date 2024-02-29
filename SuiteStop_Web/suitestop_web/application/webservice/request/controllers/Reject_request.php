<?php
defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Description of Request status update Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module Request status update
 *
 * @class Reject_request.php
 *
 * @path application\webservice\request\controllers\Reject_request.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */
class Reject_request extends Cit_Controller
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
           "request_status"
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
    public function rules_reject_request($request_arr = array())
    {
        $valid_arr = array(
            "entity_id" =>array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "entity_id_required",
                ),
            ),
            "status" =>array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "status_required",
                ),
            ),
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "reject_request");

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
    public function start_reject_request($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {
            $validation_res = $this->rules_reject_request($request_arr);
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
            $input_params = $this->request_status($input_params);
          
            $condition_res = $this->is_details_updated($input_params);
            if($condition_res['success']){
                $input_params = $this->get_user_change_status_notification($input_params);
                $input_params = $this->custom_function($input_params);
                $input_params = $this->post_notification($input_params);
                $condition_res = $this->check_receiver_device_token($input_params);
    
                if ($condition_res["success"]) {

                    $input_params = $this->check_notification_count($input_params);
                    $input_params = $this->push_notification($input_params);
                    //$output_response = $this->reject_request_finish_success($input_params);
                    //return $output_response;
                } else {
                    //$output_response = $this->messages_finish_success_1($input_params);
                
                    //return $output_response;
                }            
                $output_response = $this->reject_request_finish_success($input_params);
                return $output_response;
            } else {
                $output_response = $this->reject_request_finish_failure($input_params);
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
     * Used to process query block & accept the request.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function request_status($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $params_arr = $where_arr = array();
            if (isset($input_params["entity_id"])) {
                $where_arr["entity_id"] = $input_params["entity_id"];
            }
            if (isset($input_params["status"])) {
                $params_arr["status"] = $input_params["status"];
            }
            if (isset($input_params["notification_id"])) {
                $params_arr["notification_id"] = $input_params["notification_id"];
            }
            $this->block_result = $this->request_model->reject_request($where_arr,$params_arr);

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
        $input_params["request_status"] = $this->block_result['data'];
        $input_params["request_status"]['success'] = $this->block_result['success'];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $input_params["request_status"]);

        return $input_params;
    }
    /**
     * This method is used to process conditions.
     * 
     * @param array $input_params input_params array to process condition flow.
     * 
     * @return array $block_result returns result of condition block as array.
     */
    public function is_details_updated($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = (($input_params["affected_rows"] == 0) ? 0:1);
            $cc_ro_0 = 1;
            $cc_fr_0 = ($cc_lo_0 == $cc_ro_0) ? TRUE : FALSE;
            if (!$cc_fr_0)
            {
                throw new Exception("Not Updated Successfully.");
            }
            $success = 1;
            $message = "Conditions matched.";
        }catch(Exception $e)
        {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $message = $e->getMessage();
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
    public function get_user_change_status_notification($input_params = array())
    {
        $this->block_result = array();
        try {
            $sender_id = isset($input_params["entity_id"]) ? $input_params["entity_id"] : "";
            $this->block_result = $this->request_model->get_user_change_status_notification($sender_id);
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
        $input_params["get_user_change_status_notification"] = $this->block_result["data"];
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
            if (isset($input_params["entity_id"])) {
                $params_arr["entity_type"] = "Request rejected";
                $params_arr["entity_id"] = $input_params["entity_id"];
            }
            $params_arr["redirection_type"] = "Request rejected";
            $params_arr["_enotificationtype"] = "Request rejected";
            $input_params["notification_type"] = "Request rejected";
            $params_arr["_dtaddedat"] = "NOW()";
            $params_arr["_dtupdatedat"] = "NOW()";
            $params_arr["_estatus"] = "Unread";
            if (isset($input_params["s_users_id"])) {
                $params_arr["s_users_id"] = $input_params["s_users_id"];
            }
            $this->block_result = $this->notification_model->request_status_post_notification($params_arr);
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
                    "value" => $input_params["entity_id"],
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

        $func_array["function"]["name"] = "reject_request";
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

        $func_array["function"]["name"] = "reject_request";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }

    /**
     * reject_request_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function reject_request_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "reject_request_finish_success",
        );
         $output_fields = array(
            'affected_rows',
        );
        $output_keys = array(
             'request_status',
         );
         $ouput_aliases = array(
            'request_status'=>'request_status',
            'affected_rows'=> 'affected_rows',
        );
        $output_array["settings"] = array_merge($this->settings_params, $setting_fields);
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reject_request";
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    
    /**
     * rejected_to_owner_finish_failure method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function reject_request_finish_failure($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "reject_request_finish_failure",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "reject_request";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

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

        $func_array["function"]["name"] = "reject_request";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(CONFLICT);
        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);
        return $responce_arr;
    }
}
?>
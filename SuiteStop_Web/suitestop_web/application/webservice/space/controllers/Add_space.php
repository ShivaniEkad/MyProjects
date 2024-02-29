<?php
defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Description of Create space Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module Create space
 *
 * @class Add_space.php
 *
 * @path application\webservice\space\controllers\Add_space.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */

class Add_space extends Cit_Controller
{
    public $settings_params;
    /** @var array $output_params contains output parameters */
    public $output_params;

    /** @var array $single_keys contains single array */
    public $single_keys;

    /** @var array $multiple_keys contains multiple array */
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
            "create_space"
        );
        $this->multiple_keys = array();
        $this->block_result = array();

        $this->load->library('wsresponse');
        $this->load->model("notification/notification_model");
        $this->load->model("basic_appineers_master/users_model");
        $this->load->model('space/space_model');
        $this->load->library('lib_log');
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
    public function rules_create_space($request_arr = array())
    {
        $valid_arr = array(
            "user_id" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "user_id_required",
                ),
            ),
            "space_name" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "space_name_required",
                ),
            ),
            "address" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "address_required",
                ),
            ),
            "city" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "city_required",
                ),
            ),
            "state" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "state_required",
                ),
            ),
            "zipcode" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "zipcode_required",
                ),
            ),
            /*"latitude" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "latitude_required",
                ),
            ),
            "longitude" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "longitude_required",
                )
            ),*/
            "stylist_required" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "stylist_required_required",
                )
            ),
            "space_details" => array(
                array(
                    "rule" => "required",
                    "value" => true,
                    "message" => "space_details_required",
                )
            ),
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "add_space");

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
    public function start_add_space($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {   
            $validation_res = $this->rules_create_space($request_arr);
          
            if ($validation_res["success"] == FAILED_CODE)
            {
                if ($inner_api === TRUE)
                {
                    return $validation_res;
                } else {
                    $this->wsresponse->sendValidationResponse($validation_res);
                }
            } 
            $output_response = array();
            $input_params = $validation_res['input_params'];
            $output_array = $func_array = array();
            if($input_params['usertype'] == 'Landlord')
            {
                $input_params = $this->create_space($input_params);
                if($input_params['create_space']['success']){
                    $input_params = $this->get_add_space_details_for_notifi($input_params);
                    
                    $data = $this->receiver_details($input_params);
                   
                    $output_response = $this->space_finish_success($data);
                    return $output_response;
                } else {
                    $output_response = $this->space_finish_success_1($data);

                    return $output_response;
                }
            } else{
                $output_response = $this->finish_success_1($input_params);
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
     * Used to process query block & create space.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function create_space($input_params = array())
    {
        $this->block_result = array();
        try {
            $params_arr = array();
            if (!empty($input_params["user_id"])) {
                $params_arr["user_id"] = $input_params["user_id"];
            }
            if (!empty($input_params["space_name"])) {
                $params_arr["space_name"] = $input_params["space_name"];
            }
            if (!empty($input_params["address"])) {
                $params_arr["address"] = $input_params["address"];
            }
            if (!empty($input_params["city"])) {
                $params_arr["city"] = $input_params["city"];
            }
            if (!empty($input_params["state"])) {
                $params_arr["state"] = $input_params["state"];
            }
            if (!empty($input_params["zipcode"])) {
                $params_arr["zipcode"] = $input_params["zipcode"];
            }
            if (!empty($input_params["latitude"])) {
                $params_arr["latitude"] = $input_params["latitude"];
            }
            if (!empty($input_params["longitude"])) {
                $params_arr["longitude"] = $input_params["longitude"];
            }
            if (!empty($input_params["stylist_required"])) {
                $params_arr["stylist_required"] = $input_params["stylist_required"];
            }
            if (!empty($input_params["space_details"])) {
                $params_arr["space_details"] = $input_params["space_details"];
            }
            if (!empty($input_params["images"])) {
                $params_arr["images"] = $input_params["images"];
            }
            if (!empty($input_params["video"])) {
                $params_arr["video"] = $input_params["video"];
            }
            $this->block_result = $this->space_model->create_space($input_params);
            if (!$this->block_result["success"]) {
                throw new Exception("Insertion failed.");
            }

            $data_arr = $this->block_result["data"][0];
        } catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        
        $input_params["create_space"] =$this->block_result["data"];
        $input_params["create_space"]["success"] =$this->block_result["success"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);
        return $input_params;
    }
    /**
     * Method is used to process query block.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function get_add_space_details_for_notifi($input_params = array())
    {
        $this->block_result = array();
        try {
            $sender_id = isset($input_params["space_id"]) ? $input_params["space_id"] : "";
           
            $this->block_result = $this->space_model->get_add_space_details_for_notifi($sender_id);

            if (!$this->block_result["success"]) {
                throw new Exception("No records found.");
            }
        } catch (Exception $e) {
            
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        
        $input_params["get_add_space_details_for_notifi"] = $this->block_result["data"];
       
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
    public function custom_function($input_params = array(),$value = array())
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
    public function post_notification($input_params = array(), $value = array())
    {
        $this->block_result = array();
        try {
            $params_arr = array();
            $i=0;
            foreach($value AS $id){
                if (isset($input_params["notification_message"])) {
                    $params_arr["notification_message"] = $input_params["notification_message"];
                }
                if (isset($id['r_users_id'])) {
                    $params_arr["r_users_id"] = $id['r_users_id'];
                }
                if(isset($id['r_device_token'])){
                    $params_arr["r_device_token"] = $id['r_device_token'];
                }
                if (isset($input_params["space_id"])) {
                    $params_arr["entity_type"] = "New space created";
                    $params_arr["entity_id"] = $input_params["space_id"];
                }
                $params_arr["redirection_type"] = "New space created";
                $params_arr["_enotificationtype"] = "New space created";
                $input_params["notification_type"] = "New space created";
                $params_arr["_dtaddedat"] = "NOW()";
                $params_arr["_dtupdatedat"] = "NOW()";
                $params_arr["_estatus"] = "Unread";
                if (isset($input_params["user_id"])) {
                    $params_arr["s_users_id"] = $input_params["user_id"];
                }
                $this->block_result = $this->notification_model->add_post_notification($params_arr);
                if($this->block_result['success'] == '1')
                {  
                    $input_params = $this->push_notification($input_params,$this->block_result['data'][0]);
                }
            $i++;
            }

        } catch (Exception $e) {
            $success = FAILED_CODE;
            $this->block_result["data"] = array();
        }
        $input_params["post_notification"] =$this->block_result["data"];
        $input_params["post_notification"]["success"] =$this->block_result["success"];
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
    public function check_receiver_device_token($input_params = array(), $value = array())
    {
        $this->block_result = array();
        try {
            $i=0;
            foreach($value as $val)
            {
                $cc_lo_0 = $val["r_device_token"];
                $cc_fr_0 = (!is_null($cc_lo_0) && !empty($cc_lo_0) && trim($cc_lo_0) != "") ? true : false;
                if (!$cc_fr_0) {
                    throw new Exception("Some conditions does not match.");
                }
                $success = SUCCESS_CODE;
                $message = "Conditions matched.";
            $i++;
            }
        } catch (Exception $e) {
            $success = FAILED_CODE;
            $message = $e->getMessage();
        }
        $this->block_result["success"] = $success;
        $this->block_result["message"] = $message;
        $this->block_result['data'] = $input_params;
        return $this->block_result;
    }

    /**
     * push_notification method is used to process mobile push notification.
     * @created CIT Dev Team
     * @modified Devangi Nirmal | 18.06.2019
     * @param array $input_params input_params array to process loop flow.
     * @return array $input_params returns modfied input_params array.
     */
    public function push_notification($input_params = array(), $value = array())
    { 
        $this->block_result = array();
        try {
            if(!empty($value["r_device_token"]))
            {
                $device_id = $value["r_device_token"];
                $input_params["notification_message"] = $input_params["notification_message"];
                $code = "USER";
                $sound = "default";
                $badge = $input_params["get_count"]["data"][0]["notification_count"];
                $title = "";
                $send_vars = array(
                    array(
                        "key" => "notification_id",
                        "value" => "".$value["insert_id"]."",
                        "send" => "Yes",
                    ),
                    array(
                        "key" => "type",
                        "value" => "Message",
                        "send" => "Yes",
                    ),
                    array(
                        "key" => "receiver_id",
                        "value" => "".$value["r_users_id"]."",
                        "send" => "Yes",
                    ),
                    array(
                        "key" => "sender_id",
                        "value" => "".$input_params["user_id"]."",
                        "send" => "Yes",
                    ),
                    array(
                        "key" => "sender_name",
                        "value" => $input_params['get_add_space_details_for_notifi'][0]["sender_name"],
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
                        "value" => "".$input_params["space_id"]."",
                        "send" => "Yes",
                    ),
                    array(
                        "key" => "space_id",
                        "value" => "".$input_params["space_id"]."",
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
        }
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
     * get receiver details for push notification to all space user.
     * @param array $input_params input params array to process loop flow.
     */
    public function receiver_details($input_params = array())
    {
        $result_arr = array();
        if(!empty($input_params["get_add_space_details_for_notifi"]))
        {
            if(!empty($input_params['get_add_space_details_for_notifi']["receiver_id"]))
            {
                $i = 0;
                foreach($input_params['get_add_space_details_for_notifi']["receiver_id"] AS $value)
                {   
                    $input_params= $this->custom_function($input_params, $value);
                    $input_params = $this->post_notification($input_params, $value);
                    $input_params = $this->check_notification_count($input_params, $value);
                $i++;
                }
            }
        }
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
     * space_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function space_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "space_finish_success",
        );
        $output_fields = array(
            'space_id'
        );
        $output_keys = array(
            'create_space'
        );
         $ouput_aliases = array(
            'create_space' => 'create_space',
            'space_id'=> 'space_id'
            
        );
        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;
        $func_array["function"]["name"] = 'add_space';
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["ouput_aliases"] = $ouput_aliases;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(CREATED);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);
        return $responce_arr;
    }

    /**
     * space_finish_success_1 method is finish API failure flow..
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function space_finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "space_finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "add_space";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
     /**
     * finish_success_1 method is finish API failure flow..
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "add_space";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
   
}
?>
<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Edit Profile Controller
 *
 * @category webservice
 *
 * @package basic_appineers_master
 *
 * @subpackage controllers
 *
 * @module Edit Profile
 *
 * @class Edit_profile.php
 *
 * @path application\webservice\basic_appineers_master\controllers\Edit_profile.php
 * 
 */

class Edit_profile extends Cit_Controller
{
    /** @var array $output_params contains settings parameters */
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
            "update_profile",
            "get_updated_details",
        );
        $this->multiple_keys = array(
            "checkuniqueusername",
        );
        $this->block_result = array();

        $this->load->library('wsresponse');
        $this->load->model('edit_profile_model');
        $this->load->library('lib_log');
        $this->load->model("basic_appineers_master/users_model");
    }

     /**
     * This method is used to validate api input params.
     * 
     * @param array $request_arr request_arr array is used for api input.
     * 
     * @return array $valid_res returns output response of API.
     */
    public function rules_location($request_arr = array())
    {
        $valid_arr = array(
            /*"latitude" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "latitude_required",
                )
            ),
            "longitude" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "longitude_required",
                )
            ),*/
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "edit_profile");

        return $valid_res;
    }
    /**
     * This method is used to validate api input params.
     * 
     * @param array $request_arr request_arr array is used for api input.
     * 
     * @return array $valid_res returns output response of API.
     */
    public function rules_edit_profile($request_arr = array())
    {
        $valid_arr = array(
            "user_id" => array(
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "user_id_required",
                )
            ),
            "first_name" => array(
                array(
                    "rule" => "minlength",
                    "value" => 1,
                    "message" => "first_name_minlength",
                ),
                array(
                    "rule" => "maxlength",
                    "value" => 80,
                    "message" => "first_name_maxlength",
                ),
                array(
                    "rule" => "required",
                    "value" => TRUE,
                    "message" => "first_name_required",
                )
            ),
            "last_name" => array(
                array(
                    "rule" => "minlength",
                    "value" => 1,
                    "message" => "last_name_minlength",
                ),
                array(
                    "rule" => "maxlength",
                    "value" => 80,
                    "message" => "last_name_maxlength",
                ),
                array(
                    "rule" => "required",
                    "value" =>TRUE,
                    "message" => "last_name_required",
                )
            ),
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "edit_profile");

        return $valid_res;
    }

    /**
     * This method is used to initiate api execution flow.
     * 
     * @param array $request_arr request_arr array is used for api input.
     * @param bool $inner_api inner_api flag is used to idetify whether it is inner api request or general request.
     * 
     * @return array $output_response returns output response of API.
     */
    public function start_edit_profile($request_arr = array(), $inner_api = FALSE)
    {
        try
        {
           if($request_arr['isLocationEnabled'] == 'Yes')
            {   
                $validation_res = $this->rules_location($request_arr);
            } else{
                $validation_res = $this->rules_edit_profile($request_arr);
            }
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

            $input_params = $this->checkuniqueusername($input_params);
            $condition_res = $this->condition($input_params);
            if ($condition_res["success"])
            {
                $input_params = $this->update_profile($input_params);
                $condition_res = $this->is_details_updated($input_params);
                if ($condition_res["success"]) 
                {
                    $input_params = $this->get_updated_details($input_params);
                    $condition_res = $this->check_user_exists($input_params);
                    if ($condition_res["success"]) 
                    {
                        $output_response = $this->users_finish_success_2($input_params);
                        return $output_response;     
                    } else {
                        $output_response = $this->users_finish_success_1($input_params);
                        return $output_response;
                    }
                } else {
                    $output_response = $this->users_finish_success_3($input_params);
                    return $output_response;
                }            
            } else{
                $output_response = $this->users_finish_success_1($input_params);
                return $output_response;
            }
        } catch(Exception $e)
        {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $message = $e->getMessage();
        }

        return $output_response;
    }

    /**
     * This method is used to process custom function.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function checkuniqueusername($input_params = array())
    {
        if (!method_exists($this, "checkUniqueUser"))
        {
            $result_arr["data"] = array();
        }
        else
        {
            $result_arr["data"] = $this->checkUniqueUser($input_params);
        }
        $format_arr = $result_arr;

        $format_arr = $this->wsresponse->assignFunctionResponse($format_arr);
        $input_params["checkuniqueusername"] = $format_arr;

        $input_params = $this->wsresponse->assignSingleRecord($input_params, $format_arr);

        return $input_params;
    }

    /**
     * This method is used to process conditions.
     * 
     * @param array $input_params input_params array to process condition flow.
     * 
     * @return array $block_result returns result of condition block as array.
     */
    public function condition($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = $input_params["status"];
            $cc_ro_0 = 1;

            $cc_fr_0 = ($cc_lo_0 == $cc_ro_0) ? TRUE : FALSE;
            if (!$cc_fr_0)
            {
                throw new Exception($input_params["message"]);
            }
            $success = 1;
            $message = "Conditions matched.";
        }catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->block_result["success"] = $success;
        $this->block_result["message"] = $message;

        return $this->block_result;
    }
    /**
     * This method is used to process query block.

     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function update_profile($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $params_arr = $where_arr = array();
            if (isset($input_params["user_id"]))
            {
                $where_arr["user_id"] = $input_params["user_id"];
            }
            if (isset($input_params["usertype"]))
            {
                $where_arr["usertype"] = $input_params["usertype"];
            }
            if (isset($_FILES["user_profile"]["name"]) && isset($_FILES["user_profile"]["tmp_name"]))
            {
                $sent_file = $_FILES["user_profile"]["name"];
            }
            else
            {
                $sent_file = "";
            }
            if (!empty($sent_file))
            {
                list($file_name, $ext) = $this->general->get_file_attributes($sent_file);
                $images_arr["user_profile"]["ext"] = implode(',', $this->config->item('IMAGE_EXTENSION_ARR'));
                $images_arr["user_profile"]["size"] = "102400";
                if ($this->general->validateFileFormat($images_arr["user_profile"]["ext"], $_FILES["user_profile"]["name"]))
                {
                    if ($this->general->validateFileSize($images_arr["user_profile"]["size"], $_FILES["user_profile"]["size"]))
                    {
                        $images_arr["user_profile"]["name"] = $file_name;
                    }
                }
            }
            if (isset($input_params["first_name"]) && !empty($input_params['first_name'])) {
                $params_arr["first_name"] = $input_params["first_name"];
            }
            if (isset($input_params["last_name"]) && !empty($input_params['last_name'])) {
                $params_arr["last_name"] = $input_params["last_name"];
            }
            if (!empty($images_arr["user_profile"]["name"])) {
                $params_arr["user_profile"] = $images_arr["user_profile"]["name"];
            }  
            $params_arr["_dtupdatedat"] = "NOW()";
            if (isset($input_params["email"]) && !empty($input_params['email'])) {
                $params_arr["email"] = $input_params["email"];
            }
            if (isset($input_params["mobile_number"]) && !empty($input_params['mobile_number'])) {
                $params_arr["mobile_number"] = $input_params["mobile_number"];
            }
            if (isset($input_params["aboutme"]) && !empty($input_params['aboutme'])) {
                $params_arr["aboutme"] = $input_params["aboutme"];
            }
            if (isset($input_params["latitude"]) && !empty($input_params['latitude'])) {
                $params_arr["latitude"] = $input_params["latitude"];
            }
            if (isset($input_params["longitude"]) && !empty($input_params['longitude'])) {
                $params_arr["longitude"] = $input_params["longitude"];
            }
            $this->block_result = $this->users_model->update_profile($params_arr, $where_arr);
            if (!$this->block_result["success"])
            {
                throw new Exception("updation failed.");
            }
            $data_arr = $this->block_result["data"]['0'];
            $upload_path = $this->config->item("upload_path");
            if (!empty($images_arr["user_profile"]["name"]))
            {
                $aws_folder_name = $this->config->item("AWS_FOLDER_NAME");
              //  $folder_name = $aws_folder_name."/user_profile/".$data_arr['insert_id'];
                $folder_name = $aws_folder_name."/user_profile/".$input_params["user_id"];
                $temp_file = $_FILES["user_profile"]["tmp_name"];
                $res = $this->general->uploadAWSData($temp_file, $folder_name, $images_arr["user_profile"]["name"]);
                if (!$res)
                {
                    //file upload failed

                }
            }
        }catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        $input_params["update_profile"] = $this->block_result["data"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);

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
            $cc_lo_0 = $input_params["affected_rows"];
            $cc_ro_0 = 0;

            $cc_fr_0 = ($cc_lo_0 > $cc_ro_0) ? TRUE : FALSE;
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
     * This method is used to process query block.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $input_params returns modfied input_params array.
     */
    public function get_updated_details($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $user_id = isset($input_params["user_id"]) ? $input_params["user_id"] : "";
            $this->block_result = $this->users_model->get_updated_details($user_id);
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
        $input_params["get_updated_details"] = $this->block_result["data"];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $this->block_result["data"]);

        return $input_params;
    }

    /**
     * This method is used to process conditions.
     * 
     * @param array $input_params input_params array to process condition flow.
     * @return array $block_result returns result of condition block as array.
     * 
     */
    public function check_user_exists($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = (empty($input_params["get_updated_details"]) ? 0 : 1);
            $cc_ro_0 = 1;

            $cc_fr_0 = ($cc_lo_0 == $cc_ro_0) ? TRUE : FALSE;
            if (!$cc_fr_0)
            {
                throw new Exception("User is not exist.");
            }
            $success = 1;
            $message = "Conditions matched.";
        }
        catch(Exception $e)
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
     * This method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function users_finish_success_2($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "users_finish_success_2",
        );
        $output_fields = array(
            'u_user_id',
            'u_first_name',
            'u_last_name',
            'u_email',
            'u_mobile_no',
            'usertype',
            'u_profile_image',
            'change_password',
            'u_about_me',
            'u_push_notify',
            'u_access_token',
            'u_device_type',
            'u_device_model',
            'u_latitude',
            'u_longitude',
            'u_device_os',
            'u_device_token',
            'u_status',
            'u_added_at',
            'u_updated_at',
            'ms_state',
            'u_terms_conditions_version',
            'u_privacy_policy_version',
            'subscription',
            'eModeratorFlag'
        );
        $output_keys = array(
            'get_updated_details',
        );
        $ouput_aliases = array(
            "get_updated_details" => "get_user_details",
            "u_user_id" => "user_id",
            "u_first_name" => "first_name",
            "u_last_name" => "last_name",
            "u_email" => "email",
            "u_mobile_no" => "mobile_no",
            "usertype" => "usertype",
            "u_profile_image" => "profile_image",
            "change_password" => "change_password",
            "u_about_me" => "about_me",
            "u_push_notify" => "push_notify",
            "u_access_token" => "access_token",
            "u_device_type" => "device_type",
            "u_device_model" => "device_model",
            "u_latitude" => "latitude",
            "u_longitude" => "longitude",
            "u_device_os" => "device_os",
            "u_device_token" => "device_token",
            "u_status" => "status",
            "u_added_at" => "added_at",
            "u_updated_at" => "updated_at",
            "ms_state" => "state",
            "u_terms_conditions_version" => "terms_conditions_version",
            "u_privacy_policy_version" => "privacy_policy_version",
            "subscription" => "subscription",
            "eModeratorFlag" => "moderator_flag",
        );

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "edit_profile";
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["output_alias"] = $ouput_aliases;
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }

    /**
     * This method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function users_finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "users_finish_success_1",
        );
        $output_fields = array();
        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "edit_profile";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    /**
     * This method is used to process finish flow.
     * 
     * @param array $input_params input_params array to process loop flow.
     * 
     * @return array $responce_arr returns responce array of api.
     */
    public function users_finish_success_3($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "users_finish_success_3",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "edit_profile";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
}

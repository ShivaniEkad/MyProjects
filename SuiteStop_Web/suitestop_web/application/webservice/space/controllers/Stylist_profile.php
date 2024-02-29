<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Stylist profile Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module Stylist profile
 *
 * @class Stylist_profile.php
 *
 * @path application\webservice\space\controllers\Stylist_profile.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */

class Stylist_profile extends Cit_Controller
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
            "get_stylist_profile"
        );
        $this->multiple_keys = array();
        $this->block_result = array();

        $this->load->library('wsresponse');
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
    public function rules_get_stylist_profile($request_arr = array())
    {
        $valid_arr = array(            
        );
        $this->wsresponse->setResponseStatus(UNPROCESSABLE_ENTITY);
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "stylist_profile");

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
    public function start_stylist_profile($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {   
            $validation_res = $this->rules_get_stylist_profile($request_arr);
          
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
            $input_params = $this->get_stylist_profile($input_params);
            $condition_res = $this->is_stylist_profile_found($input_params);
            if($condition_res['success']){
                $output_response = $this->get_stylist_profile_finish_success($input_params);
                return $output_response;
            } else {
                $output_response = $this->get_stylist_profile_finish_success_1($input_params);
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
     * Used to process query block & get_stylist_profile.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function get_stylist_profile($input_params = array())
    {
        $this->block_result = array();
        try {
            $this->block_result = $this->space_model->get_stylist_profile($input_params);
            if (!$this->block_result["success"]) {
                throw new Exception("Insertion failed.");
            }

            $data_arr = $this->block_result["data"][0];
        } catch (Exception $e) {
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $this->block_result["data"] = array();
        }
        
        $input_params["get_stylist_profile"] =$this->block_result["data"];
        $input_params["get_stylist_profile"]["success"] =$this->block_result["success"];
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
    public function is_stylist_profile_found($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = (($input_params["get_stylist_profile"] == 0) ? 0:1);
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
     * get_stylist_profile_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function get_stylist_profile_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "get_stylist_profile_finish_success",
        );
        $output_fields = array(
            'stylist_id',
            'stylist_name',
            'stylist_profile',
            'stylist_number',
            'stylist_email',
            'AboutMe',
            'My_post',
            'My_favorites'
        
        );
        $output_keys = array(
            'get_stylist_profile'
        );
         $ouput_aliases = array(
            'get_stylist_profile' => 'get_stylist_profile',
            'stylist_id' => 'stylist_id',
            'stylist_name' => 'stylist_name',
            'stylist_profile' => 'stylist_profile',
            'stylist_number' => 'stylist_number',
            'stylist_email' => 'stylist_email',
            'AboutMe' => 'AboutMe',   
            'My_post' => 'My_post',
            'My_favorites' => 'My_favorites' 
        );
        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;
        $func_array["function"]["name"] = 'stylist_profile';
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["ouput_aliases"] = $ouput_aliases;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);
        return $responce_arr;
    }

    /**
     * get_stylist_profile_finish_success_1 method is finish API failure flow.
     * @updated  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function get_stylist_profile_finish_success_1($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "get_stylist_profile_finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "stylist_profile";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }   
}
?>
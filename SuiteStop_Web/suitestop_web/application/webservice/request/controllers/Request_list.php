<?php
defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Description of requested list Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module requested list
 *
 * @class Request_list.php
 *
 * @path application\webservice\request\controllers\Request_list.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */
class Request_list extends Cit_Controller
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
           "request_list"
        );
        $this->multiple_keys = array(
            
        );
        $this->block_result = array();

        $this->load->library('wsresponse');
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
    public function rules_request_list($request_arr = array())
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
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "request_list");

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
    public function start_request_list($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {
            $validation_res = $this->rules_request_list($request_arr);
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
            $input_params = $this->get_request_list($input_params);
            $condition_res = $this->is_request_list_found($input_params);
            if ($condition_res["success"])
            {
                $output_response = $this->request_list_finish_success($input_params);
                return $output_response;
            } else {
                $output_response = $this->request_list_finish_failure($input_params);
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
     * Used to process query block & get requested list.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function get_request_list($input_params = array())
    {
        $this->block_result = array();
        try
        {
            if (isset($input_params["per_page_record"])) {
                $input_params["per_page_record"] = $input_params["per_page_record"];
            }
            $page_index = isset($input_params["page_index"]) ? $input_params["page_index"] : 1;

            $space_id = isset($input_params["space_id"]) ? $input_params["space_id"] : "";
            $this->block_result = $this->request_model->get_request_list($input_params, $space_id, $page_index, $this->settings_params);
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
        $input_params["get_request_list"] = $this->block_result['data'];
        $input_params["get_request_list"]['success'] = $this->block_result['success'];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $input_params["get_request_list"]);

        return $input_params;
    }

    /**
     * Used to check request list exist or not.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function is_request_list_found($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $cc_lo_0 = (($input_params["get_request_list"]['success'] == 0) ? 0:1);
            $cc_ro_0 = 1;

            $cc_fr_0 = ($cc_lo_0 == $cc_ro_0) ? TRUE : FALSE;
            if (!$cc_fr_0)
            {
                throw new Exception("Data is not exist.");
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
     * request_list_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_list_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "request_list_finish_success",
        );
         $output_fields = array(
            'request_id',
            'user_id',
            'user_name',
            'user_profile',
            'space_id',
            'notification_id',
            'created_at'
        );
        $output_keys = array(
             'get_request_list',
         );
         $ouput_aliases = array(
            'get_request_list'=>'get_request_list',
            'request_id'=> 'request_id',
            'user_id' => 'user_id',
            'user_name'=>'user_name',
            'user_profile'=>'user_profile',
            'space_id'=>'space_id',
            'notification_id' => 'notification_id',
            'created_at'=>'created_at'
        );
        $output_array["settings"] = array_merge($this->settings_params, $setting_fields);
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_list";
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    
    /**
     * accepted_list_finish_failure method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function request_list_finish_failure($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "request_list_finish_failure",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "request_list";
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(INTERNAL_SERVER_ERROR);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
}
?>
<?php
defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Description of Add to my favorite Controller
 *
 * @category webservice
 *
 * @package space
 *
 * @subpackage controllers
 *
 * @module Add to my favorite
 *
 * @class Add_to_myfavorite.php
 *
 * @path application\webservice\request\controllers\Add_to_myfavorite.php
 *
 * @version 4.4
 *
 * @author Suresh Nakate
 *
 * @since 06.09.2021
 */
class Add_to_myfavorite extends Cit_Controller
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
           "add_myfavorite"
        );
        $this->multiple_keys = array(
            
        );
        $this->block_result = array();

        $this->load->library('wsresponse');
        $this->load->model('space/space_model');
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
    public function rules_add_myfavorite($request_arr = array())
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
        $valid_res = $this->wsresponse->validateInputParams($valid_arr, $request_arr, "add_to_myfavorite");

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
    public function start_add_to_myfavorite($request_arr = array(), $inner_api = FALSE)
    { 
        try
        {
            $validation_res = $this->rules_add_myfavorite($request_arr);
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
            if ($input_params["check_unique_space"]['status'])
            {
                $input_params = $this->add_myfavorite($input_params);
                if($input_params['add_myfavorite']['success'])
                {
                    $output_response = $this->add_myfavorite_finish_success($input_params);
                    return $output_response;
                } else {
                    $output_response = $this->add_myfavorite_finish_failure($input_params);
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
     * Used to process query block & get requested to_owner.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $input_params returns modfied input_params array.
     */
    public function add_myfavorite($input_params = array())
    {
        $this->block_result = array();
        try
        {
            $space_id = isset($input_params["space_id"]) ? $input_params["space_id"] : "";
            $this->block_result = $this->space_model->add_myfavorite($input_params, $space_id);
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
        $input_params["add_myfavorite"] = $this->block_result['data'];
        $input_params["add_myfavorite"]['success'] = $this->block_result['success'];
        $input_params = $this->wsresponse->assignSingleRecord($input_params, $input_params["add_myfavorite"]);

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
     * add_myfavorite_finish_success method is used to process finish flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function add_myfavorite_finish_success($input_params = array())
    {
        $setting_fields = array(
            "success" => SUCCESS_CODE,
            "message" => "add_myfavorite_finish_success",
        );
         $output_fields = array(
            'my_favorite_id',
        );
        $output_keys = array(
             'add_myfavorite',
         );
         $ouput_aliases = array(
            'add_myfavorite'=>'add_myfavorite',
            'my_favorite_id'=> 'my_favorite_id',
        );
        $output_array["settings"] = array_merge($this->settings_params, $setting_fields);
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "add_to_myfavorite";
        $func_array["function"]["output_keys"] = $output_keys;
        $func_array["function"]["single_keys"] = $this->single_keys;

        $this->wsresponse->setResponseStatus(OK);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
    
    /**
     * add_myfavorite_finish_failure method is finish API failure flow.
     * @created  | 29.01.2016
     * @modified ---
     * @param array $input_params input_params array to process loop flow.
     * @return array $responce_arr returns responce array of api.
     */
    public function add_myfavorite_finish_failure($input_params = array())
    {
        $setting_fields = array(
            "success" => FAILED_CODE,
            "message" => "add_myfavorite_finish_failure",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "add_to_myfavorite";
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
            "message" => "finish_success_1",
        );
        $output_fields = array();

        $output_array["settings"] = $setting_fields;
        $output_array["settings"]["fields"] = $output_fields;
        $output_array["data"] = $input_params;

        $func_array["function"]["name"] = "add_to_myfavorite";
        $func_array["function"]["single_keys"] = $this->single_keys;
        $func_array["function"]["multiple_keys"] = $this->multiple_keys;

        $this->wsresponse->setResponseStatus(CONFLICT);

        $responce_arr = $this->wsresponse->outputResponse($output_array, $func_array);

        return $responce_arr;
    }
}
?>
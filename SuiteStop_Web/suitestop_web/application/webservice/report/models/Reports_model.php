<?php  

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Reports users Model
 * 
 * @category webservice
 *            
 * @package misc
 *
 * @subpackage models
 *
 * @module Reports users
 * 
 * @class reports_model.php
 * 
 * @path application\webservice\report\models\reports_model.php
 * 
 * @version 4.4
 *
 * @author CIT Dev Team
 * 
 * @since 03.05.2019
 */
 
class Reports_model extends CI_Model
{
    public $default_lang = 'EN';
    
    /**
     * __construct method is used to set model preferences while model object initialization.
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('listing');
        $this->default_lang = $this->general->getLangRequestValue();
    } 
    /**
     * reports user method is used to execute database queries for Reports user API.
     * @created priyanka chillakuru | 02.05.2019
     * @modified priyanka chillakuru | 02.05.2019
     * @param array $params_arr params_arr array to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function insert_reports($params_arr = array())
    {
        try {
            $result_arr = array();
                        
            if(!is_array($params_arr) || count($params_arr) == 0){
                throw new Exception("Insert data not found.");
            } 
            if(isset($params_arr["user_id"])){
                $this->db->set("iReportedBy", $params_arr["user_id"]);
            }
            if(isset($params_arr["report_on"])){
                $this->db->set("iReportedOn", $params_arr["report_on"]);
            }
            if(isset($params_arr["message"])){
                $this->db->set("vMessage", $params_arr["message"]);
            }
            if(isset($params_arr["reason_id"])){
                $this->db->set("iReasonId", $params_arr["reason_id"]);
            }
            if(isset($params_arr["reason_description"])){
                $this->db->set("tReasonDescription", $params_arr["reason_description"]);
            }
            $this->db->set($this->db->protect("dtCreated_at"), $params_arr["_dtaddedat"], FALSE);
            $this->db->insert("user_report");
            //echo $this->db->last_query(); exit();
            $insert_id = $this->db->insert_id();
            if(!$insert_id){
                 throw new Exception("Failure in insertion.");
            }
            $result_param = "report_id";
            $result_arr[0][$result_param] = $insert_id;
            $success = 1;
            
        } catch (Exception $e) {
            $success = 0;
            $message = $e->getMessage();
        }
        
        $this->db->_reset_all();
        //echo $this->db->last_query();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Method is used to execute databases queries for report user API
     * @param string $sender_id sender id is used to process query block.
     *  @param string $receiver_id receiver id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_reports_user_for_notifi($sender_id = '', $receiver_id = '')
    {
        try{
            $result_array = array();
            $this->db->from("users as u");
            $this->db->select("u.iUserId AS s_users_id");
            $this->db->join("users as r", "r.iUserId = ".$receiver_id."", "left");
            $this->db->select("r.iUserId AS r_users_id");
            $this->db->select("r.vDeviceToken AS r_device_token");
            $this->db->select("concat(u.vFirstName,\" \",u.vLastName) AS sender_name");
            $this->db->select("concat(r.vFirstName,\" \",r.vLastName) AS receiver_name");
            $this->db->where("(u.iUserId =".$sender_id.")",false,false);
            $this->db->where("r.eStatus","Active");
            $result_obj = $this->db->get();
            //echo $this->db->last_query(); exit();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if (!is_array($result_arr) || count($result_arr) == 0) {
                throw new Exception('No records found.');
            }
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }

        $this->db->_reset_all();
        //echo $this->db->last_query(); exit();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
}
?>
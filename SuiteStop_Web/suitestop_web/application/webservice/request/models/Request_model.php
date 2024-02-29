<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Request Model
 *
 * @category webservice
 *
 * @package user
 *
 * @subpackage models
 *
 * @module Request
 *
 * @class Request_model.php
 *
 * @path application\webservice\request\models\Request_model.php
 *
 * @version 4.4
 *
 * @author CIT Dev Team
 *
 * @since 06.09.2019
 */

class Request_model extends CI_Model
{
    public $default_lang = 'EN';

    /**
     * __construct method is used to set model preferences while model object initialization.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('listing');
        $this->default_lang = $this->general->getLangRequestValue();
    }

    /**
     * Get request list API.
     * @param string  $input_params auth_token is used to process query block.
     * @param string $space_id space id is used to process query block.
     * @return array $return_arr returns response of query block.
     */  
  public function get_request_list($input_params = array(), $space_id = '', $page_index = 1, &$settings_params = array())
    { 
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("user_request AS ur");    
            $this->db->select("ur.iSpace_id AS  space_id");
            $this->db->select("ur.notification_id AS  notification_id");
            $this->db->select("ur.iUser_request_id AS request_id");
            $this->db->select('ur.dtCreated_at as created_at');
            $this->db->join('users as u', 'u.iUserId = ur.iUser_id', 'left');
            $this->db->select("concat(u.vFirstName,\" \",u.vLastName) AS  user_name");
            $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = ur.iUser_id AND iUser_id = ".$input_params['user_id']." AND eStatus ='block' )");
            $this->db->select("u.iUserId AS user_id"); 
            $this->db->select("u.vProfileImage AS user_profile");
            if (isset($space_id) && $space_id != "") {
                $this->db->where("ur.iSpace_id =", $space_id);
                $this->db->where("ur.eStatus=", "pending");
                $this->db->where("ur.iSysRecDeleted", "0");
            }

            $total_records = $this->db->count_all_results();
            $settings_params['count'] =$total_records;
            $record_limit = $input_params['per_page_record'];
            $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
            $total_pages = getTotalPages($total_records, $record_limit);
            $start_index = getStartIndex($total_records, $current_page, $record_limit);
            $settings_params['per_page'] = $record_limit;
            $settings_params['curr_page'] = $current_page;
            $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
            $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;

            $this->db->limit($record_limit, $start_index);
            $this->db->order_by("ur.dtCreated_at", "DESC");
            $result_obj = $this->db->get();
            $this->db->stop_cache(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['user_profile']=  ($result_arr[$i]['user_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['user_id'].'/'. $result_arr[$i]['user_profile'] : "";   
                }//exit;
            }
              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $success = 1;
        } catch(Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    
    /**
     * Get request count API.
     * @param string  $input_params auth_token is used to process query block.
     * @param string $space_id space id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_request_count($input_params = array(),$space_id = '')
    {
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->from("user_request AS ur"); 
            if (isset($space_id) && $space_id != "") {
                $this->db->where("ur.iSpace_id =", $space_id);
            }   
            $this->db->select("count(distinct(ur.iUser_request_id)) AS requested_user_count");
            $this->db->stop_cache();
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $request_count = is_object($result_obj) ? $result_obj->result_array() : array();
            
            $this->db->from("user_request AS u");   
            $this->db->select("count(distinct(u.iUser_request_id)) AS accepted_count");
            $this->db->where("u.eStatus",'Accept');
            if (isset($space_id) && $space_id != "") {
                $this->db->where("u.iSpace_id =", $space_id);
            } 
            $result_obj = $this->db->get();
            $accept_count = is_object($result_obj) ? $result_obj->result_array() : array();
            
            $this->db->from("user_request AS u");   
            $this->db->select("count(distinct(u.iUser_request_id)) AS rejected_count");
            $this->db->where("u.eStatus",'Reject');
            if (isset($space_id) && $space_id != "") {
                $this->db->where("u.iSpace_id =", $space_id);
            } 
            $result_obj = $this->db->get();
            $reject_count = is_object($result_obj) ? $result_obj->result_array() : array();
 
            $this->db->from("user_request AS u");   
            $this->db->select("count(distinct(u.iUser_request_id)) AS pending_count");
            $this->db->where("u.eStatus",'Pending');
            if (isset($space_id) && $space_id != "") {
                $this->db->where("u.iSpace_id =", $space_id);
            } 
            $result_obj = $this->db->get();
            $pending_count = is_object($result_obj) ? $result_obj->result_array() : array();

            $result_arr = array_merge($request_count, $accept_count,$reject_count, $pending_count);
              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $success = 1;
        } catch(Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Get accepted list API.
     * @param string  $input_params input params is used to process query block.
     * @param string $space_id space id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_accepted_list($input_params, $space_id ='',$page_index = 1, &$settings_params = array())
    {
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("user_request AS ur");    
            $this->db->select("ur.iSpace_id AS  space_id");
            $this->db->join("space as s","s.iSpace_id =".$space_id."","left");
            $this->db->select("s.iUser_id as landlord_id");
            $this->db->select("ur.iUser_request_id AS request_id");
            $this->db->select('ur.dtCreated_at as created_at');
            $this->db->join('users as u', 'u.iUserId = ur.iUser_id', 'left');
            $this->db->select("u.iUserId AS stylist_id");
            $this->db->select("concat(u.vFirstName,\" \",u.vLastName) AS stylist_name");
            $this->db->select("u.vProfileImage AS stylist_profile");
            if (isset($space_id) && $space_id != "") {
                $this->db->where("ur.iSpace_id =", $space_id);
            }
            $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = ur.iUser_id AND iUser_id = ".$input_params['user_id']." AND eStatus ='block' )");
            $this->db->where("ur.eStatus","Accept");

            $total_records = $this->db->count_all_results();
            $settings_params['count'] =$total_records;
            $record_limit = $input_params['per_page_record'];
            $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
            $total_pages = getTotalPages($total_records, $record_limit);
            $start_index = getStartIndex($total_records, $current_page, $record_limit);
            $settings_params['per_page'] = $record_limit;
            $settings_params['curr_page'] = $current_page;
            $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
            $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;

            $this->db->limit($record_limit, $start_index);
            $this->db->order_by("ur.dtCreated_at", "DESC");
            $this->db->stop_cache();
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['stylist_profile']=  ($result_arr[$i]['stylist_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['stylist_id'].'/'. $result_arr[$i]['stylist_profile'] : "";   
                }//exit;
            }
              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $success = 1;
        } catch(Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
     /**
     * Request send to owner API.
     * @param string  $input_params input params is used to process query block.
     * @param string $space_id space id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function request_send_to_owner($input_params = array(), $space_id = '')
    {
        try {
            $message = "";
            $result_arr = array();
            if (!is_array($input_params) || count($input_params) == 0) {
                throw new Exception("Insert data not found.");
            }
            if (isset($input_params["user_id"])) {
                $this->db->set("iUser_id", $input_params["user_id"]);
            }
            if (isset($space_id)) {
                $this->db->set("iSpace_id", $space_id);
            }
            $this->db->insert("user_request");
            //echo $this->db->last_query();exit();
            $insert_id = $this->db->insert_id();
            if (!$insert_id) {
                throw new Exception("Failure in insertion.");
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $result_param = "request_id";
            $result_arr[0][$result_param] = $insert_id;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * insert notification id for send request API.
     * @param string  $input_params input params is used to process query block.
     * @param string $where_arr where array is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function insert_notification_id($input_params = array(), $where_arr = array())
    {
        try {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            if((isset($input_params["user_id"]) && $input_params["user_id"] != "") && (isset($input_params["space_id"]) && $input_params["space_id"] != ""))
            {
                $this->db->where("u.iUser_id", $input_params["user_id"]);
                $this->db->where("u.iSpace_id", $input_params["space_id"]);
            } 
            $this->db->set("notification_id",$input_params["insert_id"]);
            $res = $this->db->update("user_request as u");
            //echo $this->db->last_query(); die;
            $affected_rows = $this->db->affected_rows();
           
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
            $result_arr[0][$result_param] = $affected_rows;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Method is used to execute database queries for get requested user details API.
     * 
     * @param string $user_id user_id is used to process query block.
     * @param string $receiver_id receiver_id is used to process query block.
     * 
     * @return array $return_arr returns response of query block.
     */
    public function get_user_details_for_notifi($user_id = '', $receiver_id = '')
    {
        try {
            $result_arr = array();
            $this->db->from("users AS u");
            $this->db->join("space AS s", "s.iSpace_id = ".$receiver_id."", "left");
            $this->db->join("users AS r", "r.iUserId = s.iUser_id", "left");
            $this->db->select("u.iUserId AS s_users_id");
            $this->db->select("r.iUserId AS r_users_id");
            $this->db->select("r.vDeviceToken AS r_device_token");
            $this->db->select("CONCAT(u.vFirstName,\" \",u.vLastName) AS s_name");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("u.vProfileImage AS sender_profile_image");
            $this->db->where("(u.iUserId = ".$user_id.")", false, false);
            $this->db->where("r.eStatus", "Active");
            $this->db->limit(1);
            $result_obj = $this->db->get();
            //echo $this->db->last_query(); die;
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
        //echo $this->db->last_query();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Update request status as accept using Accept request API.
     * @param string  $input_params input params is used to process query block.
     * @param string $where_arr where array is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function accept_request($where_arr = array(),$input_params = '')
    {
        try {
            $message = "";
            $result_arr = array();
            if(isset($where_arr["entity_id"]) && $where_arr["entity_id"] != "") {
                $this->db->where("iUser_request_id", $where_arr["entity_id"]);
              }    
              if (isset($input_params["status"])) {
                $this->db->set("eStatus", $input_params["status"]);
            }
            $res=$this->db->update("user_request");
            //echo $this->db->last_query(); die;
            $accept_request = $this->db->affected_rows();
            $this->db->stop_cache();
            $this->db->flush_cache();
            if(isset($input_params["notification_id"]) && $input_params["notification_id"] !='')
            {            
                $this->db->where("notification_id", $input_params["notification_id"]);
                $this->db->set("iSysRecDeleted","1");
            } 
                $res = $this->db->update("notifications");
                //echo $this->db->last_query(); die;
                $delete_notification = $this->db->affected_rows();

            if($accept_request == '1' && $delete_notification == '1')
            {
                $affected_rows = '1';
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
            $result_arr[0][$result_param] = $affected_rows;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        //pr($return_arr); die;
        return $return_arr;
    }
    /**
     * Update request status as accept using Accept request API.
     * @param string  $input_params input params is used to process query block.
     * @param string $where_arr where array is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function accept_request_for_notification($where_arr = array(),$input_params = '')
    {
        try {
            $message = "";
            $result_arr = array();
            if(isset($where_arr["entity_id"]) && $where_arr["entity_id"] != "") {
                $this->db->where("iUser_request_id", $where_arr["entity_id"]);
            }    
            if(isset($input_params["notification_id"]) && !empty($input_params["notification_id"]))
            {
                $this->db->where("notification_id", $input_params["notification_id"]);
            } 
            if (isset($input_params["status"])) {
                $this->db->set("eStatus", $input_params["status"]);
            }
            $res=$this->db->update("user_request");
            //echo $this->db->last_query(); die;
            $affected_rows = $this->db->affected_rows();
            $this->db->stop_cache();

            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
            $result_arr[0][$result_param] = $affected_rows;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        
        return $return_arr;
    }
    /**
     * Update request status as accept using Reject request API.
     * @param string  $input_params input params is used to process query block.
     * @param string $where_arr where array is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function reject_request($where_arr = array(),$input_params = '')
    {
        try {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            if(isset($where_arr["entity_id"]) && $where_arr["entity_id"] != "") {
                $this->db->where("iUser_request_id", $where_arr["entity_id"]);
              }    
              if (isset($input_params["status"])) {
                $this->db->set("eStatus", $input_params["status"]);
            }
            $this->db->set("iSysRecDeleted","1");
            $res=$this->db->update("user_request");
            //echo $this->db->last_query();
            $delete_request = $this->db->affected_rows();
            $this->db->stop_cache();
            $this->db->flush_cache();
                if(isset($input_params["notification_id"]) && $input_params["notification_id"] != "")
                {
                    $this->db->where("notification_id", $input_params["notification_id"]);
                    $this->db->set("iSysRecDeleted","1");
                } 
                $res = $this->db->update("notifications");
                //echo $this->db->last_query(); die;
                $delete_notification = $this->db->affected_rows();

            if($delete_request == '1' && $delete_notification == '1')
            {
                $affected_rows = '1';
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
            $result_arr[0][$result_param] = $affected_rows;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;

        return $return_arr;
    }
    /**
     * Method is used to execute database queries for accept reject request API.
     * 
     * @param string $sender_id landlord sender id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_user_change_status_notification($sender_id = '')
    {
        try {
            $result_arr = array();
            $this->db->from("users AS u");
            $this->db->join("user_request AS ur", "ur.iUser_request_id = ".$sender_id."", "left");
            $this->db->join("space AS s", "s.iSpace_id = ur.iSpace_id", "left");
            $this->db->select("s.iUser_id AS s_users_id");
            $this->db->select("ur.iUser_id AS r_users_id");
            $this->db->select("ur.iSpace_id AS space_id");
            $this->db->select("CONCAT(u.vFirstName,\" \",u.vLastName) AS s_name");
            $this->db->select("u.vDeviceToken AS r_device_token");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->where("u.iUserId = ur.iUser_id");
            $this->db->where("u.eStatus", "Active");
            $this->db->limit(1);
            $result_obj = $this->db->get();
            //echo $this->db->last_query(); die;
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
        //echo $this->db->last_query();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }

}
?>
<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of User block model
 *
 * @category webservice
 *
 * @package chat
 *
 * @subpackage models
 *
 * @module Users
 *
 * @class User_block_model.php
 *
 * @path application\webservice\chat\models\User_block_model.php
 *
 */
class User_block_model extends CI_Model
{
    public $default_lang = 'EN';

    /**
     * To initialize class objects/variables.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('listing');
        $this->default_lang = $this->general->getLangRequestValue();
        $this->load->library('lib_log');
    }

    /**
     * Used to execute database queries for Post Add API.
     *
     * @param array $params_arr params_arr array to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function insert_user_block_data($params_arr = array(), $media = array())
    {
        try {
            $result_arr = array();
            if (!is_array($params_arr) || count($params_arr) == 0) {
                throw new Exception("Insert data not found.");
            }
            
            if (isset($params_arr["user_id"])) {
                $this->db->set("iUser_id", $params_arr["user_id"]);
            }

            if (isset($params_arr["block_user_id"])) {
                $this->db->set("iBlock_user_id", $params_arr["block_user_id"]);
            }
            $this->db->set("eStatus", "block");

            $this->db->insert("user_block");
            $insert_id = $this->db->insert_id();

            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            if (!$insert_id) {
                throw new Exception("Failure in insertion.");
            }
            $result_param = "affected_rows";
            $result_arr[0][$result_param] = $insert_id;
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
    * Used to execute database queries for update user_block API.
    *
    * @param array $params_arr params_arr array to process query block.
    *
    * @return array $return_arr returns response of query block.
    */
    public function update_user_block_data($params_arr = array())
    {
        try {
            $result_arr = array();
            $this->db->start_cache();
            if (isset($params_arr["user_id"])) {
                $this->db->where("iUser_id", $params_arr["user_id"]);
            }
            if (isset($params_arr["block_user_id"])) {
                $this->db->where("iBlock_user_id", $params_arr["block_user_id"]);
            }
            $this->db->stop_cache();
            $this->db->set("eStatus", $params_arr["user_block_status"]);
            $res = $this->db->update("user_block");
            //echo $this->db->last_query(); exit();
            $affected_rows = $this->db->affected_rows();

            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in updation.");
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
     * Used to execute database queries for blocked_user_list API.
     *
     * @param array $params_arr params_arr array to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function get_all_blocked_user_list($params_arr = array(), $page_index = 1, &$settings_params = array())
    {
        try {
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("user_block AS bu");
            $this->db->join("users AS u", "bu.iBlock_user_id = u.iUserId", "left");
            $this->db->select("u.iUserId AS u_user_id");
            $this->db->select("u.vFirstName AS u_first_name");
            $this->db->select("u.vLastName AS u_last_name");
            $this->db->select("u.vProfileImage AS u_profile_image");
            $this->db->select("u.dLatitude AS u_latitude");
            $this->db->select("u.dLongitude AS u_longitude");
            $this->db->select("u.vEmail AS u_email");
            $this->db->select("u.vMobileNo AS u_mobile_no");
            $this->db->select("bu.eStatus AS block_status");
            if (isset($params_arr['user_id'])) {
                $this->db->where("bu.iUser_id =", $params_arr['user_id']);
            }

            if (isset($params_arr['block_status'])) {
                $this->db->where("bu.eStatus =", $params_arr['block_status']);
            }
            $total_records = $this->db->count_all_results();
            $settings_params['count'] =$total_records;
            $record_limit = $params_arr['per_page_record'];
            $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
            $total_pages = getTotalPages($total_records, $record_limit);
            $start_index = getStartIndex($total_records, $current_page, $record_limit);
            $settings_params['per_page'] = $record_limit;
            $settings_params['curr_page'] = $current_page;
            $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
            $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;

            $this->db->limit($record_limit, $start_index);
            $this->db->order_by("u.dtAddedAt", "DESC");
            $result_obj = $this->db->get();
            //echo $this->db->last_query(); die;
            $this->db->stop_cache();
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
     * Used to execute database queries for Send Message API.
     *
     * @param string $user_id user_id is used to process query block.
     * @param string $receiver_id receiver_id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function if_blocked($user_id = '', $receiver_id = '')
    {
        try {
            $result_arr = array();

            $this->db->from("user_block AS bu");
            $this->db->select("bu.iUser_id AS bu_user_id");
            $this->db->select("bu.iBlock_user_id AS bu_block_user_id");
            $this->db->where("bu.iUser_id =", $user_id);
            $this->db->where("bu.iBlock_user_id =", $receiver_id);
            $this->db->where("bu.eStatus =", 'block');

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

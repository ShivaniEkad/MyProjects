<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Description of Request to owner Extended Controller
 *
 * @module Extended Request to owner
 *
 * @class Cit_Request_to_owner.php
 *
 * @path application\webservice\space\controllers\Cit_Request_to_owner.php
 *
 * @author Suresh Nakate
 *
 * @date 06.09.2021
 */
class Cit_Request_to_owner extends Request_to_owner
{
    /**
     * To initialize class objects/variables.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lib_log');
    }

    /**
     * Used to check unique Space.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $return_arr return unique Space status & message.
     */
    public function checkUniqueSpace($input_params = array())
    {
        $return_arr['message'] = '';
        $return_arr['status'] = '1';
        try {
            if (!empty($input_params['space_id'])) {
                $this->db->select('iSpace_id');
                $this->db->from('user_request as ur');
                $this->db->where('iUser_id', $input_params['user_id']);
                $this->db->where('iSpace_id', $input_params['space_id']);
                $space_data = $this->db->get();
                //echo $this->db->last_query(); exit();
                $space_data = is_object($space_data) ? $space_data->result_array() : array();

                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }

                if ($space_data[0]['iSpace_id'] == $input_params['space_id']) {
                    $return_arr['message'] = "This space id already exist, please try using different space id.";
                    $return_arr['status'] = "0";

                    return  $return_arr;
                }
            }
        } catch (Exception $e) {
            $input_params['db_query'] = $this->db->last_query();
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $message = $e->getMessage();
        }

        return  $return_arr;
    }
    
    /**
     * Used to check Space status.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $return_arr return Space status & message.
     */
    public function checkSpaceSatus($input_params = array())
    {
        $return_arr['message'] = '';
        $return_arr['status'] = '1';
        try {
            if (!empty($input_params['space_id'])) 
            {
                $this->db->select('iSpace_id');
                $this->db->select('eStatus');
                $this->db->from('user_request as ur');
                $this->db->where('iUser_id', $input_params['user_id']);
                $this->db->where('iSpace_id', $input_params['space_id']);
                $space_data = $this->db->get();
                //echo $this->db->last_query(); exit();
                $return_arr = is_object($space_data) ? $space_data->result_array() : array();

                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }
            }
        } catch (Exception $e) {
            $input_params['db_query'] = $this->db->last_query();
            $this->general->apiLogger($input_params, $e);
            $success = 0;
            $message = $e->getMessage();
        }

        return  $return_arr;
    }
    /**
     * Prepare notification message for send message.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $return_arr return unique user status & message.
     */
    public function PrepareHelperMessage($input_params=array())
    {
        $this->db->select('nt.tMessage AS tMessage');
        $this->db->from('mod_push_notify_template as nt');
        $this->db->where('nt.vTemplateCode', 'Request_owner');
            $notification_text=$this->db->get()->result_array();
            $notification_text=$notification_text[0]['tMessage'];
        
            $notification_text = str_replace("|sender_name|", ucfirst($input_params['get_user_details_for_notifi'][0]['s_name']),$notification_text);
            $notification_text = str_replace("|space_name|", ucfirst($input_params['get_user_details_for_notifi'][0]['space_name']),$notification_text);
            $return_array['notification_message']=$notification_text;
    
        return $return_array;
    }
    /**
     * Used to check notification exists.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $return_arr return unique user status & message.
     */
    public function checkNotificationExists($input_params = array())
    {
        $return_arr['message']='';
        $return_arr['status']= SUCCESS_CODE;
        try {
            $this->db->from("notifications AS n");
            $this->db->select("n.iNotificationId AS notification_id");
            $this->db->where_in("iSenderId", $input_params['user_id']);
            $this->db->where_in("vNotificationmessage", $input_params['notification_message']);
            $this->db->where_in("iReceiverId", $input_params['receiver_id']);
            $result_obj=$this->db->get()->result_array();

            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $notification_data = is_object($result_obj) ? $result_obj->result_array() : array();
            
            if (true == empty($notification_data)) {
                $return_arr['checknotificationexists']['0']['message']="No notification available";
                $return_arr['checknotificationexists']['0']['status'] = "0";
             
                return  $return_arr;
            } else {
                $return_arr['notification_id']=$notification_data;
            }

            foreach ($return_arr as $value) {
                $return_arr = $value;
                $return_arr['status']= SUCCESS_CODE;
            }
        } catch (Exception $e) {
            $input_params['db_query'] = $this->db->last_query();
            $this->general->apiLogger($input_params, $e);
        }

        return $return_arr;
    }
    /**
     * Used to execute database queries for notification_count API.
     * 
     * @param string $user_id user_id is used to process query block.
     * 
     * @return array $return_arr returns response of query block.
     */
    public function get_count($user_id = '')
    {
        try {
            $result_arr = array();
            $date = new DateTime("now");
            $curr_date = $date->format('Y-m-d ');
            $this->db->from("notifications AS n");

            $this->db->select("(count(n.notification_id)) AS notification_count", FALSE);
            if (isset($user_id) && $user_id != "")
            {
                $this->db->where("n.receiver_id =", $user_id);
            }
            $this->db->where("n.status=", 'Unread');
            //$this->db->where("DATE(n.created_at) =", $curr_date);
            $this->db->limit(1);

            $result_obj = $this->db->get();

            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if (!is_array($result_arr) || count($result_arr) == 0) {
                throw new Exception('No records found.');
            }
            $success = 1;
        } catch(Exception $e) {
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

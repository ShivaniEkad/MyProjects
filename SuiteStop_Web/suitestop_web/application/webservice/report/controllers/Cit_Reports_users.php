<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Description of Reports users Extended Controller
 *
 * @module Extended Reports users
 *
 * @class Cit_Reports_users.php
 *
 * @path application\webservice\space\controllers\Cit_Reports_users.php
 *
 * @author Suresh Nakate
 *
 * @date 06.09.2021
 */
class Cit_Reports_users extends Reports_users
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
        $this->db->where('nt.vTemplateCode', 'Report_user');
            $notification_text=$this->db->get()->result_array();
            $notification_text=$notification_text[0]['tMessage'];
            $notification_text = str_replace("|sender_name|", ucfirst($input_params['get_reports_user_for_notifi'][0]['sender_name']),$notification_text);
            $notification_text = str_replace("|receiver_name|", ucfirst($input_params['get_reports_user_for_notifi'][0]['receiver_name']), $notification_text);
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
}
?>

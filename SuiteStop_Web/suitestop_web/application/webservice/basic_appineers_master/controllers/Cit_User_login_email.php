<?php

/**
 * Description of User Login Email Extended Controller
 * 
 * @module Extended User Login Email
 * 
 * @class Cit_User_login_email.php
 * 
 * @path application\webservice\basic_appineers_master\controllers\Cit_User_login_email.php
 * 
 * @author Suresh Nakate
 *
 * @date 06.09.2021
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cit_User_login_email extends User_login_email
{

    /**
     * To initialize class objects/variables.
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Used to prepare where condition.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $return_arr return where condition.
     */
    public function helperPrepareWhere(&$input_params = array())
    {
        $return = array();
        $return[0]['status'] = 1;
        $return[0]['message'] = "";
        $return[0]['not_found'] = 0;
        $return[0]['where_clause'] = '0=1';
        $where = array();
        try {
            if ($input_params['email'] != '' && $input_params['password'] != '') {
                $this->db->select('iUserId,vPassword');
                $this->db->from('users');
                $this->db->where('vEmail', $input_params['email']);
                $data = $this->db->get()->result_array();
                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }


                if (!is_array($data) || count($data) == 0) {
                    throw new Exception('No records found.');
                }

                $params['old_password'] = $input_params['password'];
                $params['mc_password'] = $data[0]['vPassword'];
                $result = $this->general->verifyCustomerPassword($params);

                //$params1['old_user_type'] = $input_params['user_type'];
                //$params1['mc_user_type'] = $data[0]['eUserType'];
                //$result1 = $this->general->verifyUserType($params1);
                
                if ($result[0]['is_matched'] == 1 ) {
                    $where[] = "u.iUserId='" . $data[0]['iUserId'] . "'";
                } else {
                    $where[] = "u.iUserId=''";
                    $return[0]['status'] = 0;
                     $return[0]['message'] = "Please provide valid login credentials.";
                } 
            } else {

               
                $return[0]['status'] = 0;
                $return[0]['message'] = "Please provide login detail.";
            }
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $return[0]['status'] = 0;
            $return[0]['message'] = "Please provide valid login credentials.";
            $return[0]['not_found'] = 1;
            $success = 0;
            $message = $e->getMessage();
        }
        $return[0]['where_clause'] = implode("AND ", $where);

       

        return $return;
    }

    /**
     * Used to check device token exist.
     * 
     * @param array $input_params  array to process loop flow.
     * 
     * @return array $return_arr return unique user status & message.
     */
    public function checkDeviceTokenExist($input_params = array())
    {


        $return_arr['message'] = '';
        $return_arr['status'] = '0';
        try {
            if (!empty($input_params['device_token'])) {
                $this->db->select('vDeviceToken');
                $this->db->from('users');
                $this->db->where('vDeviceToken', $input_params['device_token']);
                $device_token_data = $this->db->get();

                $device_token_data = is_object($device_token_data) ? $device_token_data->result_array() : array();

                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }

                if ($device_token_data[0]['vDeviceToken'] == $input_params['device_token']) {
                    $return_arr['status'] = "1";

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
}

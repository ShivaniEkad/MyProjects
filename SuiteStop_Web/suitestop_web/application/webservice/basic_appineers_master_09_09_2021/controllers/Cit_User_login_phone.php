<?php

/**
 * Description of User Login Phone Extended Controller
 *
 * @module Extended User Login Phone
 *
 * @class Cit_User_login_phone.php
 *
 * @path application\webservice\basic_appineers_master\controllers\Cit_User_login_phone.php
 
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cit_User_login_phone extends User_login_phone
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
     * Used to prepare where condition.
     *
     * @param array $input_params input_params array to process loop flow.
     *
     * @return array $return_arr return where condition.
     */
    public function helperPrepareWhere(&$input_params = array())
    {
        $return = array();
        $return[0]['status'] = 1;
        $return[0]['message'] = "";
        $return[0]['where_clause'] = '0=1';
        $where = array();
        try {
            if ($input_params['mobile_number'] != '' && $input_params['password'] != '') {
                $this->db->select('iUserId,vPassword');
                $this->db->from('users');
                $this->db->where('vMobileNo', $input_params['mobile_number']);
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
                if ($result[0]['is_matched'] == 1) {
                    $where[] = "u.iUserId='" . $data[0]['iUserId'] . "'";
                } else {
                    $where[] = "u.iUserId=''";
                }
            } else {
                $return[0]['status'] = 0;
                $return[0]['message'] = "Please provide login detail.";
            }
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }

        $return[0]['where_clause'] = implode("AND ", $where);

        return $return;
    }
}

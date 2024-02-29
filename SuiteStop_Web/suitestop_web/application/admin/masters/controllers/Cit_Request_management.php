<?php

/**
 * Description of Request Management Extended Controller
 * 
 * @module Extended Request Management
 * 
 * @class Cit_Request_management.php
 * 
 * @path application\admin\masters\controllers\Cit_Request_management.php
 * 
 * @author CIT Dev Team
 * 
 * @date 01.10.2019
 */        

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
Class Cit_Request_management extends Request_management {
        public function __construct()
    {
        parent::__construct();
        $this->load->model('cit_api_model');
    }
    public function checkUniqueRequest($variable = array()){

        $return_arr='0';
        if(false == empty($variable)){

        foreach ($variable as $key => $value) {

            //print_r($value);
            $this->db->select('iUser_request_id');
            $this->db->from('user_request');
            $this->db->where_in('iUser_request_id', $value);
            $arrspaceData=$this->db->get()->result_array();

            if(false == empty($arrspaceData)){
                $return_arr = "1";

                break;
            }
        }

        } 
    return  $return_arr; 
        
    }
    public function showStatusButton($id='',$arr=array())
    {     
            $url = $this->general->getAdminEncodeURL('masters/request_management/add').'|mode|'.$this->general->getAdminEncodeURL('Update').'|id|'.$this->general->getAdminEncodeURL($arr);
        return '<button type="button" data-id='.$arr.' class="btn btn-success operBut" data-url='.$url.' >Edit</button>';
        
    }

    public function listingValue($value = '', $id = '', $data = array())
    {
        if (empty($data['first_name']) && $data['first_name'] != '0') {
            $value = "N/A";
        } elseif ($data['first_name'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

    public function listingValue1($value = '', $id = '', $data = array())
    {
        if (empty($data['space_name']) && $data['space_name'] != '0') {
            $value = "N/A";
        } elseif ($data['space_name'] == '0') {
            $value = "N/A";
        }
        return $value;
    }


}

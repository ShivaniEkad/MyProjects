<?php

/**
 * Description of Post Management Extended Controller
 * 
 * @module Extended Post Management
 * 
 * @class Cit_Post_management.php
 * 
 * @path application\admin\masters\controllers\Cit_Post_management.php
 * 
 * @author CIT Dev Team
 * 
 * @date 01.10.2019
 */        

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
Class Cit_Post_management extends Post_management {
        public function __construct()
    {
        parent::__construct();
        $this->load->model('cit_api_model');
    }
    public function checkUniquePost($variable = array()){

        $return_arr='0';
        if(false == empty($variable)){

        foreach ($variable as $key => $value) {

            //print_r($value);
            $this->db->select('iStylist_post_id');
            $this->db->from('stylist_post');
            $this->db->where_in('iStylist_post_id', $value);
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
            $url = $this->general->getAdminEncodeURL('masters/post_management/add').'|mode|'.$this->general->getAdminEncodeURL('Update').'|id|'.$this->general->getAdminEncodeURL($arr);
        return '<button type="button" data-id='.$arr.' class="btn btn-success operBut" data-url='.$url.' >Edit</button>';
        
    }

}

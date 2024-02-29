<?php

/**
 * Description of Post images Management Extended Controller
 * 
 * @module Extended Post images Management
 * 
 * @class Cit_Post_images_management.php
 * 
 * @path application\admin\masters\controllers\Cit_Post_images_management.php
 * 
 * @author CIT Dev Team
 * 
 * @date 01.10.2019
 */        

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
Class Cit_Post_images_management extends Post_images_management {
        public function __construct()
    {
        parent::__construct();
        $this->load->model('cit_api_model');
    }
    public function checkUniquePostImages($variable = array()){

        $return_arr='0';
        if(false == empty($variable)){

        foreach ($variable as $key => $value) {

            //print_r($value);
            $this->db->select('iStylist_images_id');
            $this->db->from('stylist_images');
            $this->db->where_in('iStylist_images_id', $value);
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
            $url = $this->general->getAdminEncodeURL('masters/post_images_management/add').'|mode|'.$this->general->getAdminEncodeURL('Update').'|id|'.$this->general->getAdminEncodeURL($arr);
        return '<button type="button" data-id='.$arr.' class="btn btn-success operBut" data-url='.$url.' >Edit</button>';
        
    }

    public function listingValue($value = '', $id = '', $data = array())
    {
        if (empty($data['images']) && $data['images'] != '0') {
            $value = "N/A";
        } elseif ($data['images'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

    public function listingValue1($value = '', $id = '', $data = array())
    {
        if (empty($data['title']) && $data['title'] != '0') {
            $value = "N/A";
        } elseif ($data['title'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

    public function listingValue2($value = '', $id = '', $data = array())
    {
        if (empty($data['first_name']) && $data['first_name'] != '0') {
            $value = "N/A";
        } elseif ($data['first_name'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

}

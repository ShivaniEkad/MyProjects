<?php

/**
 * Description of Space media Management Extended Controller
 * 
 * @module Extended Space media Management
 * 
 * @class Cit_Space_media_management.php
 * 
 * @path application\admin\masters\controllers\Cit_Space_media_management.php
 * 
 * @author CIT Dev Team
 * 
 * @date 01.10.2019
 */        

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
Class Cit_Space_media_management extends Space_media_management {
        public function __construct()
    {
        parent::__construct();
        $this->load->model('cit_api_model');
    }
    public function checkUniqueSpaceMedia($variable = array()){

        $return_arr='0';
        if(false == empty($variable)){

        foreach ($variable as $key => $value) {

            //print_r($value);
            $this->db->select('iSpace_images_id');
            $this->db->from('space_image');
            $this->db->where_in('iSpace_images_id', $value);
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
            $url = $this->general->getAdminEncodeURL('masters/space_media_management/add').'|mode|'.$this->general->getAdminEncodeURL('Update').'|id|'.$this->general->getAdminEncodeURL($arr);
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
        if (empty($data['video']) && $data['video'] != '0') {
            $value = "N/A";
        } elseif ($data['video'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

    public function listingValue2($value = '', $id = '', $data = array())
    {
        if (empty($data['space_name']) && $data['space_name'] != '0') {
            $value = "N/A";
        } elseif ($data['space_name'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

    public function listingValue3($value = '', $id = '', $data = array())
    {
        if (empty($data['first_name']) && $data['first_name'] != '0') {
            $value = "N/A";
        } elseif ($data['first_name'] == '0') {
            $value = "N/A";
        }
        return $value;
    }

}

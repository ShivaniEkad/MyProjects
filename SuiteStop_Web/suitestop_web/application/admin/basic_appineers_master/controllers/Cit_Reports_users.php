<?php
/**
 * Description of Reports users Extended Controller
 * 
 * @module Extended Reports users
 * 
 * @class Cit_reports_users.php
 * 
 * @path application\admin\basic_appineers_master\controllers\Cit_reports_users.php
 * 
 * @author CIT Dev Team
 * 
 * @date 17.06.2019
 */        

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
Class Cit_Reports_users extends Reports_users {
        public function __construct()
{
    parent::__construct();
}
public function showStatusButton($id='',$arr=array())
{     
        $url = $this->general->getAdminEncodeURL('basic_appineers_master/reports_users/add').'|mode|'.$this->general->getAdminEncodeURL('Update').'|id|'.$this->general->getAdminEncodeURL($arr);
       return '<button type="button" data-id='.$arr.' class="btn btn-success operBut" data-url='.$url.' >Edit</button>';
      
}
}
?>

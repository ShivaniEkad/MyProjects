<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of space Model
 *
 * @category webservice
 *
 * @package user
 *
 * @subpackage models
 *
 * @module space
 *
 * @class space_model.php
 *
 * @path application\webservice\space\models\Space_model.php
 *
 * @version 4.4
 *
 * @author CIT Dev Team
 *
 * @since 06.09.2019
 */

class Space_model extends CI_Model
{
    public $default_lang = 'EN';

    /**
     * __construct method is used to set model preferences while model object initialization.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('listing');
        $this->default_lang = $this->general->getLangRequestValue();
    }

 /**
     * Used to execute database queries for create space.
     *
     * @param array $params_arr params_arr array to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function create_space($params_arr = array())
    {
        try {
            $message = "";
            $result_arr = array();
            if (!is_array($params_arr) || count($params_arr) == 0) {
                throw new Exception("Insert data not found.");
            }
            if (isset($params_arr["user_id"])) {
                $this->db->set("iUser_id", $params_arr["user_id"]);
            }
            if (isset($params_arr["space_name"])) {
                $this->db->set("vSpace_name", $params_arr["space_name"]);
            }
            if (isset($params_arr["address"])) {
                $this->db->set("tAddress", $params_arr["address"]);
            }
            if (isset($params_arr["city"])) {
                $this->db->set("vCity", $params_arr["city"]);
            }
            if (isset($params_arr["city"])) {
                $this->db->set("vCity", $params_arr["city"]);
            }
            if (isset($params_arr["state"])) {
                $this->db->set("vState", $params_arr["state"]);
            }
            if (isset($params_arr["zipcode"])) {
                $this->db->set("iZipcode", $params_arr["zipcode"]);
            }
            if (isset($params_arr["latitude"])) {
                $this->db->set("dLatitude", $params_arr["latitude"]);
            }
            if (isset($params_arr["longitude"])) {
                $this->db->set("dLongitude", $params_arr["longitude"]);
            }
            if (isset($params_arr["stylist_required"])) {
                $this->db->set("iStylist_required", $params_arr["stylist_required"]);
            }
            if (isset($params_arr["space_details"])) {
                $this->db->set("tSpace_details", $params_arr["space_details"]);
            }
            $this->db->insert("space");
            //echo $this->db->last_query();exit;
            $insert_id = $this->db->insert_id();
            if (!$insert_id) {
                throw new Exception("Failure in insertion.");
            }
                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }
            if (isset($params_arr["images"]) && $params_arr['images'] != '') {
                $images = explode(",",$params_arr["images"]);
                $images_array = array();
                $i=0;
                $data = array();
                foreach ($images  as $key) {
                    $data = array();
                    $data['vImages'] = $key;
                    $data['iSpace_id'] = $insert_id;
                    $data['iUser_id'] = $params_arr["user_id"];
                    array_push($images_array, $data);
                    $i++;
                }
                $this->db->insert_batch('space_images', $images_array);
                //echo $this->db->last_query();die();
            }

            if (isset($params_arr["video"]) && $params_arr['video'] != '') {
                $this->db->set("vVideo", $params_arr["video"]);
                $this->db->set("iUser_id", $params_arr["user_id"]);
                $this->db->set("iSpace_id", $insert_id);
                $this->db->insert("space_images");
                //echo $this->db->last_query();exit;
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $result_param = "space_id";
            $result_arr[0][$result_param] = $insert_id;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Get space list API.
     *
     * @param string  $input_params auth_token is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */    
    public function get_space_list($input_params = array(), $page_index = 1, &$settings_params = array())
    {  
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("space AS s");    
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            if($input_params['usertype'] == 'Landlord')
            {
                $this->db->join('users as ui', 'ui.iUserId = s.iUser_id', 'left');
                if(isset($input_params['user_id']) && $input_params['user_id'] != "") {
                    $this->db->where("s.iUser_id ", $input_params['user_id']);
                    $this->db->where("s.iSysRecDeleted ", "0");
                }
                if (isset($input_params['latitude']) && isset($input_params['longitude']) && isset($input_params['distance']) && $input_params['distance']!="") { 
                    $latitude = $input_params['latitude'];
                    $longitude = $input_params['longitude'];
                    $distance = $input_params['distance'];
                    if($latitude != "" &&  $longitude != "") {
                        $where_exp = "(((acos(sin((".$latitude."*pi()/180)) * sin((s.dLatitude*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((s.dLatitude*pi()/180))*cos(((".$longitude."- s.dLongitude)*pi()/180))))*180/pi())*60*1.1515) <='". $distance . "'";
                        $this->db->where($where_exp);
                    }
                }
                if(isset($input_params['search']) || $input_params['search'] != "")
                {  
                    $this->db->like('LOWER(s.vSpace_name)', strtolower($input_params['search']));
                }
                    $total_records = $this->db->count_all_results();
                    $settings_params['count'] =$total_records;
                    $record_limit = $input_params['per_page_record'];
                    $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
                    $total_pages = getTotalPages($total_records, $record_limit);
                    $start_index = getStartIndex($total_records, $current_page, $record_limit);
                    $settings_params['per_page'] = $record_limit;
                    $settings_params['curr_page'] = $current_page;
                    $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
                    $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;

                $this->db->limit($record_limit, $start_index);
                $this->db->order_by("s.dtCreated_at", "DESC");
                $result_obj = $this->db->get(); 
                //echo $this->db->last_query(); die();
                $this->db->stop_cache();
                $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                $i=0;
                foreach($result_arr as $key=>$value){
                    $result_arr[$i]['images'] = $this->getImage($value['space_id'], $input_params['user_id']); 
                    $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $input_params['user_id']); 
                    $acceptedcount = $this->getAcceptedCount($value['space_id'], $input_params['user_id']); 
                    if(!empty($acceptedcount)){
                        $result_arr[$i]['accepted_count'] = $acceptedcount[0]['accepted_count'];
                    }
                    $rejectedcount = $this->getRejectedCount($value['space_id'], $input_params['user_id']); 
                    if(!empty($rejectedcount)){
                        $result_arr[$i]['rejected_count'] = $rejectedcount[0]['rejected_count'];
                    }
                    $pendingcount = $this->getPendingCount($value['space_id'], $input_params['user_id']);
                    if(!empty($rejectedcount)){
                        $result_arr[$i]['pending_count'] = $pendingcount[0]['pending_count'];
                    } 
                    if($value['zipcode'] == '0')
                    {
                        $result_arr[$i]['zipcode'] = "";
                    }
                $i++;
                }
            } else{
                $this->db->start_cache();
                $this->db->where("s.iSysRecDeleted ", "0");
                $this->db->join("users as u","u.iUserId = s.iUser_id", "left");
                $this->db->join("users as us","us.iUserId = ".$input_params['user_id']."", "left" );
                $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = s.iUser_id AND iUser_id = ".$input_params['user_id']." AND eStatus ='block' )");
                if (isset($input_params['latitude']) && isset($input_params['longitude']) && isset($input_params['distance']) && $input_params['distance']!="") { 
                    $latitude = $input_params['latitude'];
                    $longitude = $input_params['longitude'];
                    $distance = $input_params['distance'];
                    if($latitude != "" &&  $longitude != "") {
                        $where_exp = "(((acos(sin((".$latitude."*pi()/180)) * sin((s.dLatitude*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((s.dLatitude*pi()/180))*cos(((".$longitude."- s.dLongitude)*pi()/180))))*180/pi())*60*1.1515) <='". $distance . "'";
                        $this->db->where($where_exp);
                    }
                }
                if(isset($input_params['search']) || $input_params['search'] != "")
                {  
                    $this->db->like('LOWER(s.vSpace_name)', strtolower($input_params['search']));
                }
                    $total_records = $this->db->count_all_results();
                    $settings_params['count'] =$total_records;
                    $record_limit = $input_params['per_page_record'];
                    $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
                    $total_pages = getTotalPages($total_records, $record_limit);
                    $start_index = getStartIndex($total_records, $current_page, $record_limit);
                    $settings_params['per_page'] = $record_limit;
                    $settings_params['curr_page'] = $current_page;
                    $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
                    $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;
            
                $this->db->limit($record_limit, $start_index);
                //$this->db->order_by("us.dLatitude", "DESC");
                //$this->db->order_by("us.dLongitude", "DESC");
                $this->db->order_by(ABS("us.dLatitude"- "s.dLatitude"));
                $this->db->order_by(ABS("us.dLongitude"- "s.dLongitude"));
                $this->db->order_by("s.dtCreated_at", "DESC");
                $result_obj = $this->db->get();
                //echo $this->db->last_query(); exit();
                $this->db->flush_cache(); 
                $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                $i=0;
                foreach($result_arr as $key=>$value){
                    $result_arr[$i]['images'] = $this->getImage($value['space_id'], $value['user_id']); 
                    $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $value['user_id']); 
                    if($value['zipcode'] == '0')
                    {
                        $result_arr[$i]['zipcode'] = "";
                    }
                    $result_arr[$i]['isSentRequest'] = $this->getIsSendRequest($value,$input_params);
                    $status = $this->getIsRequestStatus($value,$input_params);
                    if($status[0]['status'] == 'Accept')
                    {
                        $result_arr[$i]['isAccept'] = $status[0]['status'];
                    } else if($status[0]['status'] == 'Reject'){
                        $result_arr[$i]['isReject'] = $status[0]['status'];
                    }
                    $result_arr[$i]['myfavorite'] = $this->getMyFavFlag($value['space_id'], $input_params['user_id']);
                    $i++;
                }                   
            }
            if (!is_array($result_arr) || count($result_arr) == 0)
            {
                throw new Exception('No records found.');
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $success = 1;
        } catch(Exception $e) {
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
     * Used to execute database queries for get is requested for space list API.
     * 
     * @param array $value request parameters. 
     * @return array $return_arr returns response of query block.
     */
    public function getIsSendRequest($value,$params_arr)
    {
        $result_arr= array();
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->from('user_request as ur');
        $this->db->select("ur.iUser_request_id AS requested_id");
        if((isset($value['space_id']) && ($value['space_id']) != "")&& (isset($params_arr['user_id']) && ($params_arr['user_id']) != "")){
            $this->db->where("ur.iSpace_id",$value['space_id']);
            $this->db->where("ur.iUser_id",$params_arr['user_id']);
            $this->db->where("ur.iSysRecDeleted",'0');
        }
        $result_obj = $this->db->get();
        $this->db->stop_cache();
        //echo $this->db->last_query(); die;
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        if(empty($result_arr)){
            $result_arr = '0';
        } else{
            $result_arr = '1';
        }
        return $result_arr;
    }
    /**
     * Used to execute database queries for get request status for space list API.
     * 
     * @param array $value request parameters. 
     * @return array $return_arr returns response of query block.
     */
    public function getIsRequestStatus($value,$params_arr)
    {
        $result_arr= array();
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->from('user_request as ur');
        $this->db->select("ur.iUser_request_id AS requested_id");
        $this->db->select("ur.eStatus AS status");
        if((isset($value['space_id']) && ($value['space_id']) != "")&& (isset($params_arr['user_id']) && ($params_arr['user_id']) != "")){
            $this->db->where("ur.iSpace_id",$value['space_id']);
            $this->db->where("ur.iUser_id",$params_arr['user_id']);
        }
        $result_obj = $this->db->get();
        $this->db->stop_cache();
        //echo $this->db->last_query(); die;
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        return $result_arr;
    }
    /**
     * Get My Favorite flag for space list API.
     *
     * @param string  $input_params user id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getMyFavFlag($space_id, $user_id)
    {
        $result_arr = array();
        $this->db->flush_cache();
            $this->db->from("my_favorite AS mf");    
            $this->db->select("mf.iMy_favorite_id");
            if(($space_id && $space_id != "") && ($user_id && $user_id != "")){
                $this->db->where("mf.iSpace_id",$space_id);
                $this->db->where("mf.iUser_id ",$user_id );
                $this->db->where("mf.iSysRecDeleted ", "0");
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $data_arr = is_object($result_obj) ? $result_obj->result_array() : array(); 
            if(empty($data_arr)){
                $result_arr = '0';
            } else{
                $result_arr = '1';
            }
            $this->db->stop_cache();        
        return $result_arr;
    } 
    /**
     * Get space details API.
     *
     * @param string $space_id used to process query block.
     * @param string $user_id used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_space_details($input_params = array(), $space_id = '')
    { 
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("space AS s");    
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            $this->db->select("s.dLatitude AS latitude");
            $this->db->select("s.dLongitude AS longitude");
            $this->db->join('users as ui', 'ui.iUserId = s.iUser_id', 'left');
            if($input_params['usertype'] == 'Landlord')
            {
                if(isset($space_id) && $space_id != ""){
                    $this->db->where("s.iSpace_id =", $space_id);
                    $this->db->where("s.iSysRecDeleted ", "0");
                }
                $this->db->order_by("s.dtCreated_at", "DESC");
                $result_obj = $this->db->get();
                $this->db->flush_cache(); 
                $this->db->stop_cache();
                //echo $this->db->last_query(); exit();
                //Images_data
                $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                if($result_arr[0]['zipcode'] == '0')
                {
                    $result_arr[0]['zipcode'] = "";
                }
                    $this->db->flush_cache();
                    $this->db->from("space_images AS si"); 
                    $this->db->select("si.vImages AS images");
                    $this->db->where("si.vImages IS NOT NULL");
                    $this->db->join('space as sp', 'sp.iSpace_id = si.iSpace_id', 'left');
                    if((isset($space_id) && $space_id != "")&& (isset($input_params['user_id']) && $input_params['user_id'] != "")){
                        $this->db->where("si.iSpace_id =", $space_id);
                        $this->db->where("si.iUser_id=",$input_params['user_id']);
                    }
                    $images_data = $this->db->get();
                    $this->db->flush_cache();
                    //echo $this->db->last_query(); exit();
                    $images= is_object($images_data) ? $images_data->result_array() : array();
                    $result_arr[0]['images'] = $images;

                //Video_data
                $this->db->flush_cache();
                $this->db->from("space_images AS si"); 
                $this->db->select("si.vVideo AS video");
                $this->db->where("si.vVideo IS NOT NULL");
                $this->db->join('space as sp', 'sp.iSpace_id = si.iSpace_id', 'left');
                if((isset($space_id) && $space_id != "")&& (isset($input_params['user_id']) && $input_params['user_id'] != "")){
                    $this->db->where("si.iSpace_id =", $space_id);
                    $this->db->where("si.iUser_id=",$input_params['user_id']);
                }
                $video_data = $this->db->get();
                $this->db->flush_cache();
                //echo $this->db->last_query(); exit();
                $video= is_object($video_data) ? $video_data->result_array() : array();
        
                $result_arr[0]['video'] = $video;

                $count = $this->getPendingCountResult($space_id);
                $result_arr[0]['pending_count'] =$count[0]['pending_count'];

                $request_result = $this->getRequestList($space_id);
                $result_arr[0]['accepted_list'] = $request_result;             
            } else{
                    if (isset($space_id) && $space_id != "") {
                        $this->db->where("s.iSpace_id =", $space_id);
                        $this->db->where("s.iSysRecDeleted ", "0");
                    }
                    $this->db->select("ui.iUserId AS Landlord_id");
                    $this->db->select("concat(ui.vFirstName,\" \",ui.vLastName) AS  Landlord_name");
                    $this->db->select("ui.vProfileImage AS Landlord_profile");
                    $this->db->order_by("s.dtCreated_at", "DESC");
                    $result_obj = $this->db->get();
                    //echo $this->db->last_query(); exit();
                    $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                    if($result_arr[0]['zipcode'] == '0')
                    {
                        $result_arr[0]['zipcode'] = "";
                    }
                    if(isset($result_arr) && $result_arr != "") {
                        for( $i= 0 ; $i< count($result_arr); $i++) {
                             $result_arr[$i]['Landlord_profile']=  ($result_arr[$i]['Landlord_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['Landlord_id'].'/'. $result_arr[$i]['Landlord_profile'] : ""; 
                            
                        }//exit;
                    }
                            //Images_data
                        $this->db->flush_cache();
                        $this->db->from("space_images AS si"); 
                        $this->db->select("si.vImages AS images");
                        $this->db->where("si.vImages IS NOT NULL");
                        $this->db->join('space as sp', 'sp.iSpace_id = si.iSpace_id', 'left');
                        if((isset($space_id) && $space_id != "") && (isset($result_arr[0]['user_id']) && $result_arr[0]['user_id'] != "")){
                            $this->db->where("si.iSpace_id =", $space_id);
                            $this->db->where("si.iUser_id=",$result_arr[0]['user_id']);
                        }
                        $images_data = $this->db->get();
                        $this->db->flush_cache();
                        //echo $this->db->last_query(); exit();
                        $images= is_object($images_data) ? $images_data->result_array() : array();
                        $result_arr[0]['images'] = $images;

                    //Video_data
                    $this->db->flush_cache();
                    $this->db->from("space_images AS si"); 
                    $this->db->select("si.vVideo AS video");
                    $this->db->where("si.vVideo IS NOT NULL");
                    $this->db->join('space as sp', 'sp.iSpace_id = si.iSpace_id', 'left');
                    if((isset($space_id) && $space_id != "") && (isset($result_arr[0]['user_id']) && $result_arr[0]['user_id'] != "")){
                        $this->db->where("si.iSpace_id =", $space_id);
                        $this->db->where("si.iUser_id=",$result_arr[0]['user_id']);
                    }
                    $video_data = $this->db->get();
                    $this->db->flush_cache();
                    //echo $this->db->last_query(); exit();
                    $video= is_object($video_data) ? $video_data->result_array() : array();
            
                    $result_arr[0]['video'] = $video;
                    $i=0;
                    foreach($result_arr as $key=>$value){
                       $result_arr[$i]['myfavorite'] = $this->getMyFavFlag($value['space_id'], $input_params['user_id']);
                       $result_arr[$i]['isSentRequest'] = $this->getIsSendRequest($value,$input_params);
                        $status = $this->getIsRequestStatus($value,$input_params);
                        if($status[0]['status'] == 'Accept')
                        {
                            $result_arr[$i]['isAccept'] = $status[0]['status'];
                        } else if($status[0]['status'] == 'Reject'){
                            $result_arr[$i]['isReject'] = $status[0]['status'];
                    }
                       $i++;
                    } 
                }
            if (!is_array($result_arr) || count($result_arr) == 0)
            {
                throw new Exception('No records found.');
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $success = 1;
        } catch(Exception $e) {
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
     * Update space API.
     *
     * @param array $params_arr params_arr array to process query block.
     * @param array $where_arr where_arr are used to process where condition(s).
     * @return array $return_arr returns response of query block.
     */
    public function update_space($params_arr = array(), $where_arr = array())
    {
        try {
            $affected_rows_image = $affected_rows_video = $affected_rows_space = 0;
            $message = "";
            $result_arr = array();

            $this->db->start_cache();
            if (isset($where_arr["user_id"]) && $where_arr["user_id"] != "") {
                $this->db->where("iUser_id =", $where_arr["user_id"]);
            }
            if (isset($where_arr["space_id"]) && $where_arr["space_id"] != "") {
                $this->db->where("iSpace_id =", $where_arr["space_id"]);
            }
            $this->db->stop_cache();
            if ((isset($params_arr["images"]) && $params_arr['images'] != '') || (isset($params_arr["video"]) && $params_arr['video'] != ''))
            {
                if (isset($where_arr["space_id"]) && $where_arr["space_id"] != "") {
                    $this->db->where("iSpace_id =", $where_arr["space_id"]);
                }
                $this->db->delete("space_images");
                //echo $this->db->last_query(); exit();
            }
            $this->db->start_cache();
            if (isset($params_arr["images"]) && $params_arr['images'] != '') 
            {                
                $images = explode(",",$params_arr["images"]);
                $images_array = array();
                $i=0;
                $data = array();
                foreach ($images  as $key) {
                    $data = array();
                    $data['vImages'] = $key;
                    $data['iSpace_id'] = $where_arr['space_id'];
                    $data['iUser_id'] = $where_arr["user_id"];
                    array_push($images_array, $data);
                    $i++;
                }
                $this->db->insert_batch('space_images', $images_array);
                //echo $this->db->last_query();die();
                $insert_id = $this->db->insert_id();
                if(!empty($insert_id))
                {
                    $affected_rows_image = "1";
                }
                $this->db->stop_cache();
                //echo $this->db->last_query();die();
            }
            $this->db->start_cache();
            if (isset($params_arr["video"]) && $params_arr['video'] != '') {
                $this->db->start_cache();
                $this->db->set("vVideo", $params_arr["video"]);
                $this->db->set("iUser_id", $where_arr["user_id"]);
                $this->db->set("iSpace_id", $where_arr["space_id"]);
    
                if (isset($where_arr["user_id"]) && $where_arr["user_id"] != "") {
                    $this->db->where("iUser_id =", $where_arr["user_id"]);
                }
                if (isset($where_arr["space_id"]) && $where_arr["space_id"] != "") {
                    $this->db->where("iSpace_id =", $where_arr["space_id"]);
                }
                $this->db->insert("space_images");
                //echo $this->db->last_query();
                $insert_id = $this->db->insert_id();
                if(!empty($insert_id))
                {
                    $affected_rows_video = "1";
                }
                $this->db->stop_cache();
            }
            $this->db->start_cache();
            $this->db->set("vSpace_name", $params_arr["space_name"]);
            $this->db->set("tAddress", $params_arr["address"]);
            $this->db->set("vCity", $params_arr["city"]);
            $this->db->set("vState", $params_arr["state"]);
            $this->db->set("iZipcode", $params_arr["zipcode"]);
            $this->db->set("iStylist_required", $params_arr["stylist_required"]);
            $this->db->set("tSpace_details", $params_arr["space_details"]);
            $this->db->set("dLatitude", $params_arr["latitude"]);
            $this->db->set("dLongitude", $params_arr["longitude"]);
            
            $res = $this->db->update("space");
            
            //echo $this->db->last_query(); exit();
            $affected_rows_space = $this->db->affected_rows();
            $this->db->stop_cache();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in updation.");
            }
            $result_param = "affected_rows";
            if(($affected_rows_image || $affected_rows_video || $affected_rows_space) == '1')
            {
                $affected_rows = "1";
            } else{
                $affected_rows = '0';
            }
            //pr($affected_rows); die;
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
     * Remove space API.
     * @param array $params_arr params_arr array to process query block.
     * @param array $where_arr where_arr are used to process where condition(s).
     * @return array $return_arr returns response of query block.
     */
    public function remove_space($params_arr = array(), $where_arr = array())
    {
        try {
            $message = "";
            $result_arr = array();
            if (isset($where_arr["space_id"]) && $where_arr["space_id"] != "") {
                 $this->db->where("iSpace_id =", $where_arr["space_id"]);
               }    
            $this->db->set("iSysRecDeleted","1");
            $res = $this->db->update("space");
            //echo $this->db->last_query(); die;
            $space_delete = $this->db->affected_rows();
            $this->db->flush_cache();
            $this->db->from("notifications as n");
            $this->db->select("n.entity_type as entity_type");
            $this->db->where("space_id",$where_arr["space_id"]);
            $result_obj=$this->db->get();
            $result_arr= is_object($result_obj) ? $result_obj->result_array() : array();
            if($result_arr[0]['entity_type'] == "New space created")
            {
                $this->db->set("ni.iSysRecDeleted","1");
                $this->db->where("space_id",$where_arr["space_id"]);
                $res = $this->db->update("notifications as ni");
            }
            //echo $this->db->last_query(); die;
            $notification_delete = $this->db->affected_rows();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
            if(($space_delete && $notification_delete) == '1')
            {
                $affected_rows = "1";
            } else{
                $affected_rows = '0';
            }
            //pr($affected_rows); die;
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
     * Get Landlord profile API.
     *
     * @param string  $input_params input params is used to process query block.
     * @param string $User_id user id is used to process query block.
     * @return array $return_arr returns response of query block.
     */    
    public function get_landlord_profile($input_params = array())
    { 
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from('users as ui');
            $this->db->select("ui.iUserId AS landlord_id");
            $this->db->select("concat(ui.vFirstName,\" \",ui.vLastName) AS landlord_name");
            $this->db->select("ui.vProfileImage AS landlord_profile");
            $this->db->select("ui.vMobileNo AS landlord_mobile");
            $this->db->select("ui.vEmail AS landlord_email");
            $this->db->select("ui.tAboutMe AS AboutMe");
            if(isset($input_params['user_id']) && $input_params['user_id'] != "") {
                $this->db->where("ui.iUserId ", $input_params['user_id']);
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['landlord_profile']=  ($result_arr[$i]['landlord_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['landlord_id'].'/'. $result_arr[$i]['landlord_profile'] : ""; 
                    
                }//exit;
            }
            $this->db->stop_cache();
              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $db_error = $this->db->error();
              if ($db_error['code']) {
                  throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
              }
              $success = 1;
            } catch(Exception $e) {
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
     * Add space to myfavorite API.
     * @param string  $input_params input params is used to process query block.
     * @param string $space_id space id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function add_myfavorite($input_params = array(), $space_id = '')
    {
        try {
            $message = "";
            $result_arr = array();
            if (!is_array($input_params) || count($input_params) == 0) {
                throw new Exception("Insert data not found.");
            }
            if (isset($input_params["user_id"])) {
                $this->db->set("iUser_id", $input_params["user_id"]);
            }
            if (isset($space_id)) {
                $this->db->set("iSpace_id", $space_id);
            }
            $this->db->insert("my_favorite");
            //echo $this->db->last_query();exit;
            $insert_id = $this->db->insert_id();
            if (!$insert_id) {
                throw new Exception("Failure in insertion.");
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $result_param = "my_favorite_id";
            $result_arr[0][$result_param] = $insert_id;
            $success = 1;
        } catch (Exception $e) {
            $params_arr['db_query'] = $this->db->last_query();
            $this->general->apiLogger($params_arr, $e);
            $success = 0;
            $message = $e->getMessage();
        }
        $this->db->_reset_all();
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Get owner profile API.
     *
     * @param string  $input_params input params is used to process query block.
     * @param string $User_id user id is used to process query block.
     * @return array $return_arr returns response of query block.
     */    
    public function get_owner_profile($input_params = array(),&$settings_params = array())
    { 
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from('users as ui');
            $this->db->select("ui.iUserId AS owner_id");
            $this->db->select("concat(ui.vFirstName,\" \",ui.vLastName) AS owner_name");
            $this->db->select("ui.vProfileImage AS owner_profile");
            $this->db->select("ui.vEmail AS owner_email");
            $this->db->select("ui.tAboutMe AS AboutMe");
            if(isset($input_params['User_id']) && $input_params['User_id'] != "") {
                $this->db->where("ui.iUserId ", $input_params['User_id']);
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['owner_profile']=  ($result_arr[$i]['owner_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['owner_id'].'/'. $result_arr[$i]['owner_profile'] : ""; 
                    
                }//exit;
            }
            $this->db->stop_cache();
            $this->db->flush_cache();
            $spaces = $this->getSpace($input_params);
            $total_records = count($spaces);                        
            $settings_params['space_count'] = $total_records;
            $space = array();
            foreach(array_slice($spaces,0,2) as $val)
            {
                array_push($space, $val);
            }  
            $result_arr[0]['Space'] = $space;            
              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $db_error = $this->db->error();
              if ($db_error['code']) {
                  throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
              }
              $success = 1;
            } catch(Exception $e) {
                $params_arr['db_query'] = $this->db->last_query();
                $this->general->apiLogger($params_arr, $e);
                $success = 0;
                $message = $e->getMessage();
        }
        $this->db->flush_cache();
        $this->db->_reset_all();
        $return_arr["space_count"] = $total_records;
        $return_arr["success"] = $success;
        $return_arr["message"] = $message;
        $return_arr["data"] = $result_arr;
        return $return_arr;
    }
    /**
     * Get Stylist profile API.
     *
     * @param string  $input_params input params is used to process query block.
     * @param string $User_id user id is used to process query block.
     * @return array $return_arr returns response of query block.
     */    
    public function get_stylist_profile($input_params = array())
    {
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from('users as ui');
            $this->db->select("ui.iUserId AS stylist_id");
            $this->db->select("concat(ui.vFirstName,\" \",ui.vLastName) AS stylist_name");
            $this->db->select("ui.vProfileImage AS stylist_profile");
            $this->db->select("ui.vMobileNo AS stylist_number");
            $this->db->select("ui.vEmail AS stylist_email");
            $this->db->select("ui.tAboutMe AS AboutMe");
            if(isset($input_params['user_id']) && $input_params['user_id'] != "") {
                $this->db->where("ui.iUserId ", $input_params['user_id']);
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['stylist_profile']=  ($result_arr[$i]['stylist_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['stylist_id'].'/'. $result_arr[$i]['stylist_profile'] : ""; 
                    
                }//exit;
            }
            $this->db->stop_cache();
            $mypost = $this->getMyPost($input_params['user_id']);
            $result_arr[0]['My_post'] = $mypost; 
            $myfavorites = $this->getMyFavorite($input_params['user_id']);
            $result_arr[0]['My_favorites'] = $myfavorites; 

              if (!is_array($result_arr) || count($result_arr) == 0)
              {
                  throw new Exception('No records found.');
              }
              $db_error = $this->db->error();
              if ($db_error['code']) {
                  throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
              }
              $success = 1;
            } catch(Exception $e) {
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
     * Get Space for landlord profile and Owner profile API.
     *
     * @param string  $input_params user id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getSpace($input_params = array())
    {   
        $result_arr = array();
        $this->db->flush_cache();
            $this->db->from("space AS s");    
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            if($input_params['usertype'] == 'Landlord') {
                if($input_params['user_id'] && $input_params['user_id'] != "") 
                {
                    $this->db->where("s.iUser_id ",$input_params['user_id'] );
                    $this->db->where("s.iSysRecDeleted ", "0");
                    $result_obj = $this->db->get(); 
                    //echo $this->db->last_query(); exit();
                    $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                    $this->db->stop_cache();
                        $i=0;
                        foreach($result_arr as $key=>$value){
                            $result_arr[$i]['images'] = $this->getImage($value['space_id'],$value['user_id']); 
                            $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $value['user_id']); 
                            if($value['zipcode'] == '0')
                            {
                                $result_arr[$i]['zipcode'] = "";
                            }
                            $i++;
                        } 
                } 
            } else{
                    if(($input_params['User_id'] && $input_params['User_id'] != ""))
                    {
                        $this->db->where("s.iUser_id ",$input_params['User_id'] );
                        $this->db->where("s.iSysRecDeleted ", "0");
                        $result_obj = $this->db->get(); 
                        //echo $this->db->last_query(); exit();
                        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                        $this->db->stop_cache();
                            $i=0;
                            foreach($result_arr as $key=>$value){
                                $result_arr[$i]['images'] = $this->getImage($value['space_id'],$value['user_id']); 
                                $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $value['user_id']);
                                $result_arr[$i]['myfavorite'] = $this->getMyFavFlag($value['space_id'], $input_params['user_id']); 
                                $result_arr[$i]['isSentRequest'] = $this->getIsSendRequest($value,$input_params);
                                $status = $this->getIsRequestStatus($value,$input_params);
                                if($status[0]['status'] == 'Accept')
                                {
                                    $result_arr[$i]['isAccept'] = $status[0]['status'];
                                } else if($status[0]['status'] == 'Reject'){
                                    $result_arr[$i]['isReject'] = $status[0]['status'];
                                }
                                if($value['zipcode'] == '0')
                                {
                                    $result_arr[$i]['zipcode'] = "";
                                }
                                $i++;
                            } 
                    }
            }
        return $result_arr;
    }
    /**
     * Get Image for space list API.
     *
     * @param string  $space_id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getImage($space_id, $user_id)
    { 
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("space_images AS si"); 
        $this->db->select("distinct(si.iSpace_images_id) AS iSpace_images_id");
        $this->db->select("si.vImages AS images");
        $this->db->where("si.vImages IS NOT NULL");
        if((isset($space_id) && $space_id != "") && (isset($user_id) && $user_id != "")){
            $this->db->where("si.iSpace_id =", $space_id);
            $this->db->where("si.iUser_id=", $user_id);
        }
        $images_data = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $images= is_object($images_data) ? $images_data->result_array() : array();
        return $images;
    }

    /**
     * Get Video for space list API.
     *
     * @param string  $space_id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getVideo($space_id, $user_id){
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("space_images AS si");
        $this->db->select("distinct(si.iSpace_images_id) AS iSpace_images_id"); 
        $this->db->select("si.vVideo AS video");
        $this->db->where("si.vVideo IS NOT NULL");
        if((isset($space_id) && $space_id != "") && (isset($user_id) && $user_id != "")){
            $this->db->where("si.iSpace_id =", $space_id);
            $this->db->where("si.iUser_id=",$user_id);
        }
        $video_data = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $video= is_object($video_data) ? $video_data->result_array() : array();
        return $video;
    }
    /**
     * Get Image for get landlord profile API.
     *
     * @param string  $id Stylist post id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getPostImage($id, $User_id)
    {
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("stylist_images AS si"); 
        $this->db->select("si.vImages AS images");
        $this->db->where("si.vImages IS NOT NULL");
        if (isset($id) && $id != "") {
            $this->db->where("si.iStylist_post_id =", $id);
            $this->db->where("si.iUser_id =", $User_id);
        }
        $images_data = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $images= is_object($images_data) ? $images_data->result_array() : array();
        return $images;
    }

    /**
     * Get Accepted count for space list API.
     *
     * @param string  $id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getAcceptedCount($id,$user_id)
    {
        $result_arr = array();
        $this->db->from("user_request AS ur");   
        $this->db->join("users as u","u.iUserId = ur.iUser_id", "left");  
        $this->db->select("count(distinct(ur.iUser_request_id)) AS accepted_count"); 
        $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = ur.iUser_id AND iUser_id = ".$user_id." AND eStatus ='block' )");
        $this->db->where("ur.eStatus",'Accept');
        if (isset($id) && $id != "") {
            $this->db->where("ur.iSpace_id =", $id);
        } 
        $result_obj = $this->db->get();
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        return $result_arr;
    }

    /**
     * Get Rejected count for space list API.
     *
     * @param string  $id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getRejectedCount($id, $user_id)
    {
        $result_arr = array();
        $this->db->from("user_request AS ur"); 
        $this->db->join("users as u","u.iUserId = ur.iUser_id", "left");    
        $this->db->select("count(distinct(ur.iUser_request_id)) AS rejected_count");
        $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = ur.iUser_id AND iUser_id = ".$user_id." AND eStatus ='block' )");
        $this->db->where("ur.eStatus",'Reject');
        if (isset($id) && $id != "") {
            $this->db->where("ur.iSpace_id =", $id);
        } 
        $result_obj = $this->db->get();
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        return $result_arr;
    }

    /**
     * Get Penfing count for space list API.
     *
     * @param string  $id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getPendingCount($id, $user_id)
    {
        $result_arr = array();
        $this->db->from("user_request AS ur");
        $this->db->join("users as u","u.iUserId = ur.iUser_id", "left");  
        $this->db->select("count(distinct(ur.iUser_request_id)) AS pending_count");
        $this->db->where("u.iUserId NOT IN(select iBlock_user_id from user_block where iBlock_user_id = ur.iUser_id AND iUser_id = ".$user_id." AND eStatus ='block' )");
        $this->db->where("ur.eStatus",'Pending');
        if (isset($id) && $id != "") {
            $this->db->where("ur.iSpace_id =", $id);
        }  
        $this->db->stop_cache();
        $result_obj = $this->db->get(); 
        //echo $this->db->last_query(); exit();
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        return $result_arr;
    }
       /**
     * Get pending count result for space details API.
     *
     * @param string $space_id used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getPendingCountResult($space_id = '')
    {
        $result_arr = array();
        $this->db->from("user_request AS u");   
        $this->db->select("count(distinct(u.iUser_request_id)) AS pending_count");
        $this->db->where("u.eStatus",'Pending');
        if (isset($space_id) && $space_id != "") {
            $this->db->where("u.iSpace_id =", $space_id);
        } 
        $result_obj = $this->db->get();
        //echo $this->db->last_query(); exit();
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();        
        return $result_arr;
    }

     /**
     * Get Requested list for space details API.
     *
     * @param string $space_id used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getRequestList($space_id ='')
    {
        $result_arr = array();
        $this->db->from("user_request AS ur");   
        $this->db->join('users as u', 'u.iUserId = ur.iUser_id', 'left');
        $this->db->select("u.iUserId AS stylist_id");
        $this->db->select("concat(u.vFirstName,\" \",u.vLastName) AS  stylist_name");
        $this->db->select("u.vProfileImage AS stylist_profile");
        if (isset($space_id) && $space_id != "") {
            $this->db->where("ur.iSpace_id =", $space_id);
            $this->db->where("ur.iSysRecDeleted", "0");
        }
        $this->db->where("ur.eStatus","Accept");
        $result_obj = $this->db->get(); 
        //echo $this->db->last_query(); exit();
        $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
        if(isset($result_arr) && $result_arr != "") {
            for( $i= 0 ; $i< count($result_arr); $i++) {
                 $result_arr[$i]['stylist_profile']=  ($result_arr[$i]['stylist_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['stylist_id'].'/'. $result_arr[$i]['stylist_profile'] : ""; 
                
            }//exit;
        }
        return $result_arr;
    }
    /**
     * Get My post for Stylist own profile API.
     *
     * @param string  $input_params user id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getMyPost($input_params = array())
    {
        $result_arr = array();
        $this->db->flush_cache();
            $this->db->from("stylist_post AS sp");    
            $this->db->select("sp.iStylist_post_id AS  stylist_post_id");
            $this->db->select('sp.dtCreated_at as created_at');
            $this->db->select("sp.iUser_id AS user_id");
            $this->db->select("sp.vTitle AS post_title");
            $this->db->select("sp.tPost_details AS post_details");
            if($input_params && $input_params != "") {
                $this->db->where("sp.iUser_id ",$input_params);
                $this->db->where("sp.iSysRecDeleted ", "0");
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            $this->db->stop_cache();
                $i=0;
                foreach($result_arr as $key=>$value){
                    $result_arr[$i]['images'] = $this->getMyPostImage($value['stylist_post_id']);  
                    $i++;
                } 
        return $result_arr;
    }
     /**
     * Get My post Image for get stylist profile API.
     *
     * @param string  $id Stylist post id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getMyPostImage($id)
    {
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("stylist_images AS si"); 
        $this->db->select("si.vImages AS images");
        $this->db->where("si.vImages IS NOT NULL");
        if (isset($id) && $id != "") {
            $this->db->where("si.iStylist_post_id =", $id);
        }
        $images_data = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $images= is_object($images_data) ? $images_data->result_array() : array();
        return $images;
    }
    /**
     * Get My Favorite for Stylist own profile API.
     *
     * @param string  $input_params user id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getMyFavorite($input_params = array())
    {
        $result_arr = array();
        $this->db->flush_cache();
            $this->db->from("space AS s");  
            $this->db->join("my_favorite AS mf","mf.iSpace_id = s.iSpace_id", "left");  
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            if($input_params && $input_params != "") {
                $this->db->where("mf.iUser_id ",$input_params );
                $this->db->where("mf.iSysRecDeleted ", "0");
            }
            $result_obj = $this->db->get(); 
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array(); 
            $this->db->stop_cache();        
            $i=0;
            foreach($result_arr as $key=>$value){
                $result_arr[$i]['images'] = $this->getImage($value['space_id'],$value['user_id']);
                $result_arr[$i]['video'] = $this->getVideo($value['space_id'],$value['user_id']);   
                $i++;
            } 
        return $result_arr;
    }

    /**
     * Method is used to execute database queries for Add space API.
     * 
     * @param string $sender_id landlord sender id is used to process query block.
     * @return array $return_arr returns response of query block.
     */
    public function get_add_space_details_for_notifi($sender_id = '')
    {
        try {
            $result_arr = array();
            $this->db->from("users AS u");
            $this->db->join("space AS s", "s.iUser_id = u.iUserId", "left");
            $this->db->select("s.iSpace_id AS spaces_id");
            $this->db->select("s.iUser_id AS space_user_id");
            $this->db->select("s.dLatitude AS latitude");
            $this->db->select("s.dLongitude AS longitude");
            $this->db->select("CONCAT(u.vFirstName,\" \",u.vLastName) AS sender_name");
            $this->db->select("u.vProfileImage as sender_profile_image");
            $this->db->where("(s.iSpace_id = ".$sender_id.")", false, false);
            $result_obj = $this->db->get();
            $db_error = $this->db->error();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                    $result_arr[$i]['sender_profile_image']=  ($result_arr[$i]['sender_profile_image'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['space_user_id'].'/'. $result_arr[$i]['sender_profile_image'] : ""; 
                    
                }//exit;
            }
            $i=0;
            foreach($result_arr AS $val){
                $result_arr[$i]['receiver_id'] = $this->getReceiverId($val);
                //array_push($data, $result_arr[$i]['receiver_id'][0]);
                $i++;
            }
            $result_arr = $result_arr[0];
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
        //pr($return_arr);die();
        return $return_arr;
    }
    /**
     * Get receiver id for get add space details for notifi API.
     *
     * @param string  $id space id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getReceiverId($value)
    {
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("users AS u"); 
        $this->db->select("u.iUserId AS r_users_id");
        $this->db->select("u.vDeviceToken As r_device_token");
        $this->db->where("u.eStatus", "Active");
        $this->db->where("u.eUserType", "Stylist");
        if (isset($value['latitude']) && isset($value['longitude'])) { 
            $latitude = $value['latitude'];
            $longitude = $value['longitude'];
            if($latitude != "" &&  $longitude != "") {
                $where_exp = "(((acos(sin((".$latitude."*pi()/180)) *sin((u.dLatitude*pi()/180)) + cos((".$latitude."*pi()/180))*cos((u.dLatitude*pi()/180))*cos(((".$longitude."- u.dLongitude)*pi()/180))))*180/pi())*60*1.1515) <='50'";
                $this->db->where($where_exp);
            }
        }
        $result_obj = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $result_arr['receiver_id']= is_object($result_obj) ? $result_obj->result_array() : array();
        return $result_arr;
    }
      /**
     * Get myfavorite list API.
     *
     * @param string  $input_params auth_token is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */    
    public function get_myfavorite_list($input_params = array(), $page_index = 1, &$settings_params = array())
    { 
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("my_favorite AS mf");    
            $this->db->join("space AS s","s.iSpace_id = mf.iSpace_id", "left");    
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            $this->db->where("mf.iSysRecDeleted ","0");
            $this->db->where("mf.iUser_id ",$input_params['user_id']);

                $total_records = $this->db->count_all_results();
                $settings_params['count'] =$total_records;
                $record_limit = $input_params['per_page_record'];
                $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
                $total_pages = getTotalPages($total_records, $record_limit);
                $start_index = getStartIndex($total_records, $current_page, $record_limit);
                $settings_params['per_page'] = $record_limit;
                $settings_params['curr_page'] = $current_page;
                $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
                $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;

                $this->db->limit($record_limit, $start_index);
                $this->db->order_by("mf.dtCreated_at", "DESC");
            $result_obj = $this->db->get();
            //echo $this->db->last_query(); exit();
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            $i=0;
            foreach($result_arr as $key=>$value){
                $result_arr[$i]['images'] = $this->getImage($value['space_id'],$value['user_id']); 
                $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $value['user_id']);
                $result_arr[$i]['myfavorite'] = $this->getMyFavFlag($value['space_id'], $input_params['user_id']); 
                $result_arr[$i]['isSentRequest'] = $this->getIsSendRequest($value,$input_params);
                $status = $this->getIsRequestStatus($value,$input_params);
                    if($status[0]['status'] == 'Accept')
                    {
                        $result_arr[$i]['isAccept'] = $status[0]['status'];
                    } else if($status[0]['status'] == 'Reject'){
                        $result_arr[$i]['isReject'] = $status[0]['status'];
                    }
                $i++;
            }
            if (!is_array($result_arr) || count($result_arr) == 0)
            {
                throw new Exception('No records found.');
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $success = 1;
        } catch(Exception $e) {
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
     * Get Owner space list API to view all spaces of that owner.
     *
     * @param string  $input_params auth_token is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */    
    public function get_owner_space_list($input_params = array(), $page_index = 1, &$settings_params = array())
    {   
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from("space AS s");    
            $this->db->select("s.iSpace_id AS  space_id");
            $this->db->select('s.dtCreated_at as created_at');
            $this->db->select("s.iUser_id AS user_id");
            $this->db->select("s.vSpace_name AS space_name");
            $this->db->select("s.tAddress AS address");
            $this->db->select("s.vCity AS city");
            $this->db->select("s.vState AS state");
            $this->db->select("s.iZipcode AS zipcode");
            $this->db->select("s.iStylist_required AS stylist_required");
            $this->db->select("s.tSpace_details AS space_details");
            if($input_params['usertype'] == 'Stylist')
            {
                if(($input_params['User_id'] && $input_params['User_id'] != ""))
                {
                    $this->db->where("s.iUser_id ",$input_params['User_id'] );
                    $this->db->where("s.iSysRecDeleted ", "0");
                        $total_records = $this->db->count_all_results();
                        $settings_params['count'] =$total_records;
                        $record_limit = $input_params['per_page_record'];
                        $current_page = intval($page_index) > 0 ? intval($page_index) : 1;
                        $total_pages = getTotalPages($total_records, $record_limit);
                        $start_index = getStartIndex($total_records, $current_page, $record_limit);
                        $settings_params['per_page'] = $record_limit;
                        $settings_params['curr_page'] = $current_page;
                        $settings_params['prev_page'] = ($current_page > 1) ? 1 : 0;
                        $settings_params['next_page'] = ($current_page + 1 > $total_pages) ? 0 : 1;
                
                    $this->db->limit($record_limit, $start_index);
                    $this->db->order_by("s.dtCreated_at", "DESC");
                    $result_obj = $this->db->get();
                    //echo $this->db->last_query(); exit();
                    $this->db->flush_cache(); 
                    $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
                    $i=0;
                    foreach($result_arr as $key=>$value){
                        $result_arr[$i]['images'] = $this->getImage($value['space_id'], $value['user_id']); 
                        $result_arr[$i]['video'] = $this->getVideo($value['space_id'], $value['user_id']); 
                        $result_arr[$i]['myfavorite'] = $this->getMyFavFlag($value['space_id'], $input_params['user_id']);
                        $result_arr[$i]['isSentRequest'] = $this->getIsSendRequest($value,$input_params);
                        $status = $this->getIsRequestStatus($value,$input_params);
                        if($status[0]['status'] == 'Accept')
                        {
                            $result_arr[$i]['isAccept'] = $status[0]['status'];
                        } else if($status[0]['status'] == 'Reject'){
                            $result_arr[$i]['isReject'] = $status[0]['status'];
                        }
                        $i++;
                    }   
                }                  
            }
            if (!is_array($result_arr) || count($result_arr) == 0)
            {
                throw new Exception('No records found.');
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $success = 1;
        } catch(Exception $e) {
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
}
?>
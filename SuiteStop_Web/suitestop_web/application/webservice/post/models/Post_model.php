<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of post Model
 *
 * @category webservice
 *
 * @package user
 *
 * @subpackage models
 *
 * @module post
 *
 * @class post_model.php
 *
 * @path application\webservice\post\models\Post_model.php
 *
 * @version 4.4
 *
 * @author CIT Dev Team
 *
 * @since 06.09.2019
 */

class Post_model extends CI_Model
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
     * Used to execute database queries for create post.
     *
     * @param array $params_arr params_arr array to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function create_post($params_arr = array())
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
            if (isset($params_arr["post_title"])) {
                $this->db->set("vTitle", $params_arr["post_title"]);
            }
            if (isset($params_arr["post_details"])) {
                $this->db->set("tPost_details", $params_arr["post_details"]);
            }
            $this->db->insert("stylist_post");
            //echo $this->db->last_query();exit;
            $insert_id = $this->db->insert_id();
            if (!$insert_id) {
                throw new Exception("Failure in insertion.");
            }
                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }
            if (isset($params_arr["post_images"]) && $params_arr['post_images'] != '') {
                $images = explode(",",$params_arr["post_images"]);
                $images_array = array();
                $i=0;
                $data = array();
                foreach ($images  as $key) {
                    $data = array();
                    $data['vImages'] = $key;
                    $data['iStylist_post_id'] = $insert_id;
                    $data['iUser_id'] = $params_arr["user_id"];
                    array_push($images_array, $data);
                    $i++;
                }
                $this->db->insert_batch('stylist_images', $images_array);
                //echo $this->db->last_query();die();
            }
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            $result_param = "post_id";
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
     * Get user profile API.
     *
     * @param string  $input_params input params is used to process query block.
     * @param string $User_id user id is used to process query block.
     * @return array $return_arr returns response of query block.
     */    
    public function get_user_profile($input_params = array())
    {  
        try
        {
            $message = "";
            $result_arr = array();
            $this->db->start_cache();
            $this->db->from('users as ui');
            $this->db->select("ui.iUserId AS user_id");
            $this->db->select("concat(ui.vFirstName,\" \",ui.vLastName) AS user_name");
            $this->db->select("ui.vProfileImage AS user_profile");
            $this->db->select("ui.vEmail AS user_email");
            $this->db->select("ui.tAboutMe AS AboutMe");
            if(isset($input_params['User_id']) && $input_params['User_id'] != "") {
                $this->db->where("ui.iUserId ", $input_params['User_id']);
            }
            $result_obj = $this->db->get(); 
            $result_arr = is_object($result_obj) ? $result_obj->result_array() : array();
            if(isset($result_arr) && $result_arr != "") {
                for( $i= 0 ; $i< count($result_arr); $i++) {
                     $result_arr[$i]['user_profile']=  ($result_arr[$i]['user_profile'] != "") ?  $this->config->item("AWS_BASE_PATH_NAME").$this->config->item("AWS_BUCKET_NAME").'/'.$this->config->item("AWS_FOLDER_NAME").'/user_profile/'. $result_arr[$i]['user_id'].'/'. $result_arr[$i]['user_profile'] : "";   
                }//exit;
            }
            //echo $this->db->last_query(); exit();
                $this->db->stop_cache();
                $this->db->flush_cache();
                $this->db->from("stylist_post AS sp");    
                $this->db->select("sp.iStylist_post_id AS  stylist_post_id");
                $this->db->select('sp.dtCreated_at as created_at');
                $this->db->select("sp.iUser_id AS user_id");
                $this->db->select("sp.vTitle AS post_title");
                $this->db->select("sp.tPost_details AS post_details");
                if($input_params['User_id'] && $input_params['User_id'] != "") {
                    $this->db->where("sp.iUser_id ",$input_params['User_id']);
                    $this->db->where("sp.iSysRecDeleted ", "0");
                }
                $result_obj = $this->db->get(); 
                //echo $this->db->last_query(); exit();
                $post = is_object($result_obj) ? $result_obj->result_array() : array();

                $i=0;
                    foreach($post as $key=>$value){
                        $post[$i]['images'] = $this->getPostImage($value['stylist_post_id'], $value['user_id']);  
                        $i++;
                    }
                $result_arr[0]['Posts'] = $post; 
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
     * Get Image for get user profile API.
     *
     * @param string  $id Stylist post id is used to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function getPostImage($stylist_post_id, $User_id)
    { 
        $result_arr = array();
        $this->db->flush_cache();
        $this->db->from("stylist_images AS si"); 
        $this->db->select("si.vImages AS images");
        $this->db->where("si.vImages IS NOT NULL");
        if((isset($stylist_post_id) && $stylist_post_id != "") && (isset($User_id) && $User_id != "")) {
            $this->db->where("si.iStylist_post_id =", $stylist_post_id);
            $this->db->where("si.iUser_id =", $User_id);
        }
        $images_data = $this->db->get();
        $this->db->flush_cache();
        //echo $this->db->last_query(); exit();
        $images= is_object($images_data) ? $images_data->result_array() : array();
        return $images;
    }
    /**
     * Unfavorite API.
     * @param array $params_arr params_arr array to process query block.
     * @param array $where_arr where_arr are used to process where condition(s).
     * @return array $return_arr returns response of query block.
     */
    public function remove_space($params_arr = array(), $where_arr = array())
    {
        try {
            $message = "";
            $result_arr = array();
            if((isset($where_arr["space_id"]) && $where_arr["space_id"] != "") && (isset($params_arr["user_id"]) && $params_arr["user_id"] != "")){
                $this->db->where("iSpace_id =", $where_arr["space_id"]);
                $this->db->where("iUser_id=", $params_arr['user_id']);
            }    
            $this->db->set("iSysRecDeleted","1");
            $res = $this->db->update("my_favorite");
            //echo $this->db->last_query(); die;
            $affected_rows = $this->db->affected_rows();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
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
     * Remove post API.
     * @param array $params_arr params_arr array to process query block.
     * @param array $where_arr where_arr are used to process where condition(s).
     * @return array $return_arr returns response of query block.
     */
    public function remove_post($params_arr = array(), $where_arr = array())
    {   
        try {
            $message = "";
            $result_arr = array();
            if((isset($where_arr["post_id"]) && $where_arr["post_id"] != "") && (isset($params_arr["user_id"]) && $params_arr["user_id"] != "")){
                $this->db->where("iStylist_post_id =", $where_arr["post_id"]);
                $this->db->where("iUser_id=", $params_arr["user_id"]);
            }    
            $this->db->set("iSysRecDeleted","1");
            $res = $this->db->update("stylist_post");
            //echo $this->db->last_query(); die;
            $affected_rows = $this->db->affected_rows();
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }
            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in deletion.");
            }
            $result_param = "affected_rows";
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
     * Used to execute database queries for Update post.
     *
     * @param array $params_arr params_arr array to process query block.
     *
     * @return array $return_arr returns response of query block.
     */
    public function update_post($params_arr = array(), $where_arr = array())
    {
        try {
            $message = "";
            $result_arr = array();
            if (isset($params_arr["post_images"]) && $params_arr['post_images'] != '') 
            {
                $this->db->start_cache();
                if (isset($where_arr["post_id"]) && $where_arr["post_id"] != "") {
                    $this->db->where("iStylist_post_id =", $where_arr["post_id"]);
                }
                $this->db->delete("stylist_images");
                //echo $this->db->last_query();
                $this->db->stop_cache();
                $images = explode(",",$params_arr["post_images"]);
                $images_array = array();
                $i=0;
                $data = array();
                foreach ($images  as $key) {
                    $data = array();
                    $data['vImages'] = $key;
                    $data['iStylist_post_id'] = $where_arr['post_id'];
                    $data['iUser_id'] = $params_arr["user_id"];
                    array_push($images_array, $data);
                    $i++;
                }
                $this->db->insert_batch('stylist_images', $images_array);
                //echo $this->db->last_query();die();
                $affected_rows = $this->db->affected_rows();
            }
            $this->db->flush_cache();
            $this->db->start_cache();
            if((isset($where_arr["post_id"]) && $where_arr["post_id"] != "") && (isset($params_arr["user_id"]) && $params_arr["user_id"] != "")){
                $this->db->where("iStylist_post_id =", $where_arr["post_id"]);
                $this->db->where("iUser_id=", $params_arr['user_id']);
            } 
            $this->db->set("vTitle", $params_arr["post_title"]);
            $this->db->set("tPost_details", $params_arr["post_details"]);
            $res = $this->db->update("stylist_post");
            //echo $this->db->last_query();exit;
            $affected_rows = $this->db->affected_rows();
            
            $db_error = $this->db->error();
            if ($db_error['code']) {
                throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            }

            if (!$res || $affected_rows == -1) {
                throw new Exception("Failure in updation.");
            }
            $result_param = "affected_rows";
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
}
?>
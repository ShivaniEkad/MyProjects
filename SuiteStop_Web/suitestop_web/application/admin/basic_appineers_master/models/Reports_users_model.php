<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Description of Reports users Model
 * 
 * @category admin
 *            
 * @package basic_appineers_master
 * 
 * @subpackage models 
 *  
 * @module Reports users
 * 
 * @class Reports_users.php
 * 
 * @path application\admin\basic_appineers_master\models\Reports_users.php
 * 
 * @version 4.4
 *
 * @author CIT Dev Team
 * 
 * @date 26.08.2019
 */
 
class Reports_users_model extends CI_Model 
{
    public $table_name;
    public $table_alias;
    public $primary_key;
    public $primary_alias;
    public $insert_id;
    //
    public $grid_fields;
    public $join_tables;
    public $extra_cond;
    public $groupby_cond;
    public $orderby_cond;
    public $unique_type;
    public $unique_fields;
    public $switchto_fields;
    public $default_filters;
    public $global_filters;
    public $search_config;
    public $relation_modules;
    public $deletion_modules;
    public $print_rec;
    public $print_list;
    public $multi_lingual;
    public $physical_data_remove;
    //
    public $listing_data;
    public $rec_per_page;
    public $message;
    
    /**
     * __construct method is used to set model preferences while model object initialization.
     * @created Devangi Nirmal | 21.08.2019
     * @modified Devangi Nirmal | 21.08.2019
     */
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('listing');
        $this->load->library('filter');
        $this->load->library('dropdown');
        $this->module_name = "reports_users";
        $this->table_name = "user_report";
        $this->table_alias = "ur";
        $this->primary_key = "iUser_report_id";
        $this->primary_alias = "iUser_report_id";
        $this->physical_data_remove = "Yes";
        $this->grid_fields = array("reported_by_name", "reported_on_name","description", "message", "added_at","reason","sys_custom_field_1");
        $this->join_tables = array(
            array(
                "table_name" => "users",
                "table_alias" => "ub",
                "field_name" => "iUserId",
                "rel_table_name" => "user_report",
                "rel_table_alias" => "ur",
                "rel_field_name" => "iReportedBy",
                "join_type" => "left",
                "extra_condition" => ""
            ),
            array(
                "table_name" => "users",
                "table_alias" => "uo",
                "field_name" => "iUserId",
                "rel_table_name" => "user_report",
                "rel_table_alias" => "ur",
                "rel_field_name" => "iReportedOn",
                "join_type" => "left",
                "extra_condition" => ""
            )
            ,
             array(
                "table_name" => "reasons",
                "table_alias" => "r",
                "field_name" => "iReasonId",
                "rel_table_name" => "user_report",
                "rel_table_alias" => "ur",
                "rel_field_name" => "iReasonId",
                "join_type" => "left",
                "extra_condition" => ""
            )
        );
        $this->extra_cond = "";
        $this->groupby_cond = array();
        $this->having_cond = "";
        $this->orderby_cond = array();
        $this->unique_type = "OR";
        $this->unique_fields = array();
        $this->switchto_fields = array();
        $this->switchto_options = array();
        $this->default_filters = array();
        $this->global_filters = array();
        $this->search_config = array();
        $this->relation_modules = array();
        $this->deletion_modules = array();
        $this->print_rec = "No";
        $this->print_list = "No";
        $this->multi_lingual = "No";
        
        $this->rec_per_page = $this->config->item('REC_LIMIT');
    }
    
    /**
     * insert method is used to insert data records to the database table.
     * @param array $data data array for insert into table.
     * @return numeric $insert_id returns last inserted id.
     */ 
    public function insert($data = array()) 
    {
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        $this->insert_id = $insert_id;    
        return $insert_id;
    }
        
    /**
     * update method is used to update data records to the database table.
     * @param array $data data array for update into table.
     * @param string $where where is the query condition for updating.
     * @param string $alias alias is to keep aliases for query or not.
     * @param string $join join is to make joins while updating records.
     * @return boolean $res returns TRUE or FALSE.
     */
    public function update($data = array(), $where = '', $alias = "No", $join = "No")
    {
        if($alias == "Yes"){
            if($join == "Yes"){
                $join_tbls = $this->addJoinTables("NR");
            }
            if(trim($join_tbls) != ''){
                $set_cond = array();
                foreach ($data as $key => $val) {
                    $set_cond[] = $this->db->protect($key) . " = " . $this->db->escape($val);
                }
                if (is_numeric($where)) {
                    $extra_cond = " WHERE " . $this->db->protect($this->table_alias . "." . $this->primary_key) . " = " . $this->db->escape($where);
                } elseif ($where) {
                    $extra_cond = " WHERE " . $where;
                } else {
                    return FALSE;
                }
                $update_query = "UPDATE " . $this->db->protect($this->table_name) . " AS " . $this->db->protect($this->table_alias) . " " . $join_tbls . " SET " . implode(", ", $set_cond) . " " . $extra_cond;
                $res = $this->db->query($update_query);
            } else {
                if (is_numeric($where)) {
                    $this->db->where($this->table_alias . "." . $this->primary_key, $where);
                } elseif($where){
                    $this->db->where($where, FALSE, FALSE);
                } else {
                    return FALSE;
                }
                $res = $this->db->update($this->table_name . " AS " . $this->table_alias, $data);
            }
        } else {
            if (is_numeric($where)) {
                $this->db->where($this->primary_key, $where);
            } elseif($where){
                $this->db->where($where, FALSE, FALSE);
            } else {
                return FALSE;
            }
            $res = $this->db->update($this->table_name, $data);
        }
        #echo $this->db->last_query();exit;
        return $res;
    }
    
    /**
     * delete method is used to delete data records from the database table.
     * @param string $where where is the query condition for deletion.
     * @param string $alias alias is to keep aliases for query or not.
     * @param string $join join is to make joins while deleting records.
     * @return boolean $res returns TRUE or FALSE.
     */
    public function delete($where = "", $alias = "No", $join = "No")
    {
        if($this->config->item('PHYSICAL_RECORD_DELETE') && $this->physical_data_remove == 'No') {
            if($alias == "Yes"){
                if(is_array($join['joins']) && count($join['joins'])){
                    $join_tbls = '';
                    if($join['list'] == "Yes"){
                        $join_tbls = $this->addJoinTables("NR");
                    }
                    $join_tbls .= ' ' . $this->listing->addJoinTables($join['joins'], "NR");
                } elseif($join == "Yes"){
                    $join_tbls = $this->addJoinTables("NR");
                }
                $data = $this->general->getPhysicalRecordUpdate($this->table_alias);
                if(trim($join_tbls) != ''){
                    $set_cond = array();
                    foreach ($data as $key => $val) {
                        $set_cond[] = $this->db->protect($key) . " = " . $this->db->escape($val);
                    }
                    if (is_numeric($where)) {
                        $extra_cond = " WHERE " . $this->db->protect($this->table_alias . "." . $this->primary_key) . " = " . $this->db->escape($where);
                    } elseif ($where) {
                        $extra_cond = " WHERE " . $where;
                    } else {
                        return FALSE;
                    }
                    $update_query = "UPDATE " . $this->db->protect($this->table_name) . " AS " . $this->db->protect($this->table_alias) . " " . $join_tbls . " SET " . implode(", ", $set_cond) . " " . $extra_cond;
                    $res = $this->db->query($update_query);
                } else {
                    if (is_numeric($where)) {
                        $this->db->where($this->table_alias . "." . $this->primary_key, $where);
                    } elseif($where){
                        $this->db->where($where, FALSE, FALSE);
                    } else {
                        return FALSE;
                    }
                    $res = $this->db->update($this->table_name . " AS " . $this->table_alias, $data);
                }
            } else {
                if (is_numeric($where)) {
                    $this->db->where($this->primary_key, $where);
                } elseif($where){
                    $this->db->where($where, FALSE, FALSE);
                } else {
                    return FALSE;
                }
                $data = $this->general->getPhysicalRecordUpdate();
                $res = $this->db->update($this->table_name, $data);
            }
        } else {
            if($alias == "Yes"){
                $del_query = "DELETE ".$this->db->protect($this->table_alias) . ".* FROM ".$this->db->protect($this->table_name)." AS ".$this->db->protect($this->table_alias);
                if(is_array($join['joins']) && count($join['joins'])){
                    if($join['list'] == "Yes"){
                        $del_query .= $this->addJoinTables("NR");
                    }
                    $del_query .= ' ' . $this->listing->addJoinTables($join['joins'], "NR");
                } elseif($join == "Yes"){
                    $del_query .= $this->addJoinTables("NR");
                }
                if (is_numeric($where)) {
                    $del_query .= " WHERE " . $this->db->protect($this->table_alias) . "." . $this->db->protect($this->primary_key) . " = " . $this->db->escape($where);
                } elseif($where){
                    $del_query .= " WHERE " . $where;
                } else {
                    return FALSE;
                }
                $res = $this->db->query($del_query);
            } else {
                if (is_numeric($where)) {
                    $this->db->where($this->primary_key, $where);
                } elseif($where){
                    $this->db->where($where, FALSE, FALSE);
                } else {
                    return FALSE;
                }
                $res = $this->db->delete($this->table_name);
            }
        }
        #echo $this->db->last_query();exit;
        return $res;
    }
    
    /**
     * getData method is used to get data records for this module.
     * @param string $extra_cond extra_cond is the query condition for getting filtered data.
     * @param string $fields fields are either array or string.
     * @param string $order_by order_by is to append order by condition.
     * @param string $group_by group_by is to append group by condition.
     * @param string $limit limit is to append limit condition.
     * @param string $join join is to make joins with relation tables.
     * @param boolean $having_cond having cond is the query condition for getting conditional data.
     * @param boolean $list list is to differ listing fields or form fields.
     * @return array $data_arr returns data records array.
     */
    public function getData($extra_cond = "", $fields = "", $order_by = "", $group_by = "", $limit = "", $join = "No", $having_cond = '', $list = FALSE)
    {

        if(is_array($fields)){
            $this->listing->addSelectFields($fields);
        } elseif($fields != ""){
            $this->db->select($fields);
        } elseif($list == TRUE){
            $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_key);
            if($this->primary_alias != ""){
                $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_alias);
            }
        $this->db->select("concat(ub.vFirstName,\" \",ub.vLastName) AS reported_by_name");
        $this->db->select("concat(uo.vFirstName,\" \",uo.vLastName) AS reported_on_name");
        $this->db->select("ur.tReasonDescription AS description");
        $this->db->select("ur.vMessage AS message");
        $this->db->select("ur.dtCreated_at AS added_at");
        $this->db->select("r.vReason AS reason");
        
        } else {
            $this->db->select("ur.iUser_report_id AS iUser_report_id");
            $this->db->select("ur.iReportedBy AS reported_by");
            $this->db->select("ur.iReportedOn AS reported_on");
            $this->db->select("ur.tReasonDescription AS description");
            $this->db->select("ur.vMessage AS message");
            $this->db->select("ur.dtCreated_at AS added_at");
            $this->db->select("ur.iReasonId AS reason");
            $this->db->select("('view') AS sys_custom_field_1", FALSE);   
        }
        
        $this->db->from($this->table_name . " AS " . $this->table_alias);
        if(is_array($join) && is_array($join['joins']) && count($join['joins']) > 0){
            $this->listing->addJoinTables($join['joins']);
            if($join["list"] == "Yes"){
                $this->addJoinTables("AR");
            }
        } else {
            if($join == "Yes"){
                $this->addJoinTables("AR");
            }
        }
        
        if (is_array($extra_cond) && count($extra_cond) > 0) {
            $this->listing->addWhereFields($extra_cond);
        } elseif(is_numeric($extra_cond)) {
            $this->db->where($this->table_alias . "." . $this->primary_key, intval($extra_cond));
        } elseif($extra_cond){
            $this->db->where($extra_cond, FALSE, FALSE);
        }
        $this->general->getPhysicalRecordWhere($this->table_name,$this->table_alias,"AR");
        
        if($group_by != ""){
            $this->db->group_by($group_by);
        }
        
        if ($having_cond != "") {
            $this->db->having($having_cond, FALSE, FALSE);
        }
        
        if ($order_by != "") {
            $this->db->order_by($order_by);
        }
        
        if ($limit != "") {
            if(is_numeric($limit)){
                $this->db->limit($limit);
            } else {
                list($offset, $limit) = explode(",", $limit);
                $this->db->limit($offset, $limit);
            }
        }
        $data_obj = $this->db->get();
        $data_arr = is_object($data_obj) ? $data_obj->result_array() : array();
        #echo $this->db->last_query();exit;
        return $data_arr;
    }
    
    /**
     * getListingData method is used to get grid listing data records for this module.
     * @param array $config_arr config_arr for grid listing settigs.
     * @return array $listing_data returns data records array for grid.
     */
    public function getListingData($config_arr = array())
    {
        $page = $config_arr['page'];
        $rows = $config_arr['rows'];
        $sidx = $config_arr['sidx'];
        $sord = $config_arr['sord'];
        $sdef = $config_arr['sdef'];
        $filters = $config_arr['filters'];
            
        $extra_cond = $config_arr['extra_cond'];
        $group_by = $config_arr['group_by'];
        $having_cond = $config_arr['having_cond'];
        $order_by = $config_arr['order_by'];
        
        $page = ($page != '') ? $page : 1;
        $rec_per_page = (intval($rows) > 0) ? intval($rows) : $this->rec_per_page;
        $extra_cond = ($extra_cond != "") ? $extra_cond : "";
        
        $this->db->start_cache();
        $this->db->from($this->table_name . " AS " . $this->table_alias);
        $this->addJoinTables("AR");
        if ($extra_cond != "") {
            $this->db->where($extra_cond, FALSE, FALSE);
        }
        $this->general->getPhysicalRecordWhere($this->table_name,$this->table_alias,"AR");
        if (is_array($group_by) && count($group_by) > 0) {
            $this->db->group_by($group_by);
        }
        if ($having_cond != "") {
            $this->db->having($having_cond, FALSE, FALSE);
        }
        $filter_config = array();
        $filter_config['module_config'] = $config_arr['module_config'];
        $filter_config['list_config'] = $config_arr['list_config'];
        $filter_config['form_config'] = $config_arr['form_config'];
        $filter_config['dropdown_arr'] = $config_arr['dropdown_arr'];
        $filter_config['search_config'] = $this->search_config;
        $filter_config['global_filters'] = $this->global_filters;
        $filter_config['table_name'] = $this->table_name;
        $filter_config['table_alias'] = $this->table_alias;
        $filter_config['primary_key'] = $this->primary_key;
        $filter_config['grid_fields'] = $this->grid_fields;
        
        $filter_main = $this->filter->applyFilter($filters, $filter_config, "Select");
        $filter_left = $this->filter->applyLeftFilter($filters, $filter_config, "Select");
        $filter_range = $this->filter->applyRangeFilter($filters, $filter_config, "Select");
        if($filter_main != ""){
            $this->db->where("(" . $filter_main . ")", FALSE, FALSE);
        }
        if($filter_left != ""){
            $this->db->where("(" . $filter_left . ")", FALSE, FALSE);
        }
        if($filter_range != ""){
            $this->db->where("(" . $filter_range . ")", FALSE, FALSE);
        }
        
        $this->db->stop_cache();
        if ((is_array($group_by) && count($group_by) > 0) || trim($having_cond) != "") {
            $total_records_arr = $this->db->get();
            $total_records = is_object($total_records_arr) ? $total_records_arr->num_rows() : 0;
        } else {
            $total_records = $this->db->count_all_results();
        }
        $total_pages = $this->listing->getTotalPages($total_records, $rec_per_page);
        
        
        $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_key);
        if($this->primary_alias != ""){
            $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_alias);
        }
        $this->db->select("concat(ub.vFirstName,\" \",ub.vLastName) AS reported_by_name");
        $this->db->select("concat(uo.vFirstName,\" \",uo.vLastName) AS reported_on_name");
        $this->db->select("ur.tReasonDescription AS description");
        $this->db->select("ur.vMessage AS message");
        $this->db->select("ur.dtCreated_at AS added_at");
        $this->db->select("r.vReason AS reason");
        $this->db->select("('view') AS sys_custom_field_1", FALSE);
        if($sdef == "Yes" && is_array($order_by) && count($order_by) > 0){
            foreach($order_by as $orK => $orV){
                $sort_filed = $orV['field'];
                $sort_order = (strtolower($orV['order']) == "desc") ? "DESC" : "ASC";
                $this->db->order_by($sort_filed, $sort_order);
            }
        }
        if ($sidx != "") {
            $this->listing->addGridOrderBy($sidx, $sord, $config_arr['list_config']);
        }
        $limit_offset = $this->listing->getStartIndex($total_records, $page, $rec_per_page);
        $this->db->limit($rec_per_page, $limit_offset);
        $return_data_obj = $this->db->get();
        #echo $this->db->last_query();exit;
        $return_data = is_object($return_data_obj) ? $return_data_obj->result_array() : array();
        $this->db->flush_cache();
        $listing_data = $this->listing->getDataForJqGrid($return_data, $filter_config, $page, $total_pages, $total_records);
        $this->listing_data = $return_data;
        return $listing_data;
    }
    
    /**
     * getExportData method is used to get grid export data records for this module.
     * @param array $config_arr config_arr for grid export settigs.
     * @return array $export_data returns data records array for export.
     */
    public function getExportData($config_arr = array())
    {
        $page = $config_arr['page'];
        $id = $config_arr['id'];
        $rows = $config_arr['rows'];
        $rowlimit = $config_arr['rowlimit'];
        $sidx = $config_arr['sidx'];
        $sord = $config_arr['sord'];
        $sdef = $config_arr['sdef'];
        $filters = $config_arr['filters'];
            
        $extra_cond = $config_arr['extra_cond'];
        $group_by = $config_arr['group_by'];
        $having_cond = $config_arr['having_cond'];
        $order_by = $config_arr['order_by'];
        
        $page = ($page != '') ? $page : 1;
        $extra_cond = ($extra_cond != "") ? $extra_cond : "";
        
        $this->db->from($this->table_name . " AS " . $this->table_alias);
        $this->addJoinTables("AR");
        if (is_array($id) && count($id) > 0) {
            $this->db->where_in($this->table_alias . "." . $this->primary_key, $id);
        }
        if ($extra_cond != "") {
            $this->db->where($extra_cond, FALSE, FALSE);
        }
        $this->general->getPhysicalRecordWhere($this->table_name,$this->table_alias,"AR");
        if (is_array($group_by) && count($group_by) > 0) {
            $this->db->group_by($group_by);
        }
        if ($having_cond != "") {
            $this->db->having($having_cond, FALSE, FALSE);
        }
        $filter_config = array();
        $filter_config['module_config'] = $config_arr['module_config'];
        $filter_config['list_config'] = $config_arr['list_config'];
        $filter_config['form_config'] = $config_arr['form_config'];
        $filter_config['dropdown_arr'] = $config_arr['dropdown_arr'];
        $filter_config['search_config'] = $this->search_config;
        $filter_config['global_filters'] = $this->global_filters;
        $filter_config['table_name'] = $this->table_name;
        $filter_config['table_alias'] = $this->table_alias;
        $filter_config['primary_key'] = $this->primary_key;
        
        $filter_main = $this->filter->applyFilter($filters, $filter_config, "Select");
        $filter_left = $this->filter->applyLeftFilter($filters, $filter_config, "Select");
        $filter_range = $this->filter->applyRangeFilter($filters, $filter_config, "Select");
        if($filter_main != ""){
            $this->db->where("(" . $filter_main . ")", FALSE, FALSE);
        }
        if($filter_left != ""){
            $this->db->where("(" . $filter_left . ")", FALSE, FALSE);
        }
        if($filter_range != ""){
            $this->db->where("(" . $filter_range . ")", FALSE, FALSE);
        }
        
        $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_key);
        if($this->primary_alias != ""){
            $this->db->select($this->table_alias . "." . $this->primary_key . " AS " . $this->primary_alias);
        }
        $this->db->select("concat(ub.vFirstName,\" \",ub.vLastName) AS reported_by_name");
        $this->db->select("concat(uo.vFirstName,\" \",uo.vLastName) AS reported_on_name");
        $this->db->select("ur.tReasonDescription AS description");
        $this->db->select("ur.vMessage AS message");
        $this->db->select("ur.dtCreated_at AS added_at");
        $this->db->select("r.vReason AS reason");
        $this->db->select("('view') AS sys_custom_field_1", FALSE);
        if($sdef == "Yes" && is_array($order_by) && count($order_by) > 0){
            foreach($order_by as $orK => $orV){
                $sort_filed = $orV['field'];
                $sort_order = (strtolower($orV['order']) == "desc") ? "DESC" : "ASC";
                $this->db->order_by($sort_filed, $sort_order);
            }
        }
        if ($sidx != "") {
            $this->listing->addGridOrderBy($sidx, $sord, $config_arr['list_config']);
        }
        if ($rowlimit != "") {
            $offset = $rowlimit;
            $limit = ($rowlimit * $page - $rowlimit);
            $this->db->limit($offset, $limit);
        }
        $export_data_obj = $this->db->get();
        $export_data = is_object($export_data_obj) ? $export_data_obj->result_array() : array();
        #echo $this->db->last_query();
        return $export_data;
    }
    /**
     * addJoinTables method is used to make relation tables joins with main table.
     * @param string $type type is to get active record or join string.
     * @param boolean $allow_tables allow_table is to restrict some set of tables.
     * @return string $ret_joins returns relation tables join string.
     */
    public function addJoinTables($type = 'AR', $allow_tables = FALSE)
    {
        $join_tables = $this->join_tables;
        
        if(!is_array($join_tables) || count($join_tables) == 0){
            return '';
        }
        $ret_joins = $this->listing->addJoinTables($join_tables, $type, $allow_tables);
        return $ret_joins;
    }
    
    /**
     * getListConfiguration method is used to get listing configuration array.
     * @param string $name name is to get specific field configuration.
     * @return array $config_arr returns listing configuration array.
     */
    public function getListConfiguration($name = "")
    {
        $list_config = array(
            "reported_by_name" => array(
                "name" => "reported_by_name",
                "table_name" => "users",
                "table_alias" => "ub",
                "field_name" => "vFirstName",
                "source_field" => "reported_by_name",
                "display_query" => "concat(ub.vFirstName,\" \",ub.vLastName)",
                "entry_type" => "Table",
                "data_type" => "",
                "show_in" => "Both",
                "type" => "dropdown",
                "align" => "left",
                "label" => "Reported By",
                "lang_code" => "REPORTS_USERS_REPORTED_BY",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORTED_BY'),
                "search" => "Yes",
                "width" => 50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "No",
                "viewedit" => "No",
                "related" => "Yes",
                "edit_link" => "Yes",
                "custom_link" => "Yes"
            ),
            "reported_on_name" => array(
                "name" => "reported_on_name",
                "table_name" => "users",
                "table_alias" => "uo",
                "field_name" => "iUserId",
                "source_field" => "reported_on_name",
                "display_query" => "concat(uo.vFirstName,\" \",uo.vLastName)",
                "entry_type" => "Table",
                "data_type" => "",
                "show_in" => "Both",
                "type" => "dropdown",
                "align" => "left",
                "label" => "Reported On",
                "lang_code" => "REPORTS_USERS_REPORTED_ON",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORTED_ON'),
                "search" => "Yes",
                "width" => 50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "No",
                "viewedit" => "No",
                "related" => "Yes",
                "edit_link" => "Yes",
                "custom_link" => "Yes",

            ),
            "description" => array(
                "name" => "description",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "tReasonDescription",
                "source_field" => "description",
                "display_query" => "ur.tReasonDescription",
                "entry_type" => "Table",
                "data_type" => "",
                "show_in" => "Both",
                "type" => "textbox",
                "align" => "left",
                "label" => "Report description",
                 "lang_code" => "REPORTS_USERS_REPORT_DESCRIPTION",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORT_DESCRIPTION'),
                "search" => "Yes",
                "width" => 50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "Yes",
                "viewedit" => "Yes",
                "edit_link" => "Yes",
            ),
            "message" => array(
                "name" => "message",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "vMessage",
                "source_field" => "message",
                "display_query" => "ur.vMessage",
                "entry_type" => "Table",
                "data_type" => "varchar",
                "show_in" => "Both",
                "type" => "textbox",
                "align" => "left",
                "label" => "Message",
                "lang_code" => "REPORTS_USERS_MESSAGE",
                "label_lang" => $this->lang->line('REPORTS_USERS_MESSAGE'),
                "search" => "Yes",
                "width" => 50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "No",
                "viewedit" => "No",
            ),
            "added_at" => array(
                "name" => "added_at",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "dtCreated_at",
                "source_field" => "added_at",
                "display_query" => "ur.dtCreated_at",
                "entry_type" => "Table",
                "data_type" => "datetime",
                "show_in" => "Both",
                "type" => "date",
                "align" => "left",
                "label" => "Reported Date",
                "lang_code" => "REPORTS_USERS_REPORTED_DATE",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORTED_DATE'),
                "search" => "Yes",
                "width" => 50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "No",
                "viewedit" => "No",
                "format" => $this->general->getAdminPHPFormats('date'),
                "php_date" => "m-d-Y"
            ),            
            "reason" => array(
                "name" => "reason",
                "table_name" => "reasons",
                "table_alias" => "r",
                "field_name" => "vReason",
                "source_field" => "reason",
                "display_query" => "r.vReason",
                "entry_type" => "Table",
                "data_type" => "varchar",
                "show_in" => "Both",
                "type" => "textbox",
                "align" => "center",
                "label" => "Reason",
                "lang_code" => "REPORTS_USERS_REASON",
                "label_lang" => $this->lang->line('REPORTS_USERS_REASON'),
                "search" => "Yes",
                "width" =>50,
                "export" => "Yes",
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "Yes",
                "viewedit" => "Yes",
            ),
            "sys_custom_field_1" => array(
                "name" => "sys_custom_field_1",
                "table_name" => "",
                "table_alias" => "",
                "field_name" => "",
                "source_field" => "",
                "display_query" => "view",
                "entry_type" => "Custom",
                "data_type" => "",
                "show_in" => "Both",
                "type" => "textbox",
                "align" => "center",
                "label" => "Edit",
                "lang_code" => "REPORTS_USERS_EDIT",
                "label_lang" => "Edit",
                "search" => "No",
                "export" => "No",
                "width" =>50,
                "sortable" => "Yes",
                "addable" => "No",
                "editable" => "No",
                "viewedit" => "No",
                "php_func" => "controller::showStatusButton",
            ),
        );
        
            $config_arr = array();
            if(is_array($name) && count($name) > 0){
                $name_cnt = count($name);
                for($i = 0;$i < $name_cnt; $i++){
                    $config_arr[$name[$i]] = $list_config[$name[$i]];
                }
            } elseif($name != "" && is_string($name)){
                $config_arr = $list_config[$name];
            } else {
                $config_arr = $list_config;
            }
            return $config_arr;
    }
    
    /**
     * getFormConfiguration method is used to get form configuration array.
     * @param string $name name is to get specific field configuration.
     * @return array $config_arr returns form configuration array.
     */
    public function getFormConfiguration($name = "")
    {
        $form_config = array(
            "reported_by" => array(
                "name" => "reported_by",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "reported_by",
                "entry_type" => "Table",
                "data_type" => "int",
                "show_input" => "Both",
                "type" => "textbox",
                "label" => "Reported By",
                "lang_code" => "REPORTS_USERS_REPORTED_BY",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORTED_BY'),               
                "custom_link" => "Yes"
            ),
            "reported_on" => array(
                "name" => "reported_on",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "reported_on",
                "entry_type" => "Table",
                "data_type" => "int",
                "show_input" => "Both",
                "type" => "textbox",
                "label" => "Reported On",
                "lang_code" => "REPORTS_USERS_REPORTED_ON",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORTED_ON'),               
                "custom_link" => "Yes"
            ),
            "description" => array(
                "name" => "description",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "description",
                "entry_type" => "Table",
                "data_type" => "int",
                "show_input" => "Both",
                "type" => "textbox",
                "label" => "description",
                "lang_code" => "REPORTS_USERS_REPORT_DESCRIPTION",
                "label_lang" => $this->lang->line('REPORTS_USERS_REPORT_DESCRIPTION'),
            ),
            "message" => array(
                "name" => "message",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "message",
                "entry_type" => "Table",
                "data_type" => "varchar",
                "show_input" => "Both",
                "type" => "textbox",
                "label" => "Message",
                "lang_code" => "REPORTS_USERS_MESSAGE",
                "label_lang" => $this->lang->line('REPORTS_USERS_MESSAGE')
            ),
            "reason" => array(
                "name" => "reason",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "reason",
                "entry_type" => "Table",
                "data_type" => "int",
                "show_input" => "Both",
                "type" => "textbox",
                "label" => "reason",
                "lang_code" => "REPORTS_USERS_REASON",
                "label_lang" => $this->lang->line('REPORTS_USERS_REASON'),
            ),
            "added_at" => array(
                "name" => "added_at",
                "table_name" => "user_report",
                "table_alias" => "ur",
                "field_name" => "added_at",
                "entry_type" => "Table",
                "data_type" => "datetime",
                "show_input" => "Hidden",
                "type" => "date",
                "label" => "Added At",
                "lang_code" => "REPORTS_USERS_ADDED_AT",
                "label_lang" => $this->lang->line('REPORTS_USERS_ADDED_AT'),
                "default" => $this->filter->getDefaultValue("added_at",
                "MySQL",
                "NOW()"),
                "dfapply" => "forceApply",
                "format" => 'Y-m-d',
            ),
        );
        
            $config_arr = array();
            if(is_array($name) && count($name) > 0){
                $name_cnt = count($name);
                for($i = 0;$i < $name_cnt; $i++){
                    $config_arr[$name[$i]] = $form_config[$name[$i]];
                }
            } elseif($name != "" && is_string($name)){
                $config_arr = $form_config[$name];
            } else {
                $config_arr = $form_config;
            }
            return $config_arr;
    }

    /**
     * checkRecordExists method is used to check duplication of records.
     * @param array $field_arr field_arr is having fields to check.
     * @param array $field_val field_val is having values of respective fields.
     * @param numeric $id id is to avoid current records.
     * @param string $mode mode is having either Add or Update.
     * @param string $con con is having either AND or OR.
     * @return boolean $exists returns either TRUE of FALSE.
     */
    public function checkRecordExists($field_arr = array(), $field_val = array(), $id = '', $mode = '', $con = 'AND')
    {
        $exists = FALSE;
        if(!is_array($field_arr) || count($field_arr) == 0){
            return $exists;
        }
        foreach((array)$field_arr as $key => $val){
            $extra_cond_arr[] = $this->db->protect($this->table_alias . "." . $field_arr[$key]) . " =  " . $this->db->escape(trim($field_val[$val]));
        }
        $extra_cond = "(" . implode(" " . $con . " ", $extra_cond_arr) . ")";
        if ($mode == "Add") {
            $data = $this->getData($extra_cond, "COUNT(*) AS tot");
            if ($data[0]['tot'] > 0) {
                $exists = TRUE;
            }
        } elseif($mode == "Update") {
            $extra_cond = $this->db->protect($this->table_alias . "." . $this->primary_key) . " <> " . $this->db->escape($id) . " AND " . $extra_cond;
            $data = $this->getData($extra_cond, "COUNT(*) AS tot");
            if ($data[0]['tot'] > 0) {
                $exists = TRUE;
            }
        }
        return $exists;
    }
    
    /**
     * getSwitchTo method is used to get switch to dropdown array.
     * @param string $extra_cond extra_cond is the query condition for getting filtered data.
     * @return array $switch_data returns data records array.
     */
    public function getSwitchTo($extra_cond = '', $type = 'records', $limit = '')
    {
        $switchto_fields = $this->switchto_fields;
        $switch_data = array();
        if(!is_array($switchto_fields) || count($switchto_fields) == 0){
            if($type == "count"){
                return count($switch_data);
            } else {
                return $switch_data;
            }
        }
        $fields_arr = array();
        $fields_arr[] = array("field" => $this->table_alias . "." . $this->primary_key . " AS id");
        $fields_arr[] = array("field" => $this->db->concat($switchto_fields) . " AS val", "escape" => TRUE);
        if(is_array($this->switchto_options) && count($this->switchto_options) > 0){
            foreach($this->switchto_options as $option){
                $fields_arr[] = array(
                    "field" => $option,
                    "escape" => TRUE,
                );
            }
        }
        if(trim($this->extra_cond) != ""){
            $extra_cond = (trim($extra_cond) != "") ? $extra_cond." AND ".$this->extra_cond : $this->extra_cond;
        }
        $switch_data = $this->getData($extra_cond, $fields_arr, "val ASC", "",$limit, "Yes");
        #echo $this->db->last_query();
        if($type == "count"){
            return count($switch_data);
        } else {
            return $switch_data;
        }
    } 
    
}
?>
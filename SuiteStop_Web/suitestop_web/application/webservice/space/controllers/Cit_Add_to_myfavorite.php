<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Description of Add to my favorite Extended Controller
 *
 * @module Extended Add to my favorite
 *
 * @class Cit_Add_to_myfavorite.php
 *
 * @path application\webservice\space\controllers\Cit_Add_to_myfavorite.php
 *
 * @author Suresh Nakate
 *
 * @date 06.09.2021
 */
class Cit_Add_to_myfavorite extends Add_to_myfavorite
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
     * Used to check unique Space.
     *
     * @param array $input_params  array to process loop flow.
     *
     * @return array $return_arr return unique Space status & message.
     */
    public function checkUniqueSpace($input_params = array())
    {
        $return_arr['message'] = '';
        $return_arr['status'] = '1';
        try {
            if (!empty($input_params['space_id'])) {
                $this->db->select('iSpace_id');
                $this->db->from('my_favorite');
                $this->db->where('iUser_id', $input_params['user_id']);
                $this->db->where('iSpace_id', $input_params['space_id']);
                $this->db->where('iSysRecDeleted','0');
                $space_data = $this->db->get();
                //echo $this->db->last_query(); exit();
                $space_data = is_object($space_data) ? $space_data->result_array() : array();

                $db_error = $this->db->error();
                if ($db_error['code']) {
                    throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
                }

                if ($space_data[0]['iSpace_id'] == $input_params['space_id']) {
                    $return_arr['message'] = "This space id already exist, please try using different space id.";
                    $return_arr['status'] = "0";

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
?>

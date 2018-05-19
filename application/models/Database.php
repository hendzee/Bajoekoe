<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{

    public function create_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function get_data($table)
    {
        $get_data = $this->db->get($table);

        return $get_data->result_array();
    }

    public function all_query($query)
    {
        $get_data = $this->db->query($query);

        return $get_data->result_array();
    }

    public function create_id($table)
    {
        $preword = '';
        $code_item = rand(120, 4050);
        $get_id = '';
        $get_data = array();
        $id = '';

        switch ($table) {
            case 'order_list':
                $preword = 'order_00';
                $id = 'id_order';
                break;

            case 'customer_member':
                $preword = 'mem_00';
                $id = 'id_customer';
                break;

            default:

                break;
        }

        do {
            $get_id = $preword . $code_item;
            $query = "SELECT * FROM $table WHERE $id = '$get_id'";
            $get_data = $this->all_query($query);

            if (count($get_data) < 1) {
                break;
            }

            $code_item = rand(120, 920);
        } while (true);

        return $get_id;
    }

}

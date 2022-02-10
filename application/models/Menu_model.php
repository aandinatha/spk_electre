<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.* , `user_menu`.`menu`
                  FROM   `user_sub_menu` JOIN `user_menu`
                  ON     `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                  
                ";
        return $this->db->query($query)->result_array();
    }

    public function getmenu($id)
    {
        $where = array(
            'id' => $id
        );

        $query = $this->db->get_where('user_menu', $where);
        return $query->row();
    }

    public function editmenu($id)
    {
        $where = array('id' => $id);
        $data = array(

            'menu' => $this->input->post('menu'),

        );
        $this->db->where($where);
        $this->db->update('user_menu', $data);
    }

    public function getsmenu($id)
    {
        $where = array(
            'id' => $id
        );

        $query = $this->db->get_where('user_sub_menu', $where);
        return $query->row();
    }

    public function editsubmenu($id)
    {
        $where = array('id' => $id);
        $data = array(
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        );
        $this->db->where($where);
        $this->db->update('user_sub_menu', $data);
    }
}

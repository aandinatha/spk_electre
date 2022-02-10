<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    //Admin Function
    public function countAdmin()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id) as jumlah_admin FROM user 
        WHERE role_id ='1'");
        return $query->row();
    }

    public function countUser()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id) as jumlah_user FROM user 
        WHERE role_id ='2'");
        return $query->row();
    }

    public function relasi()
    {
        $query = $this->db->query("SELECT * FROM user join user_role on user_role.id = user.id  ORDER BY user.id");
        return $query->result();
    }


    public function getuser($id)

    {
        $where = array(
            'id' => $id
        );

        $query = $this->db->get_where('user', $where);
        return $query->row_array();
    }

    public function createUser()
    {
        // date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        // $now = date('Y-m-d');

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'image' => 'default.jpg',
            'role_id' =>  htmlspecialchars($this->input->post('role_id', true)),
            'is_active' => 1,
            'date' => time()
        ];
        $this->db->insert('user', $data);
    }

    public function updateUser($id)
    {
        // date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        // $now = date('Y-m-d');

        $where = array(
            'id' => $id
        );

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'image' => 'default.jpg',
            'role_id' =>  htmlspecialchars($this->input->post('role_id', true)),
            'is_active' => 1,
            'date' => time()
        ];

        $this->db->update('user', $data, $where);
    }

    public function deleteuser($id)
    {
        $where = array(
            'id' => $id
        );

        $this->db->delete('user', $where);
    }
}

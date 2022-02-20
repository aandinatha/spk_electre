<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswa";
    public $id;
    public $nama;
    public $email;
    public $nim;
    public $jurusan;
    public $kampus;
    public $divisi;
    public $judul;
    public $no;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],
            [
                'field' => 'nim',
                'label' => 'nim',
                'rules' => 'required'
            ],
            [
                'field' => 'jurusan',
                'label' => 'jurusan',
                'rules' => 'required'
            ],
            [
                'field' => 'kampus',
                'label' => 'kampus',
                'rules' => 'required'
            ],
            [
                'field' => 'divisi',
                'label' => 'divisi',
                'rules' => 'required'
            ],
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ],
            [
                'field' => 'no',
                'label' => 'no',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ]

        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        //$this->id = uniqid();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->nim = $post["nim"];
        $this->jurusan = $post["jurusan"];
        $this->kampus = $post["kampus"];
        $this->divisi = $post["divisi"];
        $this->judul = $post["judul"];
        $this->no = $post["no"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->nim = $post["nim"];
        $this->jurusan = $post["jurusan"];
        $this->kampus = $post["kampus"];
        $this->divisi = $post["divisi"];
        $this->judul = $post["judul"];
        $this->no = $post["no"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function getm($id)

    {
        $where = array(
            'id' => $id
        );

        $query = $this->db->get_where('mahasiswa', $where);
        return $query->row_array();
    }
}

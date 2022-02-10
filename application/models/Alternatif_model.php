<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    // mengambil data alternatif
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM alternatif ORDER BY id_alternatif");
        return $query->result_array();
    }


    //tambah data alternatif
    public function createAlternatif()
    {
        $data = array(
            'id_alternatif' => $this->input->post('id_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
            // 'email' => $this->input->post('email'),
            // 'kampus' => $this->input->post('kampus'),
            // 'jurusan' => $this->input->post('jurusan'),
            // 'jengkel' => $this->input->post('jengkel'),
            // 'no_hp' => $this->input->post('no_hp'),
            // 'alamat' => $this->input->post('alamat'),
        );
        $this->db->insert('alternatif', $data);
    }

    public function createNilai($id)
    {
        $data = array(
            'id_kriteria' => $id,
            'id_alternatif' => $this->input->post('id_alternatif'),
            'nilai' => $this->input->post('ID-' . $id),
        );
        $this->db->insert('evaluasi', $data);
    }

    //mengambil data kriteria
    public function getListForm()
    {
        $query = $this->db->query("SELECT  k.id_kriteria, k.nama_kriteria FROM kriteria k  ORDER BY id_kriteria");
        return $query->result();
    }

    //mengambil kode alternatif
    public function getselectedalternatif($id)
    {
        $where = array(
            'id_alternatif' => $id
        );

        $query = $this->db->get_where('alternatif', $where);
        // var_dump($id);die;
        return $query->row();
    }


    // update alternatif
    public function updateAlternatif($id)
    {
        $where = array('id_alternatif' => $id);
        $data = array(
            'id_alternatif' => $this->input->post('id_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
        );
        $this->db->where($where);
        $this->db->update('alternatif', $data);
    }

    public function countAlternatif()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id_alternatif) as jumlah_alternatif FROM alternatif");
        return $query->row();
    }


    //membuat id otomatis
    public function getKodeOto($field, $table, $prefix, $length)
    {
        global $db;
        $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");

        $var = $var->row_array()[$field];

        if ($var) {
            return $prefix . substr(str_repeat('0', $length) . (substr($var, -$length) + 1), -$length);
        } else {
            return $prefix . str_repeat('0', $length - 1) . 1;
        }
    }


    //menghapus data alternatif
    private function deleteRelasi($id)
    {
        $where = array(
            'id_alternatif' => $id
        );
        $this->db->delete('evaluasi', $where);
    }

    public function deleteAlternatif($id)
    {
        $this->deleteRelasi($id);
        $where = array(
            'id_alternatif' => $id
        );
        $this->db->delete('alternatif', $where);
    }
}

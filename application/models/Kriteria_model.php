<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Kriteria_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //Fungsi Otomatis CRUD Relasi//
    private function insertIntoRelasi($id)
    {
        $this->db->query("INSERT INTO evaluasi(id_alternatif, id_kriteria, nilai) 
        SELECT id_alternatif, '$id', 0  FROM alternatif");
        return;
    }


    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM kriteria ORDER BY id_kriteria");
        return $query->result();
    }

    //Fungsi Kriteria//
    // public function kriteria()
    // {
    //     $query = $this->db->query("SELECT * FROM kriteria ORDER BY id_kriteria");
    //     return $query->result();
    // }

    public function createkriteria()
    {

        $data = array(
            'id_kriteria' => $this->input->post('id_kriteria'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'bobot' => $this->input->post('bobot'),
        );

        $this->db->insert('kriteria', $data);
        $this->insertIntoRelasi($this->input->post('id_kriteria'));
    }

    public function getselectedkriteria($id)
    {
        $where = array(
            'id_kriteria' => $id
        );

        $query = $this->db->get_where('kriteria', $where);
        return $query->row();
    }

    public function updatekriteria($id)
    {
        $where = array('id_kriteria' => $id);
        $data = array(
            'id_kriteria' => $this->input->post('id_kriteria'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'bobot' => $this->input->post('bobot'),
        );
        $this->db->where($where);
        $this->db->update('kriteria', $data);
    }

    private function deleteRelasi($id)
    {
        $where = array(
            'id_kriteria' => $id
        );
        $this->db->delete('evaluasi', $where);
    }


    public function deletekriteria($id)
    {
        $this->deleteRelasi($id);
        $where = array(
            'id_kriteria' => $id
        );
        $this->db->delete('kriteria', $where);
    }

    public function countKriteria()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id_kriteria) as jumlah_kriteria FROM kriteria");
        return $query->row();
    }

    public function getkodeOto($field, $table, $prefix, $length)
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
}

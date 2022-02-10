<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // public function getNilai()
    // {
    //     $query = $this->db->query("SELECT a.id_alternatif , b.id_kriteria, c.nilai
    //     FROM evaluasi c
    //     INNER JOIN alternatif a
    //       ON c.id_alternatif=a.id_alternatif
    //     INNER JOIN kriteria b
    //       ON b.id_kriteria=c.id_kriteria
    //     ORDER BY a.id_alternatif, b.id_kriteria");
    //     $rows = $query->result();

    //     $data = array();
    //     foreach ($rows as $row) {
    //         $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai;
    //     }

    //     return $data;
    // }

    // public function getListParameter()
    // {
    //     $query = $this->db->query("SELECT a.nama_kriteria, b.nama_parameter FROM kriteria as a INNER JOIN parameter as b ON a.id_kriteria = b.kode_kriteria");
    //     return $query->result();
    // }

    // public function getAlternatif()
    // {
    //     $this->db->order_by("id_alternatif", "ASC");
    //     $query = $this->db->get("alternatif");

    //     return $query->result();
    // }

    // public function getCountKriteria()
    // {
    //     $query = $this->db->query("SELECT COUNT(*) as jumlah FROM kriteria");
    //     return $query->row();
    // }

    // public function getKriteria()
    // {
    //     $query = $this->db->query("SELECT * FROM kriteria ORDER BY id_kriteria");
    //     return $query->result();
    // }

    // public function getListForm($id)
    // {
    //     //    $query = $this->db->query("SELECT ra.ID, k.kode_kriteria, k.nama_kriteria,ra.nilai FROM relasi ra INNER JOIN tbl_kriteria k ON k.kode_kriteria=ra.kode_kriteria  WHERE kode_alternatif='$id' ORDER BY kode_kriteria");

    //     return $this->db->query('SELECT a.ID, a.kode_kriteria, a.nilai ,b.nama_parameter,c.nama_kriteria FROM tbl_relasi as a INNER JOIN tbl_parameter as b on (a.kode_kriteria = b.kode_kriteria and a.nilai= b.nilai_parameter), tbl_kriteria as c WHERE kode_alternatif= "' . $id . '" and c.kode_kriteria = a.kode_kriteria ORDER BY kode_kriteria')->result();
    // }

    // public function getSelectedAlternatif($id)
    // {
    //     $query = $this->db->query("SELECT * FROM tbl_alternatif WHERE kode_alternatif='$id'");
    //     return $query->row();
    // }

    // public function updateNilai($id, $kriteria, $value)
    // {
    //     //var_dump($id.' == '.$kriteria.'===='.$value);die;


    //     $where = array('kode_alternatif' => $id, 'kode_kriteria' => $kriteria);
    //     $data = array(
    //         'nilai' => $value,
    //     );
    //     $this->db->where($where);
    //     $this->db->update('tbl_relasi', $data);
    // }



    public function getALT()
    {
        $query = $this->db->query("SELECT id_alternatif, nama_alternatif FROM alternatif ORDER BY id_alternatif");
        return $query->result();
    }
    public function getKRT()
    {
        $query = $this->db->query("SELECT id_kriteria, nama_kriteria, bobot FROM kriteria ORDER BY id_kriteria");
        return $query->result();
    }
    public function getdata()
    {
        $rows =  $this->db->query("SELECT a.id_alternatif, k.id_kriteria, rl.nilai FROM alternatif a  
        INNER JOIN evaluasi rl ON rl.id_alternatif=a.id_alternatif 
        INNER JOIN kriteria k ON k.id_kriteria=rl.id_kriteria 
        ORDER BY a.id_alternatif, k.id_kriteria")->result();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai;
        }
        return $data;
    }

    public function getJmlBobot()
    {
        $query = $this->db->query("SELECT SUM(bobot) as jumlah_bobot FROM kriteria");
        return $query->row();
    }
}

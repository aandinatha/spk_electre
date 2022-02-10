<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Nilai_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getNilai()
    {
        $query = $this->db->query("SELECT a.id_alternatif, k.id_kriteria, rl.nilai
          FROM evaluasi rl
          INNER JOIN alternatif a
            ON rl.id_alternatif=a.id_alternatif
          INNER JOIN kriteria k
            ON k.id_kriteria=rl.id_kriteria
          ORDER BY a.id_alternatif, k.id_kriteria");
        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai;
        }

        return $data;
    }

    // public function getListParameter()
    // {
    //     $query = $this->db->query("SELECT a.nama_kriteria, b.nama_parameter FROM kriteria as a INNER JOIN tbl_parameter as b ON a.id_kriteria = b.id_kriteria");
    //     return $query->result();
    // }

    public function getAlternatif()
    {
        $this->db->order_by("id_alternatif", "ASC");
        $query = $this->db->get("alternatif");

        return $query->result();
    }

    public function getCountKriteria()
    {
        $query = $this->db->query("SELECT COUNT(*) as jumlah FROM kriteria");
        return $query->row();
    }

    public function getKriteria()
    {
        $query = $this->db->query("SELECT * FROM kriteria ORDER BY id_kriteria");
        return $query->result();
    }

    public function getListForm($id)
    {
        //    $query = $this->db->query("SELECT ra.ID, k.id_kriteria, k.nama_kriteria,ra.nilai FROM evaluasi ra INNER JOIN kriteria k ON k.id_kriteria=ra.id_kriteria  WHERE id_alternatif='$id' ORDER BY id_kriteria");

        return $this->db->query('SELECT a.ID, a.id_kriteria, a.nilai ,c.nama_kriteria FROM evaluasi  a 
        INNER JOIN kriteria  c WHERE id_alternatif= "' . $id . '" and c.id_kriteria = a.id_kriteria ORDER BY id_kriteria')->result();
    }

    public function getSelectedAlternatif($id)
    {
        $query = $this->db->query("SELECT * FROM alternatif WHERE id_alternatif='$id'");
        return $query->row();
    }

    public function updateNilai($id, $kriteria, $value)
    {
        //var_dump($id.' == '.$kriteria.'===='.$value);die;


        $where = array('id_alternatif' => $id, 'id_kriteria' => $kriteria);
        $data = array(
            'nilai' => $value,
        );
        $this->db->where($where);
        $this->db->update('evaluasi', $data);
    }
}

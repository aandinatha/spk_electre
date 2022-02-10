<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_check();
        $this->load->model('Perhitungan_model', 'perhitungan');
        $this->load->helper('electre_class');
    }

    public function index()
    {
        $data['title'] = 'Perhitungan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $rows = $this->perhitungan->getALT();
        foreach ($rows as $row) {
            $ALT[$row->id_alternatif] = $row->nama_alternatif;
        }
        $data['alt'] = $ALT;

        $rows = $this->perhitungan->getKRT();
        foreach ($rows as $row) {
            $KRT[$row->id_kriteria] = array(
                'nama_kriteria' => $row->nama_kriteria,
                'bobot' => $row->bobot
            );
        }
        $data['krt'] = $KRT;

        foreach ($data['krt'] as $key => $val) {
            $bobot[$key] = $val['bobot'];
        }


        $data['olah'] = $this->perhitungan->getdata();
        $data['electre'] = new Electre($data['olah'], $bobot);
        $data['rank'] = $this->get_rank($data['electre']->total);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Perhitungan/index', $data);
        $this->load->view('templates/footer');
    }


    public function nilaiAkhir()
    {

        $data['title'] = 'Nilai Akhir';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $rows = $this->perhitungan->getALT();
        foreach ($rows as $row) {
            $ALT[$row->id_alternatif] = $row->nama_alternatif;
        }
        $data['alt'] = $ALT;

        $rows = $this->perhitungan->getKRT();
        foreach ($rows as $row) {
            $KRT[$row->id_kriteria] = array(
                'nama_kriteria' => $row->nama_kriteria,
                'bobot' => $row->bobot
            );
        }
        $data['krt'] = $KRT;

        foreach ($data['krt'] as $key => $val) {
            $bobot[$key] = $val['bobot'];
        }

        $data['olah'] = $this->perhitungan->getdata();
        $data['electre'] = new Electre($data['olah'], $bobot);
        $data['rank'] = $this->get_rank($data['electre']->total);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perhitungan/nilaiakhir', $data);
        $this->load->view('templates/footer');
    }

    function get_rank($array)
    {
        $data = $array;
        arsort($data);
        $no = 1;
        $new = array();
        foreach ($data as $key => $value) {
            $new[$key] = $no++;
        }
        return $new;
    }
}

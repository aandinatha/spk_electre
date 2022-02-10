<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_model', 'nilai');
        // if (!$this->session->userdata['login']) {
        //     // redirect(base_url('login'));
        //     //notify('Session Anda Sudah Habis, Silakan Login Ulang', 'Warning', 'login');
        // }
    }

    public function index()
    {
        $data['title'] = 'Data Nilai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['count'] = $this->nilai->getCountKriteria()->jumlah;
        $data['alternatif'] = $this->nilai->getAlternatif();
        $data['kriteria'] = $this->nilai->getKriteria();
        $data['nilai'] = $this->nilai->getNilai();
        // $data['view_name'] = "nilai/nilai";
        // $data['message'] = $this->session->flashdata('msg');
        $data['kriteria'] = $this->nilai->getkriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('templates/footer');
    }

    public function updateNilai($id)
    {
        $data['title'] = 'Data Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["form"] = $this->nilai->getListForm($id);
        if ($this->input->post('updaterelasi')) {
            foreach ($data["form"] as $item) {
                // $k = str_replace('ID-', '', $item->id_kriteria);
                $this->nilai->updateNilai(
                    $id,
                    $item->id_kriteria,
                    $this->input->post('ID-' . $item->id_kriteria)
                );
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
            redirect('nilai');
        } elseif ($this->input->post('back')) {
            redirect('nilai');
        } else {
            $data["selectalt"] = $this->nilai->getSelectedAlternatif($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilai/updatenilai', $data);
            $this->load->view('templates/footer');
        }
    }
}

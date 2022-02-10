<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_check();
        $this->load->model('Kriteria_model', 'kriteria');
    }

    public function index()
    {
        $data['title'] = 'Data Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["kriteria"] = $this->kriteria->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }

    public function createKriteria()
    {
        $data['title'] = 'Create Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('tambahkriteria')) {
            if (!is_numeric($this->input->post('bobot'))) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gagal Memasukan Data, Bobot Harus Angka </div>');
                redirect('kriteria/createkriteria');
                // notify('Gagal Memasukan Data, Bobot Harus Angka', 'error', 'kriteria/listKriteria');
            } else {
                $this->kriteria->createkriteria();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan  </div>');
                redirect('kriteria');
                //notify('Berhasil Menambah Kriteria', 'success', 'kriteria');
            }
        } elseif ($this->input->post('back')) {
            redirect(base_url('kriteria'));
        } else {
            //$data['view_name'] = "kriteria/createkriteria";
            $data['gen'] = $this->kriteria->getKodeOto('id_kriteria', 'kriteria', 'C', 2);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kriteria/createkriteria', $data);
            $this->load->view('templates/footer');
        }
    }

    public function updateKriteria($id)
    {
        $data['title'] = 'Update Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('updatekriteria')) {
            if (!is_numeric($this->input->post('bobot'))) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gagal Memasukan Data, Bobot Harus Angka </div>');
                redirect('kriteria/updatekriteria');
                //notify('Gagal Mengubah Data, Bobot Harus Angka', 'error', 'kriteria/listKriteria');
            } else {
                $this->kriteria->updatekriteria($id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
                redirect('kriteria');
                //notify('Berhasil Mengubah Kriteria', 'success', 'kriteria');
            }
        } elseif ($this->input->post('back')) {
            redirect(base_url('kriteria'));
        } else {

            $data['select'] = $this->kriteria->getselectedkriteria($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kriteria/updatekriteria', $data);
            $this->load->view('templates/footer');
        }
    }

    public function deleteKriteria($id)
    {
        $this->kriteria->deleteKriteria($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus  </div>');
        redirect('kriteria');
        //notify('Berhasil Menghapus Kriteria', 'success', 'kriteria');
    }
}

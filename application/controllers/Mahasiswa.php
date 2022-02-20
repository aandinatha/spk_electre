<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mahasiswa"] = $this->Mahasiswa_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("mahasiswa/index", $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $Mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($Mahasiswa->rules());
        if ($validation->run()) {
            $Mahasiswa->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan  </div>');
            redirect('mahasiswa');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("Mahasiswa/createmahasiswa", $data);
        $this->load->view('templates/footer');
    }
    public function edit($id = null)
    {
        $data['title'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if (!isset($id)) redirect('Mahasiswa');
        $Mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($Mahasiswa->rules());
        if ($validation->run()) {
            $Mahasiswa->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
            redirect('mahasiswa');
        }
        $data["Mahasiswa"] = $Mahasiswa->getById($id);
        if (!$data["Mahasiswa"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("Mahasiswa/updatemahasiswa", $data);
        $this->load->view('templates/footer');
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->Mahasiswa_model->delete($id)) {
            redirect(site_url('Mahasiswa'));
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['Mahasiswa'] = $this->Mahasiswa_model->getm($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }
}

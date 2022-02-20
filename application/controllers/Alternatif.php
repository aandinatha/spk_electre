<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_check();
        $this->load->model('alternatif_model', 'alternatif');
        $this->load->model('Mahasiswa_model', 'mahasiswa');
        // $this->load->helper('electre_class');
    }

    public function index()
    {
        $data['title'] = 'Data Alternatif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["alternatif"] = $this->alternatif->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('alternatif/index', $data);
        $this->load->view('templates/footer');
    }

    public function createAlternatif()
    {
        $data['title'] = 'Data Nilai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('createalternatif')) {
            foreach ($this->input->post() as $key => $val) {
                if (strpos($key, "ID-") !== false) {
                    $k = str_replace('ID-', '', $key);
                    $this->alternatif->createNilai($k);
                }
            }
            $this->alternatif->createAlternatif();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan  </div>');
            redirect('Nilai');
        } elseif ($this->input->post('back')) {
            redirect(base_url('Nilai'));
        } else {
            $data["form"] = $this->alternatif->getListForm();
            $data["mahasiswa"] = $this->mahasiswa->getAll();
            $data['gen'] = $this->alternatif->getKodeOto('id_alternatif', 'alternatif', 'A', 2);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('alternatif/createalternatif', $data);
            $this->load->view('templates/footer');
        }
    }


    public function updateAlternatif($id)
    {
        $data['title'] = 'Update Alternatif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('updatealternatif')) {
            $this->alternatif->updateAlternatif($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
            redirect('alternatif');
            // notify('Berhasil Merubah Alternatif', 'success', 'alternatif');
        } elseif ($this->input->post('back')) {
            redirect(base_url('alternatif'));
        } else {

            $data['alt'] = $this->alternatif->getselectedalternatif($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('alternatif/updatealternatif', $data);
            $this->load->view('templates/footer');
        }
    }




    public function deleteAlternatif($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gagal Dihapus </div>');
            redirect('alternatif');
        } else {
            $this->alternatif->deleteAlternatif($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
            redirect('Nilai');
        }
    }
}

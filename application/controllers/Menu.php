<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_check();
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //panggil data dari db
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('menu_baru', 'Menu Berhasil Ditambah');
            //$this->session->setflashdata('message', 'menu berhasil ditambah');
            redirect('menu');
        }
    }

    public function editmenu($id)
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('editmenu')) {

            $this->menu->editmenu($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan  </div>');
            redirect('menu');
            //notify('Berhasil Mengubah Kriteria', 'success', 'kriteria');
        } elseif ($this->input->post('back')) {
            redirect(base_url('menu'));
        } else {

            $data['menu'] = $this->menu->getmenu($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editmenu', $data);
            $this->load->view('templates/footer');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //panggil model



        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('submenu_baru', 'SubMenu Berhasil Ditambah');
            // $this->session->set_flashdata('message', '<div role="alert" class="alert alert-success alert-dismissible ">
            // <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times">
            //     </span></button></div>');
            redirect('menu/submenu');
        }
    }

    public function editsubmenu($id)
    {

        $data['title'] = 'Edit SubMenu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('editsubmenu')) {

            $this->menu->editsubmenu($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
            redirect('menu/submenu');
            //notify('Berhasil Mengubah Kriteria', 'success', 'kriteria');
        } elseif ($this->input->post('back')) {
            redirect(base_url('menu/submenu'));
        } else {

            $data['m'] = $this->menu->getsmenu($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/footer');
        }


        // $data['title'] = 'Edit SubMenu';
        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();

        // if ($this->input->post('editsubmenu')) {

        //     $this->menu->editsubmenu($id);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah  </div>');
        //     redirect('menu/editsubmenu');
        //     //notify('Berhasil Mengubah Kriteria', 'success', 'kriteria');
        // } elseif ($this->input->post('back')) {
        //     redirect(base_url('menu/submenu'));
        // } else {
        //     $data['subMenu'] = $this->menu->getSubMenu();
        //     $data['m'] = $this->menu->getsmenu($id);

        //     $this->load->view('templates/header', $data);
        //     $this->load->view('templates/sidebar', $data);
        //     $this->load->view('templates/topbar', $data);
        //     $this->load->view('menu/editsubmenu', $data);
        //     $this->load->view('templates/footer');
        // }
    }

    public function delete_menu($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gagal Dihapus </div>');
            redirect('Menu');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('user_menu');
            $this->session->set_flashdata('menu_baru', 'SubMenu Berhasil Ditambah');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
            redirect('Menu');
        }
    }

    public function delete_submenu($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gagal Dihapus </div>');
            redirect('Menu/submenu');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
            redirect('Menu/submenu');
        }
    }
}

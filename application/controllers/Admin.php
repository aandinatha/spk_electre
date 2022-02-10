<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check();

        $this->load->model('user_model', 'user');
        $this->load->model('kriteria_model', 'kriteria');
        $this->load->model('alternatif_model', 'alternatif');
        $this->load->model('perhitungan_model', 'perhitungan');
        $this->load->helper('electre_class');
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
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
        $data['record_admin'] = $this->user->countAdmin();
        $data['record_user'] = $this->user->countUser();
        $data['record_kriteria'] = $this->kriteria->countKriteria();
        $data['record_alternatif'] = $this->alternatif->countAlternatif();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
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

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role Added! </div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_Id = $this->input->post('menuId');
        $role_Id = $this->input->post('roleId');

        $data = [
            'menu_Id' => $menu_Id,
            'role_id' => $role_Id

        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
				Access Changed!</div>');
    }

    public function delete_role($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Admin/role');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
				Data Berhasil Dihapus</div>');
            redirect('Admin/role');
        }
    }

    // public function editrole()
    // { {
    //         $data['title'] = 'Edit Role';
    //         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //         $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

    //         if ($this->form_validation->run() == false) {
    //             $this->load->view('templates/header', $data);
    //             $this->load->view('templates/sidebar', $data);
    //             $this->load->view('templates/topbar', $data);
    //             $this->load->view('user/edit', $data);
    //             $this->load->view('templates/footer');
    //         } else {
    //             $name = $this->input->post('name');
    //             $email = $this->input->post('email');

    //             //CEK JIKA ADA GAMBAR YANG DIUPLOAD
    //             $upload_image = $_FILES['image']['name'];

    //             if ($upload_image) {

    //                 $config['allowed_types'] = 'gif|jpg|png';
    //                 $config['max_size']     = '2048';
    //                 $config['upload_path'] = './assets/img/profile/';

    //                 $this->load->library('upload', $config);

    //                 if ($this->upload->do_upload('image')) {
    //                     $old_image = $data['user']['image'];
    //                     if ($old_image != 'default.jpg') {
    //                         unlink(FCPATH . 'assets/img/profile/' . $old_image);
    //                     }

    //                     $new_image = $this->upload->data('file_name');
    //                     $this->db->set('image', $new_image);
    //                 } else {
    //                     echo $this->upload->display_errors();
    //                 }
    //             }

    //             $this->db->set('name', $name);
    //             $this->db->where('email', $email);
    //             $this->db->update('user');

    //             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //         Your Profile Has Been Update!  </div>');
    //             redirect('Admin');
    //         }
    //     }
    // }

    // public function tambah_admin()
    // {
    //     $data['title'] = 'Tambah Admin';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['m'] = $this->Admin_model->getUser();

    //     $this->form_validation->set_rules('email', 'email', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/tambah_admin', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->db->insert('user', [
    //             'email' => $this->input->post('email'),
    //             'name' => $this->input->post('name'),
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'image' => 'default.jpg',
    //             'alamat' => $this->input->post('alamat'),
    //             'jenkel' => $this->input->post('jenkel'),
    //             'kampus' => $this->input->post('kampus'),
    //             'role_id' => 1,
    //             'is_active' => 1,
    //             'date_created' => time()
    //         ]);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added!</div>');
    //         redirect('admin/tambah_admin');
    //     }
    // }

    public function datauser()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datauser'] = $this->db->get('user')->result_array();
        // $this->load->model('User_model', 'user');
        // $data["dataUser"] = $this->user->getUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datauser', $data);
        $this->load->view('templates/footer');
    }

    public function detailUser($id)
    {
        $data['title'] = 'Detail User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['u'] = $this->user->getuser($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailuser', $data);
        $this->load->view('templates/footer');
    }

    public function createuser()
    {
        $data['title'] = 'Create User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Masukan Nama']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
            'is_unique' => 'Email sudah ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'password min 3 karakter',
            'required' => 'masukan password'
        ]);

        if ($this->input->post('createUser')) {
            if ($this->form_validation->run() == true) {
                $this->user->createUser();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
				Data Berhasil Disimpan!</div>');
                redirect('admin/datauser');
            } elseif ($this->form_validation->run() == false) {

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/createuser', $data);
                $this->load->view('templates/footer');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/createuser', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edituser($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Masukan Nama'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]', [
            'min_length' => 'password min 3 karakter',
        ]);

        if ($this->input->post('updateUser')) {
            if ($this->form_validation->run() == true) {
                $this->user->updateUser($id);
                // $user = $this->account_model->getUser($id);
                // $data['account'] = $this->account_model->getUpdatedUser();
                // $data_session = array(
                //     'login' => true,
                //     'id' => $data['account']->id,
                //     'email' => $data['account']->email,
                //     'name' => $data['account']->name,
                //     'level' => $data['account']->level
                // );
                // $this->session->set_userdata($data_session);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
				Data Berhasil Diubah!</div>');
                redirect('admin/datauser');
            } else if ($this->form_validation->run() == false) {
                $data['u'] = $this->user->getuser($id);
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/edituser', $data);
                $this->load->view('templates/footer');
            }
        } else {
            $data['u'] = $this->user->getuser($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edituser', $data);
            $this->load->view('templates/footer');
        }
    }

    public function deleteuser($id)
    {
        $this->user->deleteuser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
				Data Berhasil Dihapus!</div>');
        redirect('admin/datauser');
    }
}

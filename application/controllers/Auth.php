    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Auth extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index()
        {
            if ($this->session->userdata('email')) {

                redirect('user');
            }
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'login page';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            } else {
                //validasi berhasil
                $this->_login();
            }
        }

        private function _login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            // jika user ada
            if ($user) {

                //jika usernya aktif
                if ($user['is_active'] ==  1) {

                    //cek password
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin');
                        } else {
                            redirect('user');
                        }
                    } else {
                        //jika password salah

                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                        password salah</div>');
                        redirect('auth');
                    }
                } else {
                    //jika user belum aktivasi

                    // $this->session->set_flashdata('msg', 'Email Belum diaktivasi');
                    $this->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert"> 
                     Email belum diaktivasi</div>');
                    redirect('auth');
                }
            } else {

                //jika user tidak ada atau belum regitrasi  

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                        Email Belum di Registrasi</div>');
                redirect('auth');
            }
        }

        public function registration()
        {
            if ($this->session->userdata('email')) {

                redirect('user');
            }
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'This email has already registed!'
            ]);
            $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'password to short!'
            ]);
            $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Pendaftaran Akun';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/registration');
                $this->load->view('templates/auth_footer');
            } else {
                $data = [
                    'name' => htmlspecialchars($this->input->post('name')),
                    'email' => htmlspecialchars($this->input->post('email')),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 1,
                    'is_active' => 1,
                    'date' => time()
                ];
                //simpan database
                $this->db->insert('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat Pendaftaran Akun Berhasil. Silahkan Login!</div>');
                redirect('auth');
            }
        }


        public function logout()
        {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            redirect('auth');
        }

        public function blocked()
        {
            $data['title'] = 'Access Blocked';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/blocked', $data);
            $this->load->view('templates/footer');
        }
    }

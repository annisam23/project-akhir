<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function home()
    {
        $data['tittle'] = 'Temukan Apa Yang Anda Butuhkan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/home/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function home_admin()
    {
        $data['tittle'] = 'Home Fasilitas Kesehatan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-admin', $data);
        $this->load->view('admin/home/after-auth');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function home_after_auth()
    {
        $data['tittle'] = 'Home Fasilitas Kesehatan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/home/after-auth');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function categories()
    {
        $data['tittle'] = 'Semua Kategori dan Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = 'active';
        $data['list'] = '';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/categories/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function categories_after_auth()
    {
        $data['tittle'] = 'Semua Kategori dan Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = 'active';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/categories/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function list_faskes()
    {
        $data['tittle'] = 'Daftar Fasilitas Kesehatan yang Terdaftar';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = 'active';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/list_faskes/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function list_faskes_after_auth()
    {
        $data['tittle'] = 'Daftar Fasilitas Kesehatan yang Terdaftar';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = 'active';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('lfaskes');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['tittle'] = 'Masuk dan Jelajahi Keseluruhan Layanan';
            $this->load->view('layout1/v_style', $data);
            $this->load->view('layout1/v_navbar-auth');
            $this->load->view('admin/login/index');
            $this->load->view('layout1/v_footer');
            $this->load->view('layout1/v_script');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $users = $this->db->get_where('users', ['email' => $email])->row_array();

            if ($users) {
                if ($users['role'] == 'public') {
                    if (password_verify($password, $users['password'])) {
                        $data = [
                            'id' => $users['id'],
                            'username' => $users['username'],
                            'email' => $users['email'],
                            'role' => $users['role'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/home_after_auth');
                    } else {
                        redirect('admin/login');
                    }
                } elseif ($users['role'] === 'administrator') {
                    if (password_verify($password, $users['password'])) {
                        $data = [
                            'id' => $users['id'],
                            'username' => $users['username'],
                            'email' => $users['email'],
                            'role' => $users['role'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/home_admin');
                    } else {
                        redirect('admin/login');
                    }
                }
            } else {
                redirect('admin/login');
            }
        }
    }

    public function register()
    {
        $data['tittle'] = 'Daftar dan Nikmati Keseluruhan Layanan';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-auth');
        $this->load->view('admin/register/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function register_success()
    {
        $data2['tittle'] = 'Pendaftaran Success';
        $this->load->view('layout1/v_style', $data2);
        $this->load->view('admin/register_success/index');
        $this->load->view('layout1/v_script');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $data['tittle'] = 'Daftar dan Nikmati Keseluruhan Layanan';
            $this->load->view('layout1/v_style', $data);
            $this->load->view('layout1/v_navbar-auth');
            $this->load->view('admin/register/index');
            $this->load->view('layout1/v_footer');
            $this->load->view('layout1/v_script');
        } else {
            $data = [
                'username' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'created_at' => time(),
                'last_login' => time(),
                'status' => 1,
                'role' => 'public'
            ];

            $this->db->insert('users', $data);
            redirect('admin/register_success');
        }
    }

    public function details()
    {
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar', $data);
    }

    public function maps()
    {
        $data['tittle'] = 'Peta RS Graha Permata Ibu';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function dashboard_settings()
    {
        $data['tittle'] = 'Pengaturan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_sidebar-settings');
        $this->load->view('admin/dashboard_settings/index', $data);
    }
}

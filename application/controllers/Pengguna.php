<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function index()
    {
        $this->load->model('pengguna_model', 'pengguna');
        //$list_mahasiswa = 

        $data['list_pengguna'] = $this->pengguna->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pengguna/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Pengguna';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pengguna/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('pengguna_model', 'pengguna');
        $data['usr'] = $this->pengguna->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pengguna/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('pengguna_model', 'usr');
        $this->usr->delete($_id);
        redirect(base_url() . 'index.php/pengguna', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('pengguna_model', 'usr');
        $usredit = $this->usr->findById($_id);

        $data['judul'] = 'Form Update pengguna';
        $data['usredit'] = $usredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pengguna/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('pengguna_model', 'usr1');

        $_id = $this->input->post('id');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_usr1[] = $_id; //1
        $data_usr1[] = $_username; // ? 2
        $data_usr1[] = $_password; // ? 3
        $data_usr1[] = $_email; // ? 4
        $data_usr1[] = $_created_at; // ? 5
        $data_usr1[] = $_last_login; // ? 6
        $data_usr1[] = $_status; // ? 7
        $data_usr1[] = $_role; // ? 8

        if (isset($_idedit)) {
            //update data lama
            $data_usr1[] = $_idedit; // ? 8
            $this->usr1->update($data_usr1);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->usr1->save($data_usr1);
        }
        redirect(base_url() . 'index.php/pengguna/view?id=' . $_id, 'refresh');
    }
};

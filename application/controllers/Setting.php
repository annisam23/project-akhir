<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function index()
    {
        $this->load->model('setting_model', 'setting');

        $data['list_setting'] = $this->setting->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('setting/index', $data);
        $this->load->view('layout/footer');
    }
    public function edit()
    {
        $_email = $this->input->get('email');
        $this->load->model('setting_model', 'setting');

        $data['tittle'] = 'Pengaturan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_sidebar-settings');
        $this->load->view('admin/dashboard_settings/index', $data);

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_status = $this->input->post('status');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_usr1[] = $_username; // ? 2
        $data_usr1[] = $_password; // ? 3
        $data_usr1[] = $_email; // ? 4
        $data_usr1[] = $_status; // ? 7

        $data_usr1[] = $_idedit; // ? 8
        $this->usr1->update($data_usr1);
    }
};

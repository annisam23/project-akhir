<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fkomentar extends CI_Controller
{
    public function index()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }
    public function create()
    {
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/create', $data);
    }
    public function save()
    {
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('fkomentar_model', 'fkomen', $data);

        $_isi = $this->input->post('isi');
        $data_fkomen[] = $_isi; //1
        $this->fkomen->save($data_fkomen);
        redirect(base_url() . 'index.php/fkomentar', $data);
    }
};

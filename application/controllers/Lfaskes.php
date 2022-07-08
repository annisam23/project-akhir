<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lfaskes extends CI_Controller
{
    public function index()
    {
        $this->load->model('lfaskes_model', 'lfaskes');

        $data['list_lfaskes'] = $this->lfaskes->getAll();
        $data['tittle'] = 'Daftar Fasilitas Kesehatan yang Terdaftar';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('lfaskes/index', $data);
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('lfaskes_model', 'lfaskes');
        $data['lfaskes'] = $this->lfaskes->findById($_id);
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('lfaskes/view', $data);
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }
};

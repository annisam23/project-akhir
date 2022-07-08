<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        //content
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }
}

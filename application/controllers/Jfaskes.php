<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jfaskes extends CI_Controller
{
    public function index()
    {
        $this->load->model('jfaskes_model', 'jfaskes');

        $data['list_jfaskes'] = $this->jfaskes->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jfaskes/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola jfaskes';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jfaskes/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('jfaskes_model', 'jfaskes');
        $data['jfaskes'] = $this->jfaskes->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jfaskes/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('jfaskes_model', 'jfaskes');
        $this->jfaskes->delete($_id);
        redirect(base_url() . 'index.php/jfaskes', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('jfaskes_model', 'jfaskes');
        $jfaskesedit = $this->jfaskes->findById($_id);

        $data['judul'] = 'Form Update jfaskes';
        $data['jfaskesedit'] = $jfaskesedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jfaskes/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('jfaskes_model', 'jfaskes');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_jfaskes[] = $_id; //1
        $data_jfaskes[] = $_nama; // ? 2

        if (isset($_idedit)) {
            //update data lama
            $data_jfaskes[] = $_idedit; // ? 8
            $this->jfaskes->update($data_jfaskes);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->jfaskes->save($data_jfaskes);
        }
        redirect(base_url() . 'index.php/jfaskes/view?id=' . $_id, 'refresh');
    }
};

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Kecamatan_model', 'kecamatan');

        $data['list_kecamatan'] = $this->kecamatan->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Kecamatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model', 'kecamatan');
        $data['kecamatan'] = $this->kecamatan->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model', 'kecamatan');
        $this->kecamatan->delete($_id);
        redirect(base_url() . 'index.php/kecamatan', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model', 'kecamatan');
        $kecamatanedit = $this->kecamatan->findById($_id);

        $data['judul'] = 'Form Update kecamatan';
        $data['kecamatanedit'] = $kecamatanedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('kecamatan_model', 'kecamatan');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_kecamatan[] = $_id; //1
        $data_kecamatan[] = $_nama; // ? 2

        if (isset($_idedit)) {
            //update data lama
            $data_kecamatan[] = $_idedit; // ? 8
            $this->kecamatan->update($data_kecamatan);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->kecamatan->save($data_kecamatan);
        }
        redirect(base_url() . 'index.php/kecamatan/view?id=' . $_id, 'refresh');
    }
};

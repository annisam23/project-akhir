<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller
{
    public function index()
    {
        $this->load->model('komentar_model', 'kmntr');
        //$list_mahasiswa = 

        $data['list_komentar'] = $this->kmntr->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Komentar';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('komentar_model', 'komentar');
        $data['kmntr'] = $this->komentar->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('komentar_model', 'kmn');
        $this->kmn->delete($_id);
        redirect(base_url() . 'index.php/komentar', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('komentar_model', 'kmntr');
        $kmntredit = $this->kmntr->findById($_id);

        $data['judul'] = 'Form Update Komentar';
        $data['kmntredit'] = $kmntredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('komentar_model', 'kmn1');

        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_isi = $this->input->post('isi');
        $_users_id = $this->input->post('users_id');
        $_faskes_id = $this->input->post('faskes_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_kmn1[] = $_id; //1
        $data_kmn1[] = $_tanggal; // ? 2
        $data_kmn1[] = $_isi; // ? 3
        $data_kmn1[] = $_users_id; // ? 4
        $data_kmn1[] = $_faskes_id; // ? 5
        $data_kmn1[] = $_nilai_rating_id; // ? 6

        if (isset($_idedit)) {
            //update data lama
            $data_kmn1[] = $_idedit; // ? 8
            $this->kmn1->update($data_kmn1);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->kmn1->save($data_kmn1);
        }
        redirect(base_url() . 'index.php/komentar/view?id=' . $_id, 'refresh');
    }
};

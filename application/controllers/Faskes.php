<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faskes extends CI_Controller
{
    public function index()
    {
        $this->load->model('faskes_model', 'faskes');
        //$list_mahasiswa = 

        $data['list_faskes'] = $this->faskes->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola faskes';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $data['faskes'] = $this->faskes->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $this->faskes->delete($_id);
        redirect(base_url() . 'index.php/faskes', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $faskesedit = $this->faskes->findById($_id);

        $data['judul'] = 'Form Update faskes';
        $data['faskesedit'] = $faskesedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('faskes_model', 'faskes1');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_skor_rating = $this->input->post('skor_rating');
        $_foto1 = $this->input->post('foto1');
        $_foto2 = $this->input->post('foto2');
        $_foto3 = $this->input->post('foto3');
        $_kecamatan_id = $this->input->post('kecamatan_id');
        $_website = $this->input->post('website');
        $_jumlah_dokter = $this->input->post('jumlah_dokter');
        $_jumlah_pegawai = $this->input->post('jumlah_pegawai');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_faskes1[] = $_id; //1
        $data_faskes1[] = $_nama; // ? 2
        $data_faskes1[] = $_alamat; // ? 3
        $data_faskes1[] = $_latlong; // ? 4
        $data_faskes1[] = $_jenis_id; // ? 5
        $data_faskes1[] = $_deskripsi; // ? 6
        $data_faskes1[] = $_skor_rating; // ? 7
        $data_faskes1[] = $_foto1; // ? 8
        $data_faskes1[] = $_foto2; // ? 9
        $data_faskes1[] = $_foto3; // ? 10
        $data_faskes1[] = $_kecamatan_id; // ? 11
        $data_faskes1[] = $_website; // ? 12
        $data_faskes1[] = $_jumlah_dokter; // ? 13
        $data_faskes1[] = $_jumlah_pegawai; // ? 14

        if (isset($_idedit)) {
            //update data lama
            $data_faskes1[] = $_idedit; // ? 8
            $this->faskes1->update($data_faskes1);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->faskes1->save($data_faskes1);
        }
        redirect(base_url() . 'index.php/faskes/view?id=' . $_id, 'refresh');
    }
};

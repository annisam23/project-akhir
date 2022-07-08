<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{
    public function index()
    {
        $this->load->model('rating_model', 'rating');

        $data['list_rating'] = $this->rating->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('rating/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola rating';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('rating/create', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('rating_model', 'rating');
        $data['rating'] = $this->rating->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('rating/view', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('rating_model', 'rating');
        $this->rating->delete($_id);
        redirect(base_url() . 'index.php/rating', 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('rating_model', 'rating');
        $ratingedit = $this->rating->findById($_id);

        $data['judul'] = 'Form Update rating';
        $data['ratingedit'] = $ratingedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('rating/update', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('rating_model', 'rating');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_rating[] = $_id; //1
        $data_rating[] = $_nama; // ? 2

        if (isset($_idedit)) {
            //update data lama
            $data_rating[] = $_idedit; // ? 8
            $this->rating->update($data_rating);
        } else {
            //save data baru
            //panggil fungsi save di model
            $this->rating->save($data_rating);
        }
        redirect(base_url() . 'index.php/rating/view?id=' . $_id, 'refresh');
    }
};

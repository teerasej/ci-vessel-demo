<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FishingVessel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('fishingvessel_model');
        $this->load->model('country_model');
    }

    public function index()
    {
        $data['vessels'] = $this->fishingvessel_model->getAll();
        $data['title'] = "รายชื่อเรือประมง";
        // $data['hidden'] = array();
        // var_dump($data['vessels']);

        $this->load->view('templates/header', $data);
        $this->load->view('fishing_vessel/index', $data);
        $this->load->view('templates/footer');
    }

    public function new_vessel()
    {
        $data['countries'] = $this->country_model->getAll();
        $data['title'] = "เพิ่มข้อมูลเรือประมง";

        $this->load->view('templates/header', $data);
        $this->load->view('fishing_vessel/new_vessel', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // var_dump($_  POST);
        // echo($this->input->post('country'));

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 100;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('vesselName', 'vesselName', 'required', array('required' => 'อย่าลืมใส่ชื่อเรือสิคะ'));

        if ($this->form_validation->run() == false) {
            $data['countries'] = $this->country_model->getAll();

            $this->load->view('templates/header');
            $this->load->view('fishing_vessel/new_vessel', $data);
            $this->load->view('templates/footer');
        } else {
            $this->fishingvessel_model->saveVessel();
            redirect('/fishingvessel');
        }

    }

    public function remove()
    {
        $this->fishingvessel_model->remove_vessel();
        redirect('/fishingvessel');
    }

}

/* End of file FishingVessel.php */

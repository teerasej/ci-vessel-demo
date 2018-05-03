<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('fishingvessel_model');
        $this->load->model('country_model');
    }

    public function index()
    {
        $data['vessels'] = $this->fishingvessel_model->getAll();

        // var_dump($data['vessels']);

        $this->load->view('templates/header');
        $this->load->view('fishing_vessel/index', $data );
        $this->load->view('templates/footer');
    }

    public function new_vessel()
    {
        $data['countries'] = $this->country_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('fishing_vessel/new_vessel', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // var_dump($_  POST);
        // echo($this->input->post('country'));

        $this->fishingvessel_model->saveVessel();

        redirect('/fishingvessel');
        
    }

}

/* End of file FishingVessel.php */


?>
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
        echo 'json';
    }

    public function get_all()
    {
        $data = $this->fishingvessel_model->getAll();
        echo json_encode($data);
    }

    public function get_vessel_group_by_country()
    {
        $data['vessels'] = $this->fishingvessel_model->all_vessels_group_by_country();

        echo json_encode($data['vessels']);
    }

}

/* End of file FishingVessel.php */


?>
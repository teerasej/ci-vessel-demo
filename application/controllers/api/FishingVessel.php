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

    public function all_ship()
    {
        $data = $this->fishingvessel_model->getAll();
        echo json_encode($data);
    }

    public function get_vessel_group_by_country()
    {
        $data['vessels'] = $this->fishingvessel_model->all_vessels_group_by_country();

        echo json_encode($data['vessels']);
    }

    public function create() 
    {
        $input_data = json_decode(trim(file_get_contents('php://input')), true);
        $this->load->model('fishingvessel_model');
        
        // echo json_encode($input_data);
        // echo $input_data["Name"];
        // echo $input_data["Country_ID"];
        $insert_id = $this->fishingvessel_model->save_vessel_with_params($input_data["Name"], $input_data["Country_ID"]);       
        
        $data['insert_id'] = $insert_id;
        
        echo json_encode($data);
    }

}

/* End of file FishingVessel.php */


?>
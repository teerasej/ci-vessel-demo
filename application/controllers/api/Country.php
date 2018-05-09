<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

    public function index()
    {
        
    }

    public function get_all()
    {
        $this->load->model('country_model');
        $data = $this->country_model->getAll();
        echo json_encode($data);
    }

}

/* End of file Country.php */


?>
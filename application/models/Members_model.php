<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Members_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_members()
    {
        $query = $this->db->get('Users');
        return $query->result_array();
    }
    

}

/* End of file Members_model.php */

?>
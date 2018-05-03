<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Fishingvessel_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getAll()
    {
        
        $this->db->select('v.id as VesselID, v.Name as VesselName, c.Name as CountryName',false);
        $this->db->from('Vessel as v');
        $this->db->join('Country as c','v.Country_ID = c.id');

        // order by
        $this->db->order_by('v.id', 'DESC');

        // Get as defined in query
        $query = $this->db->get();

        // get all rows...
        // $query = $this->db->get('Vessel');
        
        return $query->result_array();
    }

    public function saveVessel()
    {
        $data = array(
            'Name' => $this->input->post('vesselName'),
            'Country_ID' => (int) $this->input->post('country')
        );

        return $this->db->insert('Vessel', $data);
    }

}

/* End of file Fishingvessel_model.php */


?>
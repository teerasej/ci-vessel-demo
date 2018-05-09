<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fishingvessel_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {

        $this->db->select('v.id as id, v.Name as VesselName, v.imagePath as imagePath, c.Name as CountryName', false);
        $this->db->from('Vessel as v');
        $this->db->join('Country as c', 'v.Country_ID = c.id');

        // order by
        $this->db->order_by('v.id', 'DESC');

        // Get as defined in query
        $query = $this->db->get();

        // get all rows...
        // $query = $this->db->get('Vessel');

        return $query->result_array();
    }

    public function all_vessels_group_by_country()
    {
        $this->db->select('c.Name as CountryName, COUNT(c.Name) as CountryTotal', false);
        $this->db->from('Vessel as v');
        $this->db->group_by('c.Name');
        $this->db->join('Country as c', 'v.Country_ID = c.id');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function saveVessel($uploaded_image_path = null)
    {
        if (is_null($uploaded_image_path)) {
            $data = array(
                'Name' => $this->input->post('vesselName'),
                'Country_ID' => (int) $this->input->post('country'),
            );
        } else {
            $data = array(
                'Name' => $this->input->post('vesselName'),
                'Country_ID' => (int) $this->input->post('country'),
                'imageUrl' => $uploaded_image_path,
            );
        }

        return $this->db->insert('Vessel', $data);
    }

    public function remove_vessel()
    {
        $data = array(
            'id' => $this->input->post('id'),
        );
        return $this->db->delete('Vessel', $data);
    }

}

/* End of file Fishingvessel_model.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model {

    public function login($name)
    {
        $query = $this->db->get_where('pembeli', array('name' => $name));
        $result = $query->row();
        return $result;
    }

    public function register($data)
    {
        $this->db->insert('pembeli', $data);
        return;
    }

    public function getOnePembeli($id)
    {
        $this->db->select("id, nama, ST_X(location) as latitude, ST_Y(location) as longitude");
        $this->db->from('pembeli');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
        
    }

    public function updateLocation($id, $latitude, $longitude)
    {   
        $this->db->set('location', "ST_GeomFromText('POINT($longitude $latitude)', 4326)", FALSE);
        $this->db->where('id', $id);
        $query = $this->db->update('pembeli');
    }

    public function getPenjualRadius($id, $radius)
    {
        $user = $this->getOnePembeli($id);

        $user_lat = $user['latitude'];
        $user_lng = $user['longitude'];

        $this->db->select("id, nama,
        ST_X(location) as latitude, ST_Y(location) as longitude, ST_Distance_Sphere(location, ST_GeomFromText('POINT($user_lat $user_lng)', 4326)) as jarak_meter", FALSE);

        $this->db->from('penjual');

        $this->db->having('jarak_meter <=', $radius);

        $this->db->order_by('jarak_meter', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }
}
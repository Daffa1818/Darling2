<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model {

    public function login($email)
    {
        $query = $this->db->get_where('pembeli', array('email' => $email));
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
        $point = 'POINT(' . (float) $longitude . ' ' . (float) $latitude . ')';

        $query = $this->db->query(
            'INSERT INTO users_locations (user_id, location, time_location)
            VALUES (?, ST_GeomFromText(?, 4326, \'axis-order=long-lat\'), CURRENT_TIMESTAMP)',
            array($id, $point)
        );

        return $query !== FALSE;
    }

    public function getPenjualRadius($id, $radius = 3000)
    {
        $user = $this->getOnePembeli($id);

        if (!$user) 
            {
                return [];
            }
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
      
    public function getPenjualAktif()
    {
        return $this->db
          ->select('id, store_name, description, phone')
          ->where('active_selling', 1)
          ->where('phone !=', '')
          ->where('phone !=', '0')
          ->get('users')
          ->result();
    }
}

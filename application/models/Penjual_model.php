<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual_model extends CI_Model
{
    public function get_status_jualan($id_user)
    {
        $this->db->select('active_selling');
        $this->db->from('users');
        $this->db->where('id', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function ubah_status_jualan($id_user, $status)
    {   
        $data = array(
            'active_selling' => $status
        );

        $this->db->where('id', $id_user);
        return $this->db->update('users', $data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual_model extends CI_Model
{
    public function get_status_jualan($id_user)
    {
        return $this->db
            ->select('active_selling')
            ->where('id', $id_user)
            ->get('users')
            ->row();
    }

    public function ubah_status_jualan($id_user, $status)
    {
        return $this->db
            ->where('id', $id_user)
            ->update('users', array(
                'active_selling' => $status
            ));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual_model extends CI_Model {

    public function simpan_data($data)
    {
        // Insert langsung ke tabel users
        return $this->db->insert('users', $data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual_model extends CI_Model
{
    public function get_status_jualan($id_user)
    {
        // Ditambah: store_name, template_text
        $this->db->select('active_selling, store_name, template_text');
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

    // BARU: simpan template pesan WhatsApp
    public function update_template($id_user, $template)
    {
        $this->db->where('id', $id_user);
        return $this->db->update('users', array(
            'template_text' => $template
        ));
    }
}
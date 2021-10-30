<?php

class Sepatu_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pembelian');
    }

    public function insert_data($data = null)
    {
        $this->db->insert('pembelian', $data);
    }
}

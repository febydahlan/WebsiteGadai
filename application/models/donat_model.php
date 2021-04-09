<?php
defined('BASEPATH') or exit('No direct script access allowed');

class donat_model extends CI_Model
{
    public function get_data()
    {
        $this->db->select('jumlah_pinjaman');
        $result = $this->db->form('pengajuan_gadai');
        return $result();
    }
}

?>
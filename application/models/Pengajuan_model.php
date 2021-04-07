<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    public function getDataPengajuan()
    {
        $this->db->select("*");
        $this->db->from("pengajuan_gadai");
        return $this->db->get()->result();
    }
}

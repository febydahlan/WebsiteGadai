<?php
defined('BASEPATH') or exit('No direct script access allowed');

class donat_model extends CI_Model
{
    public function donat_model()
    {
        $this->db->select();
        $this->db->select();
        return $this->db->get()->result();
    }
}

?>
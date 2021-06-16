<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api_model extends CI_Model
{
    public function getUserInfo($nama,$tanggal)
    { 
        $this->db->select('*');
        $this->db->from('pengajuan_gadai')->where('nama_nasabah', $nama);
        $this->db->where('batas_pengembalian',$tanggal);
        return $this->db->get()->result_array();
    }

    
    public function getPembayaran($id)
    {
        
        $this->db->select('*');
        $this->db->from('catatan_pembayaran')->where('id_pengajuan', $id); 
        return $this->db->get()->result_array();
    }

    public function getBeranda($id)
    { 
        $this->db->select('*');
        $this->db->from('pengajuan_gadai')->where('id', $id); 
        return $this->db->get()->result_array();
    }

    


}
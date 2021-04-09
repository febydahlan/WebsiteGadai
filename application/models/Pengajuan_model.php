<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    public function getDataPengajuan($limit, $start)
    {
        $this->db->select("*");
        return $this->db->get_where('pengajuan_gadai',['status' => 0], $limit, $start)->result();
    }

    public function tambahData($data)
    {
        $data = [
            "nama_nasabah" => $this->input->post('nama', true),
            "alamat" =>  $this->input->post('alamat', true),
            "tanggal_pinjam" => $this->input->post('tanggal', true),
            "batas_pengembalian" => $this->input->post('batas', true),
            "jumlah_peminjaman" => $this->input->post('jumlah', true),
            "nama_jaminan" => $this->input->post('jaminan', true),
            "bukti_jaminan" => $this->input->post('bukti', true)
        ];

        $this->db->insert('pengajuan_gadai', $data);
    }
    
    public function countAllData()
    {
        return $this->db->get('pengajuan_gadai')->num_rows();
    }

}

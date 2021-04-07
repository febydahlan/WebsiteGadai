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
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    public function getDataNasabah()
    {
        $this->db->select("*");
        $this->db->from('catatan_pembayaran');
        $this->db->join('pengajuan_gadai', 'pengajuan_gadai.id = catatan_pembayaran.id_pengajuan');
        return $this->db->get()->result();
    }

    public function tambahData($data)
    {
        $data = [
            "id_pengajuan" => $this->input->post('id', true),
            "tanggal_bayar" => $this->input->post('tanggal', true),
            "nominal_bayar" => $this->input->post('jumlah', true),
            "bukti_bayar" => $this->input->post('bukti', true)
        ];

        $this->db->insert('catatan_pembayaran', $data);
    }
}

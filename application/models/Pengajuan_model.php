<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    public function getDataPengajuan()
    {
        $this->db->select("*");
        $this->db->from("pengajuan_gadai");
        $this->db->order_by('tanggal_pinjam', 'ASC');
        return $this->db->get()->result();
    }
    public function getDataRiwayat()
    {
        $this->db->select("*");
        return $this->db->get_where('pengajuan_gadai', ['status' => 1])->result();
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
    public function editData()
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
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('pengajuan_gadai', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('pengajuan_gadai', ['id' => $id])->row_array();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/dashboard');
    }

    public function pengajuan()
    {
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/pengajuan');
    }

    public function riwayat()
    {
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/riwayat');
    }
    public function detailriwayatpengajuan()
    {
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/detailriwayatpengajuan');
    }
    public function catatanpembayaran()
    {

        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/catatanpembayaran');
    }
    public function riwayatpembayaran()
    {

        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/riwayatpembayaran');
    }
}

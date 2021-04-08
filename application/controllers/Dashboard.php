<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Gadai-Dashboard';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function riwayatpembayaran()
    {
        $data['title'] = 'Gadai-Riwayat';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/riwayatpembayaran');
        $this->load->view('templates/footer');
    }
    public function detailriwayatpembayaran()
    {
        $data['title'] = 'Gadai-Detail Riwayat';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailriwayatpembayaran');
        $this->load->view('templates/footer');
    }
    public function akunpengguna()
    {
        $data['title'] = 'Gadai- Akun';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbarlogo', $data);
        $this->load->view('admin/akunpengguna');
        $this->load->view('templates/footer');
    }
}

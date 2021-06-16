<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pengajuan_model'));
    }
    public function index()
    {
        $data['title'] = 'Gadai-Dashboard';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['admin_total'] = $this->db->get('user_admin')->num_rows();
        $data['total_nasabah'] = $this->db->get('pengajuan_gadai')->num_rows();
        $data['total_pengajuan'] = $this->db->get_where('pengajuan_gadai', ['status' => 0])->num_rows();
        $data['total_selesai'] = $this->db->get_where('pengajuan_gadai', ['status' => 1])->num_rows();
        $data['data'] = $this->db->select('COUNT(*) as count, MONTH(tanggal_pinjam) as month')->from('pengajuan_gadai')->group_by('MONTH(tanggal_pinjam)')->get()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footerDash', $data);
    }

    public function riwayatpembayaran()
    {
        $data['riwayat'] = $this->Pengajuan_model->getDataRiwayat();
        $data['title'] = 'Gadai-Riwayat';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/riwayatpembayaran', $data);
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

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanGadai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pengajuan_model'));
    }

    public function index()
    {
        $data['pengajuan'] = $this->Pengajuan_model->getDataPengajuan();
        $data['title'] = 'Gadai-Pengajuan';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function tambahPengajuan()
    {
        $data['title'] = 'Tambah Pengajuan';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahpengajuan', $data);
        $this->load->view('templates/footer');
    }
}

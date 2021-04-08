<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pembayaran_model'));
    }

    public function index()
    {
        $data['pembayaran'] = $this->Pembayaran_model->getDataNasabah();
        $data['title'] = 'Gadai-Pembayaran';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/catatanpembayaran', $data);
        $this->load->view('templates/footer');
    }
    public function detailPembayaran($id)
    {
        $data['title'] = 'DetailPembayaran';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->getNasabahById($id);
        $data['catatanpembayaran'] = $this->Pembayaran_model->getDataPembayaran($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailPembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPembayaran()
    {
        $data['title'] = 'Tambah Pembayaran';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->db->get_where('catatan_pembayaran', 'id_pengajuan')->row_array();
        $this->form_validation->set_rules('id', 'Id Pengajuan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Pegadaian', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Peminjaman', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahPembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pembayaran_model->tambahData($data);
            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('pembayaran/detailPembayaran');
        }
    }
}

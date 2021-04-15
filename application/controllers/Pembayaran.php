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
        // echo "<pre>";
        // print_r($data['pembayaran']);
        // echo "</pre>";
        // die;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/catatanpembayaran', $data);
        $this->load->view('templates/footer');
    }
    public function detailPembayaran($id)
    {
        $data['title'] = 'DetailPembayaran';
        $where = array(
            'id_pengajuan' => $id
        );
        $this->session->set_userdata($where);
        $data['TotalNominal'] = $this->Pembayaran_model->getTotalNominal($where);

        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->getNasabahById($id);
        $data['catatanpembayaran'] = $this->Pembayaran_model->getDataPembayaran($where);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailPembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPembayaran($id)
    {
        $data['title'] = 'Tambah Pembayaran';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->getIdPembayaran($id);
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
            $where = array(
                'id_pengajuan' => $id
            );
            $where2 = array(
                'id' => $id
            );
            $this->session->set_userdata($where);
            $TotalNominal = $this->Pembayaran_model->getTotalNominal($where);
            $peminjaman = $this->Pembayaran_model->getJumlahPeminjaman($where2);
            // echo "<pre>";
            // print_r($peminjaman);
            // echo "</pre>";
            // die;

            if ($TotalNominal->nominal_bayar  <= $peminjaman->jumlah_peminjaman) {
                $this->Pembayaran_model->tambahData($data);

                $where2 = array(
                    'id' => $id
                );
                $TotalNominal2 = $this->Pembayaran_model->getTotalNominal($where);
                if ($TotalNominal2->nominal_bayar  >= $peminjaman->jumlah_peminjaman) {
                    $data = [
                        'status' => 1
                    ];
                    $this->Pembayaran_model->updateStatus($where2, $data);
                    $this->session->set_flashdata('message', 'lunas');
                    redirect('/Dashboard/riwayatpembayaran');
                } else {
                    $this->session->set_flashdata('message', 'belum lunas');
                    redirect('/Pembayaran/detailPembayaran/' . $this->session->userdata('id_pengajuan'));
                }
            } else {
                $this->session->set_flashdata('message', 'jumlah nominal bayar melebihi jumlah peminjaman');
                redirect('/Pembayaran/detailPembayaran/' . $this->session->userdata('id_pengajuan'));
            }




            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('/Pembayaran/detailPembayaran/' . $this->session->userdata('id_pengajuan'));
        }
    }
}

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
        //load library
        $this->load->library('pagination');

        //config
        $config['base_url']='http://localhost/WebsiteGadai/PengajuanGadai/';
        $config['total_rows'] = $this->Pengajuan_model->countAllData();
        $config['per_page']= 5;

        $config['full_tag_open']='<nav aria-label="Page navigation example"> <ul class="pagination justify-content-center">';
        $config['full_tag_close']='</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open']='<li class="page-item">';
        $config['first_tag_close']='</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open']='<li class="page-item">';
        $config['last_tag_close']='</li>';  
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open']='<li class="page-item">';
        $config['next_tag_close']='</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#" tabindex="-1">';
        $config['cur_tag_close']='</a></li>';
        
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(2);

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

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Pegadaian', 'required');
        $this->form_validation->set_rules('batas', 'Batas Pengembalian', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Peminjaman', 'required');
        $this->form_validation->set_rules('jaminan', 'Nama Jaminan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahpengajuan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pengajuan_model->tambahData($data);
            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('pengajuangadai');
        }
    }

    public function editPengajuan($id)
    {
        $data['title'] = 'edit Pengajuan';
        $data['user'] = $this->db->get_where('user_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajuan'] = $this->Pengajuan_model->getById($id);
        $data['id'] = $id;

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id', 'ID', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pengajuanedit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pengajuan_model->editData($data);
            $this->session->set_flashdata('message', 'Di Edit');
            redirect('pengajuangadai');
        }
    }

    public function hapusPengajuan($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('PengajuanGadai');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('pengajuan_gadai');
            $this->session->set_flashdata('message', "Di Hapus");
            redirect('PengajuanGadai');
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Api_model'); 
    }

    public function users_get()
    {
        $nama = $this->get('nama');
        $tanggal = $this->get('tanggal');
        // Users from a data store e.g. database
        $users =$this->Api_model->getUserInfo($nama,$tanggal);
        $this->response( $users, 200 );
    }

    public function bayar_get()
    {
        $id = $this->get('id'); 
        // Users from a data store e.g. database
        $data =$this->Api_model->getPembayaran($id);
        $this->response( $data, 200 );
    }

    public function beranda_get()
    {
        $id = $this->get('id');  
        $data =$this->Api_model->getBeranda($id);
        $this->response( $data, 200 );
    }

    public function detail_get()
    {
        # code...
    }

 
}

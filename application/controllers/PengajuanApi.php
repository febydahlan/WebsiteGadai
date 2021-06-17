<?php

use chriskacerguis\RestServer\RestController;

class PengajuanApi extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengajuan_model');
        $this->load->model('Pembayaran_model');
    }

    public function index_get()
    {
        $pengajuan = $this->Pengajuan_model->getDataPengajuan();

        if ($pengajuan) {
            $this->response([
                'status' => true,
                'data' => $pengajuan
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }
    }

    public function riwayat_get()
    {
        $pengajuan_riwayat = $this->Pengajuan_model->getDataRiwayat();

        if ($pengajuan_riwayat) {
            $this->response([
                'status' => true,
                'data' => $pengajuan_riwayat
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }
    }
}

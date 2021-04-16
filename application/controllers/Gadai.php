<?php

use chriskacerguis\RestServer\RestController;

class Gadai extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        // 
        $this->response(['status' => true, 'data' => 'ini adalah data'], RestController::HTTP_OK);
    }
}

<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/login.php");
	}

	public function dashboard() 
	{
		$this->load->view("admin/overview.php");
	}
}
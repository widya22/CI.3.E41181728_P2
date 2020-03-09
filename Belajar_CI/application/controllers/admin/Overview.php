<?php

//Pewarisan sifat pada class Overview dari CI_Controller
class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // saat method index dijalankan maka akan di lempar view admin/overview.php
        $this->load->view("admin/overview");
	}
}
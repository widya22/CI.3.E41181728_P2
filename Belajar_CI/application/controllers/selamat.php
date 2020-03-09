<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selamat extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//untuk memanggil helper html
		$this->load->helper('html');
	}

	public function index(){
		//akan dilempar ke view vie_belajar
		$this->load->view('view_belajar');
	}
}
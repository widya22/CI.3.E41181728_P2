<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //untuk memanggil library form validation codeigniter
	}

	function index(){
		$this->load->view('v_form'); //dilempar ke view v_form
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required'); // untuk menetapkan peraturan validasi form pada nama harus di isi
		$this->form_validation->set_rules('email','Email','required'); // untuk menetapkan peraturan validasi form pada email harus di isi
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); // untuk menetapkan peraturan validasi form pada konfirmasi email harus di isi

		//saat form_validasi dijalankan dan tidak error akan menampilkan pesan "Form validasi oke"
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
            $this->load->view('v_form'); //jika tidak sama dengan salah akan dilepar ke v_form errror
            
            
		}
	}
}
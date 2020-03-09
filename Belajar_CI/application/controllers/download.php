<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	//petamakali dijalankan meempar ke helper url dandownoad
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));	//untuk memanggil helper url dan download			
	}
 
	public function index(){		
		$this->load->view('v_download'); //menjalankan function index pada view v_download
	}
	
	//membuat download fileyang isinya kita sendiri yang menentukan
	public function lakukan_download(){				
		force_download('gambar/bb.png',NULL); //membuat file download (gambar(lokasi file yang akan didownload):bb.png(nama file yang akan didownload)) yang akan disimpan pada folder gambar
	}	
 
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Controller {
	//function ambil_data diguakan untuk mengambil data pada tabel user
	function ambil_data(){
		return $this->db->get('user'); //digunakan untuk mengambil data yang ditangkap pada controller yang memanggil function ambil_data(controller belelajar pada function user())
	}
}
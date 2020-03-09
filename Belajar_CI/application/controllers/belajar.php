<?php
		//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');

		//class Belajar memiliki pewarisan sifatdariCI_Controller
class Belajar extends CI_Controller {
		//menalankan nilai default
	function __construct(){ // pada baris ini kita definisikan apa yang akan dilakukan pada saat pembuatan objek dari class Belajar
		parent::__construct();	//pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu
		$this->load->model('m_data'); //saat function dijalankan akan dilempar ke model/m_data.php
	}


		//menjalankan method index "http://localhost/Belajar_CI/index.php/belajar atau http://localhost/Belajar_CI/index.php/belajar/index"
	public function index(){
		echo "ini method index pada controller belajar";
	}


		//untuk menjalankan method halo "http://localhost/Belajar_CI/index.php/belajar/halo"
	public function halo(){
		echo "ini method halo pada controller belajar";
		//saat mengakses function halo selain menampilkan echo diatas, maka akan dilempar ke view view_belajar
		$this->load->view('view_belajar'); 
	}


	public function carray(){
		//membuat parsing dengan array variabel $data untukmenyimpan isi dari judul dan tutorial
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		//mengaksesfungsi carray akan dilempar ke view v_carray untukmenampikan isi dari variabel data
		$this->load->view('v_carray', $data);
	}
	
	
	function user(){ //function ini user
		$data['user'] = $this->m_data->ambil_data()->result(); //membuat variabel "data" dengan isi user untuk menyimpan data yang diakses dari model m_data function ambil_data yang mengambil dari database dan "result" data dijadikan dalam bentuk array
		$this->load->view('v_user.php',$data); //kemudian dilempar ke view/v_user.php untuk menampilkan data yang disimpan di variiabel data yang dibuat di atas
	}


}
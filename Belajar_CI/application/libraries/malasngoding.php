<?php 

class Malasngoding{

		//saat menjalankan function nama_saya akan menampilkan nama saya adalah Widya
	function nama_saya(){
		echo "Nama saya adalah Widya !";
	}

		//saat menjalankan function nama_saya akan menampilkan nama_kamu adalah Andi. Andi yang diambil dari variabel $nama
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}
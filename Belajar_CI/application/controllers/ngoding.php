<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding'); //membuka terlebih dahulu lybrary malasngoding yang telahdibuat
		$this->malasngoding->nama_saya(); //mengguakan function nama_saya pada lybrary malasngoding
                echo "<br/>";
                $this->malasngoding->nama_kamu("Andi"); //mengguakan function nama_kamu dangan nilai Andi pada lybrary malasngoding
	}

}
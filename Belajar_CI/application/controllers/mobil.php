<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	public function warna(){		
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";	//berisikan nama class/controller	
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";	//berisikan nama function atau method
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";	//berisikan id
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";	//berisikan id
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";	//berisikan id
		//jadi misal kita mengakses localhost/Belajar_CI/index.php/mobil(segmen pertama harus disisi dengan nama class/controllernya)/warna(segmen kedua dengan nama function/method)/id(segmen ketiga bisa diisi terserah yang kita inginkan karena ini merupakan id(misal kuning/hijau/hitam))
		/* http://localhost/Belajar_CI/index.php/mobil/warna/kuning/hijau/hitam/pink
		hasilnya
			Segment 1 adalah = mobil
			Segment 2 adalah = warna
			Segment 3 adalah = kuning
			Segment 4 adalah = hijau
			segment 5 adalah = hitam
			Jika pink ingin tampiljuga maka kita harus menambah uri segment diatas
		 
		 */
	}
}
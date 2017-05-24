<?php 

require_once 'view.php';
include 'model/Berita.php';
/**
* 
*/
class depanUI extends view{
	
	public function tampilkan_halaman(){
		include_once 'model/Berita.php';
		$brt = new Berita();
		$isi_berita = $brt->ambilBerita();
		include_once 'pages/depan.php';
		$this->end();
	}
}

 ?>
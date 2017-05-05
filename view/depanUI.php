<?php 

require_once 'view.php';
/**
* 
*/
class depanUI extends view{
	
	public function tampilkan_halaman(){
		include_once 'pages/depan.php';
		$this->end();
	}
}

 ?>
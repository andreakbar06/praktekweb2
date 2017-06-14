<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends Model
{
	public $id_berita;
	public $tanggal;
	public $judul;
	public $isi;
	public $id_kategori;
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
		public function setBerita($tanggal,$judul,$isi,$id_kategori)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO berita(tanggal,judul,isi,id_kategori) VALUES(:tanggal, :judul, :isi, :id_kategori)");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	public function ambilBeritaSpesifik($id)
		{
		try
		  {
			$stmt = $this->db->prepare("SELECT * FROM berita WHERE id_berita=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		 }
		catch(PDOException $e) {
		echo $e->getMessage();
		return false; 
		}

		}
	public function ubahBerita($id_berita,$judul,$isi,$kategori)
		{
		try {
			$stmt = $this->db->prepare("UPDATE berita SET judul=:judul, isi=:isi, id_kategori=:kategori WHERE id_berita=:id_berita");
			$stmt->bindparam(":judul",$judul);
			$stmt->bindparam(":isi",$isi);
			$stmt->bindparam(":kategori",$kategori);
			$stmt->bindparam(":id_berita",$id_berita);
			$stmt->execute();
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
				}

}
 ?>
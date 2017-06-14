<h1>ubah Berita</h1>
<form action="aksi_ubah.php?id=<?php echo $data_berita['id_berita']; ?>" method="POST">
		    <label for="judul" >Judul</label>
		      <input type="text" name="judul" value= "<?php echo $data_berita['judul'];?>"><br>
		    <label for="isi">Isi</label> <br>
		    <textarea name="isi"  cols="30" rows="10"	> <?php echo $data_berita['isi'];?></textarea> <br>
		  	<label for="kategori">Kategori</label> <br>
			  	<select name="kategori" id="kategori">
			  	<?php foreach ($data_kategori as $kat): ?>
			  		<option value="<?php echo $kat['id_kategori']; ?>" 
			  		<?php 
			  		if ($kat['id_kategori']==$data_berita['id_kategori']) {
			  		echo "selected";
			  		}
			  	 	?>
			  		><?php echo $kat['nama_kategori']; ?></option>
			  	<?php endforeach ?>
			  	</select> <br>
			  	<input type="submit" value="submit">
		</form>
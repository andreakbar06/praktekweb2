<h2>Daftar Berita</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

 <?php
 $i=1;
  foreach ($isi_berita as $ib) { ?>
		<tr>
			<td><?= $i?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= substr($ib['isi'],0,50) ?></td>
			<td><a href="ubah_berita.php?id= <?php echo $ib['id_berita'] ?>">Ubah</a></td>

		</tr>
		<?php 
		$i++;
		} ?>
	</tbody>
</table>

<?php
include "connect.php";
?>
<form method="post" action="int/add-article-proc.php" enctype="multipart/form-data">
	<h2>Tambah Artikel</h2>
	<h4>Judul</h4>
	<input type="text" class="form-control" name="judul" value="" required>
	<hr>
	<h4>Gambar Tumbnail</h4>
	<span class="btn btn-default btn-file">
    	<input type="file" name="tumbnail" value="" required>
	</span>
	<hr>
	<h4>Deskripsi</h4>
	<b>Tuliskan sedikit tentang isi artikel, akan ditampilkan sebelum artikel dibuka.</b>
	<textarea style="max-width: 100%" name="deskripsi" class="form-control" rows="3" required></textarea>
	<hr>
	<h4>Isi</h4>
	<textarea name="addartikel" id="addartikel" rows="10" cols="80" required></textarea>
	<script>
    	CKEDITOR.replace( 'addartikel' );
    </script>
	<hr>
	<button class="btn btn-dark" style="vertical-align:middle" type="submit" name="kirim"><span>Kirim </span></button>
	<button class="btn btn-dark" style="vertical-align:middle" type="reset" onclick="window.location.href='#add'"><span>Batal </span></button>
</form>
<?php
include "connect.php";
?>
<form method="post" action="int/add-testimoni-proc.php" enctype="multipart/form-data">
	<h2>Tambah Testimoni</h2>
	<h4>Nama Pelanggan</h4>
	<input type="text" class="form-control" name="nama" value="" required>
	<hr>
	<h4>Foto</h4>
	<span class="btn btn-default btn-file">
    	<input type="file" name="photo" value="" required>
	</span>
	<hr>
	<h4>Caption</h4>
	<b>Tuliskan caption dari testimoni pelanggan.</b>
	<textarea style="max-width: 100%" name="caption" class="form-control" rows="3" required></textarea>
	<hr>
	<button class="btn btn-dark" style="vertical-align:middle" type="submit" name="kirim"><span>Kirim </span></button>
	<button class="btn btn-dark" style="vertical-align:middle" type="reset" onclick="window.location.href='#add'"><span>Batal </span></button>
</form>
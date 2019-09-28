<?php
error_reporting(0);
include "secure.php";
?>
<?php
include "connect.php";
$idartikel = $_GET['id'];
$data = mysqli_query($connect,"SELECT * FROM articles WHERE idarticle='$idartikel'");
	while($tampil = mysqli_fetch_array($data)){?>
		<form method="post" action="int/edit-article-proc.php" enctype="multipart/form-data">
			<h2>Edit Artikel</h2>
			<h4>Judul</h4>
			<input type="hidden" name="aidi" value="<?php echo $idartikel;?>" />
			<input type="text" class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" required>
			<hr>
			<h4>Gambar Tumbnail</h4>
			<b>Biarkan tanpa memilih jika tidak ingin mengganti gambar tumbnail.</b><br>
			<span class="btn btn-default btn-file">
    			<input type="file" name="tumbnail" value="">
			</span>
			<hr>
			<h4>Deskripsi</h4>
			<b>Tuliskan sedikit tentang isi artikel, akan ditampilkan sebelum artikel dibuka.</b>
			<textarea style="max-width: 100%" name="deskripsi" class="form-control" rows="3" required>
				<?php echo $tampil['isipendek'];?>
			</textarea>
			<hr>
			<h4>Isi</h4>
			<textarea name="editartikel" id="editartikel" rows="10" cols="80" required>
				<?php echo $tampil['isi'];?>
			</textarea>
			<script>
		    	CKEDITOR.replace( 'editartikel' );
		    </script>
			<hr>
			<button class="btn btn-dark" style="vertical-align:middle" type="submit" name="kirim"><span>Kirim </span></button>
			<button class="btn btn-dark" style="vertical-align:middle" type="reset" onclick="window.location.href='?edit=article'"><span>Batal </span></button>
		</form>
	<?php
	}
	?>
<?php
error_reporting(0);
include "secure.php";
?>
<?php
include "connect.php";
$idtesti = $_GET['id'];
$data = mysqli_query($connect,"SELECT * FROM testimoni WHERE idtesti='$idtesti'");
	while($tampil = mysqli_fetch_array($data)){?>
		<form method="post" action="int/edit-testimoni-proc.php" enctype="multipart/form-data">
			<h2>Edit Testimoni</h2>
			<h4>Nama Pelanggan</h4>
			<input type="hidden" name="aidi" value="<?php echo $idtesti;?>" />
			<input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama'];?>" required>
			<hr>
			<h4>Foto</h4>
			<b>Biarkan tanpa memilih jika tidak ingin mengganti gambar.</b><br>
			<span class="btn btn-default btn-file">
    			<input type="file" name="photo" value="">
			</span>
			<hr>
			<h4>Caption</h4>
			<b>Tuliskan caption dari testimoni pelanggan.</b>
			<textarea style="max-width: 100%" name="caption" class="form-control" rows="3" required>
				<?php echo $tampil['caption'];?>
			</textarea>
			<hr>
			<button class="btn btn-dark" style="vertical-align:middle" type="submit" name="kirim"><span>Kirim </span></button>
			<button class="btn btn-dark" style="vertical-align:middle" type="reset" onclick="window.location.href='?edit=testimoni'"><span>Batal </span></button>
		</form>
	<?php
	}
	?>
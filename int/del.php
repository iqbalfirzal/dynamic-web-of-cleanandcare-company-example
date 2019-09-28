<?php
include 'secure.php';
include 'connect.php';
$id = $_GET['id'];
$category = $_GET['cat'];
if ($category=='article') {
	$data = mysqli_query($connect,"SELECT * FROM articles WHERE idarticle='$id'");
	$tampil = mysqli_fetch_array($data);
	$file_to_delete = $tampil['tumbnail'];
	$path = '../img/articles/';
	if (unlink($path.$file_to_delete)){
    mysqli_query($connect,"DELETE FROM articles WHERE idarticle='$id'");
    echo 	"<script language='JavaScript'>
						alert('Artikel berhasil Dihapus')
						window.location = '../dash.php?edit=article';
					</script>";
  	}else {
		echo 	"<script language='JavaScript'>
						alert('Artikel Gagal Dihapus')
						window.location = '../dash.php?edit=article';
					</script>";
	}
}else if ($category=='portfolio') {
	//
	header("location:../dash.php?edit=portfolio");
}else if ($category=='testimoni') {
	$data = mysqli_query($connect,"SELECT * FROM testimoni WHERE idtesti='$id'");
	$tampil = mysqli_fetch_array($data);
	$file_to_delete = $tampil['photo'];
	$path = '../img/testimonial/';
	if (unlink($path.$file_to_delete)){
    mysqli_query($connect,"DELETE FROM testimoni WHERE idtesti='$id'");
    echo 	"<script language='JavaScript'>
						alert('Testimoni berhasil Dihapus')
						window.location = '../dash.php?edit=testimoni';
					</script>";
  	}else {
		echo 	"<script language='JavaScript'>
						alert('Testimoni Gagal Dihapus')
						window.location = '../dash.php?edit=testimoni';
					</script>";
	}
}
?>
<?php
	if(isset($_POST['kirim'])){
		$judul=$_POST['judul'];
		$artikel=$_POST['editartikel'];
		$inputisipendek=$_POST['deskripsi'];
		if(strlen($inputisipendek) > 70){
			$isipendek=substr($inputisipendek,0,70)."...";
		}else{
			$isipendek=$inputisipendek;
		};
		$id=$_POST['aidi'];
		include "connect.php";
		if ($_FILES['tumbnail']['error'] > 0) {
			$sql="UPDATE articles SET judul='$judul', isi='$artikel' WHERE idarticle='$id'";
		}else{
			$data = mysqli_query($connect,"SELECT * FROM articles WHERE idarticle='$id'");
			$tampil = mysqli_fetch_array($data);
			$file_to_delete = $tampil['tumbnail'];
			$path = '../img/articles/';
			if (unlink($path.$file_to_delete)){
				$tumbnail=$_FILES['tumbnail']['name'];
				$tmp=$_FILES['tumbnail']['tmp_name'];  
				$rename=explode(".", $tumbnail);
				$renamepass=end($rename);
				function safename($theValue)
				{
				    $_trSpec = array(
				        'Ç' => 'C', 
				        'Ğ' => 'G', 
				        'İ' => 'I',
				        'Ö' => 'O', 
				        'Ş' => 'S', 
				        'Ü' => 'U',
				        'ç' => 'c', 
				        'ğ' => 'g', 
				        'ı' => 'i',
				        'i' => 'i',
				        'ö' => 'o', 
				        'ş' => 's', 
				        'ü' => 'u',
				    );
				    $enChars = array_values($_trSpec);
				    $trChars = array_keys($_trSpec);
				    $theValue = str_replace($trChars, $enChars, $theValue); 
				    $theValue=preg_replace("@[^A-Za-z0-9\-_.\/]+@i","-",$theValue);
				    $theValue=strtolower($theValue);
				    return $theValue;
				}
				$tumbnailrenamed=safename($judul).".".$renamepass;
				$sql="UPDATE articles SET judul='$judul', isi='$artikel', isipendek='$isipendek', tumbnail='$tumbnailrenamed' WHERE idarticle='$id'";
				move_uploaded_file($tmp, $path.$tumbnailrenamed);
			}else{
				echo "gagal menghapus gambar tumbnail yang sebelumnya";
			}
		};
		if (mysqli_query($connect, $sql)) {
	    	echo 	"<script language='JavaScript'>
					alert('Artikel berhasil diubah')
					window.location = '../dash.php?edit=article';
					</script>";
	    } else {
	   		echo 	"<script language='JavaScript'>
					alert('Gagal diubah')
					window.location = '../dash.php?edit=article';
					</script>";
	    }
	}
?>
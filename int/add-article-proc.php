<?php
	if(isset($_POST['kirim'])){
		$judul=$_POST['judul'];
		$artikel=$_POST['addartikel'];
		$inputisipendek=$_POST['deskripsi'];
		if(strlen($inputisipendek) > 70){
			$isipendek=substr($inputisipendek,0,70)."...";
		}else{
			$isipendek=$inputisipendek;
		};
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
		$path='../img/articles/'.$tumbnailrenamed;
		include "connect.php"; 
	    $sql="INSERT INTO articles (judul,isi,isipendek,tanggal,tumbnail) VALUES('$judul','$artikel','$isipendek',current_date(),'$tumbnailrenamed')";
		if (move_uploaded_file($tmp, $path) && mysqli_query($connect, $sql)) {
	    	echo 	"<script language='JavaScript'>
					alert('Artikel berhasil ditambahkan')
					window.location = '../dash.php?edit=article';
					</script>";
	    } else {
	   		echo 	"<script language='JavaScript'>
					alert('Gagal ditambahkan')
					window.location = '../dash.php?add=article';
					</script>";
	    }
	}
?>
<?php
	if(isset($_POST['kirim'])){
		$nama=$_POST['nama'];
		$caption=$_POST['caption'];
		$photo=$_FILES['photo']['name'];
		$tmp=$_FILES['photo']['tmp_name'];
		$rename=explode(".", $photo);
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
		$photorenamed=safename($nama).".".$renamepass;
		$path='../img/testimonial/'.$photorenamed;
		include "connect.php"; 
	    $sql="INSERT INTO testimoni (nama,caption,photo) VALUES('$nama','$caption','$photorenamed')";
		if (move_uploaded_file($tmp, $path) && mysqli_query($connect, $sql)) {
	    	echo 	"<script language='JavaScript'>
					alert('Testimoni berhasil ditambahkan')
					window.location = '../dash.php?edit=testimoni';
					</script>";
	    } else {
	   		echo 	"<script language='JavaScript'>
					alert('Gagal ditambahkan')
					window.location = '../dash.php?add=testimoni';
					</script>";
	    }
	}
?>
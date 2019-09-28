<?php
	if(isset($_POST['kirim'])){
		$nama=$_POST['nama'];
		$caption=$_POST['caption'];
		$id=$_POST['aidi'];
		include "connect.php";
		if ($_FILES['photo']['error'] > 0) {
			$sql="UPDATE testimoni SET nama='$nama', caption='$caption' WHERE idtesti='$id'";
		}else{
			$data = mysqli_query($connect,"SELECT * FROM testimoni WHERE idtesti='$id'");
			$tampil = mysqli_fetch_array($data);
			$file_to_delete = $tampil['photo'];
			$path = '../img/testimonial/';
			if (unlink($path.$file_to_delete)){
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
				$sql="UPDATE testimoni SET nama='$nama', caption='$caption', photo='$photorenamed' WHERE idtesti='$id'";
				move_uploaded_file($tmp, $path.$photorenamed);
			}else{
				echo "gagal menghapus gambar yang sebelumnya";
			}
		};
		if (mysqli_query($connect, $sql)) {
	    	echo 	"<script language='JavaScript'>
					alert('Artikel berhasil diubah')
					window.location = '../dash.php?edit=testimoni';
					</script>";
	    } else {
	   		echo 	"<script language='JavaScript'>
					alert('Gagal diubah')
					window.location = '../dash.php?edit=testimoni';
					</script>";
	    }
	}
?>
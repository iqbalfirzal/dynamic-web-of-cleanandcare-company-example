<?php
include "connect.php";
$adm=$_POST['admin'];
$passpost=$_POST['kunci'];
$pass=md5($passpost);
$cek_terdaftar=mysqli_query($connect,"SELECT * FROM admin WHERE username='$adm' && password='$pass'");
$jumlah=mysqli_num_rows($cek_terdaftar);
if($jumlah>0)
{
	session_start();
	$_SESSION['admlogin']=true;
	$_SESSION['admname']=$adm;
	header("location:../dash.php#meet");
}else{
	echo 	"<script language='JavaScript'>
				alert('Nama atau kata sandi salah')
				window.location = '../login.html';
			</script>";
}
?>
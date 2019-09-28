<?php
session_start();
if(!$_SESSION['admlogin'])
{
	header("location:../policy/error403.php");
}else{}
?>
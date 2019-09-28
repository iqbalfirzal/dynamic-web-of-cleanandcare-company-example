<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "braders";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
?>
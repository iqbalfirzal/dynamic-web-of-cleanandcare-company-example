<?php 

if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $emailFrom =$_POST['email'];
    $tel =$_POST['tel'];
    $suject =$_POST['subject'];
    $message =$_POST['message'];

    $emailTo ="feri.irawan@students.amikom.ac.id";
    $headers ="From: " .$emailFrom;
    $txt ="Anda Telah Menerima E-Mail Dari".$name.".\n\n".$message;

    mail($emailTo,$subject,$txt,$headers);
    header ("location: ../index.php");
}

?>
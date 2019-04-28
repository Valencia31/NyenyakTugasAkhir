<?php
session_start();

// koneksi ke database
$connect= mysqli_connect("localhost","root","","login");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$input=" INSERT INTO pemesan(name,email,phone)
        VALUES('$name','$email','$phone')";
$hasil= mysqli_query($connect,$input);
 if(!$hasil){
     echo "gagal";
 } else{
   header("Location: form-booking.php");
 }
 ?>

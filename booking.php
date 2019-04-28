<?php
session_start();
//koneksi ke database
$connect= mysqli_connect("localhost","root","","login");
//ambil variabel yang dikirim dari form
$kota=$_POST['kota'];
$kamar=$_POST['kamar'];
$tanggal_pesan=$_POST['tanggal_pesan'];

$input="INSERT INTO booking1 VALUES('','$kota','$kamar','$tanggal_pesan')";
    $hasil=mysqli_query($connect,$input);
    if(!$hasil){
        echo "gagal";
    } else {
        header("Location: index.php");
    }
<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$date = date("dd-mm-yyyy");
$category = $_POST['category'];
$title = $_POST['title'];
$detail = $_POST['detail'];
$postby = $_POST['postby'];
$photo = "hahaha";

// menginput data ke database
mysqli_query($koneksi,"insert into movie values('','$date','$category','$title','$detail','$postby','$photo')");
header("location:../dashboard.php");
// mengalihkan halaman kembali ke index.php
// header("location:dashboard.php");
?>

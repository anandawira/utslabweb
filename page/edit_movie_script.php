<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$date = date("dd-mm-yyyy");
$category = $_POST['category'];
$title = $_POST['title'];
$detail = $_POST['detail'];
$postby = $_POST['postby'];
$photo = "hahaha";

// menginput data ke database
mysqli_query($koneksi,"update movie set category='$category', title='$title', detail='$detail', posted_by='$postby' where id='$id'");

header("location:../dashboard.php");
// mengalihkan halaman kembali ke index.php
// header("location:dashboard.php");
?>

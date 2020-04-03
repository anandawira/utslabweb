<?php
    session_start();

    if($_SESSION['status']!="login"){
        header("location:login.php");
    }else{
        header("location:dashboard.php");
    }
?>
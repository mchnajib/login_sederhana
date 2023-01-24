<?php

include '../koneksi.php';

session_start();

if($_SESSION['status'] != "login"){
    header("location:../index.php");
}

echo "Selamat Datang ". $_SESSION['username'];

?>
<a href="logout.php">logout</a>

?>
<?php
$servername = "localhost";
$database = "db_satudata";
$username = "root";
$password = "";

// buat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// cek koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}   
// mysqli_close($connect);
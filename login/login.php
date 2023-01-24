<?php
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data pada tabel admin dengan username dan password yang sesuai
$periksa = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' and password='$password'");

 // menghitung jumlah data yang ditemukan
 $cek = mysqli_num_rows($periksa);


 if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:admin/index.php");
 } else {
    header("location:index.php");
 }

?>
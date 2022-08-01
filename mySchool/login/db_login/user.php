<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$username = $_POST['username'];
$password = $_POST['password'];

$login = "SELECT * FROM users where username='$username' and password='$password'";
$logincek = mysqli_query($koneksi, $login);
$cek = mysqli_num_rows($logincek);

if ($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Login";
    header("location:../../school/index.php");
}else{
    header("location:../index_login.php?pesan=belum_login");
}

?>
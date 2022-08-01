<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$wali_kelas_nm = $_POST['wali_kelas_nm'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO users values ('','$username','$password','$repassword', '$wali_kelas_nm', '$kelas')";
mysqli_query($koneksi, $query);

header("location:../index_login.php");

?>
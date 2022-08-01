<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$wali_kelas_nm = $_POST['wali_kelas_nm'];
$kelas = $_POST['kelas'];

$result = "update users set username='$username', password='$password', repassword='$repassword', wali_kelas_nm='$wali_kelas_nm', kelas='$kelas' where id_user='$id_user'";
mysqli_query($koneksi, $result);

header("location:../../school/index.php");
?>
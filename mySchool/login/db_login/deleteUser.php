<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$id_user = $_GET['id_user'];

mysqli_query($koneksi, "DELETE FROM users WHERE id_user='$id_user'");
mysqli_query($koneksi, "DELETE FROM datasiswa");

header("location:../index_login.php");
?>
<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM datasiswa where id='$id'");

header("location:../index.php");
?>
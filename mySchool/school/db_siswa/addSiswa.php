<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$nama = $_POST['nama'];
$tanggal_kelahiran = $_POST['tanggal_kelahiran'];
$hp = $_POST['hp'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$jk = $_POST['jk'];

mysqli_query($koneksi, "INSERT INTO datasiswa VALUES ('', '$nama','$tanggal_kelahiran','$hp','$nama_ayah','$pekerjaan_ayah','$nama_ibu','$pekerjaan_ibu','$jk')");

header("location:../index.php");
?>
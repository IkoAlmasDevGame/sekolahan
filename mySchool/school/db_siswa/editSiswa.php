<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","t_daftarmurid");

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal_kelahiran = $_POST['tanggal_kelahiran'];
$hp = $_POST['hp'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$jk = $_POST['jk'];

mysqli_query($koneksi, "UPDATE datasiswa SET nama='$nama', tanggal_kelahiran='$tanggal_kelahiran', hp='$hp', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu', pekerjaan_ibu='$pekerjaan_ibu', jk='$jk' WHERE id='$id'");

header("location:../index.php");
?>
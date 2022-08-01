<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Edit Daftar Siswa</title>
</head>
    <body>
        <div class="data-siswa">
            <h1>Edit Siswa Baru</h1>
        <?php
            include "../../functSchool/school.php";

            $koneksi = new mysqli("localhost","root","","t_daftarmurid");
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * from datasiswa where id='$id'");
            while($d = mysqli_fetch_array($data)){
                $jk = $d['jk'];
                $jeniskerjaAyah = $d['pekerjaan_ayah'];
                $jeniskerjaIbu = $d['pekerjaan_ibu'];
            ?>
            <form action="../db_siswa/editSiswa.php" method="post">
                <table class="table table-striped-columns">
                    <tr>
                        <th><label for="Nama">Nama Lengkap</label></th>
                        <th>
                            <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']?>" placeholder="Masukkan Nama Lengkap anda" class="form-control">
                        </th>
                        </tr>
                        <tr>
                            <th><label for="tanggal_kelahiran">Tanggal Kelahiran</label></th>
                            <th><input type="date" name="tanggal_kelahiran" id="tanggal_kelahiran" value="<?php echo $d['tanggal_kelahiran']?>" placeholder="Masukkan tanggal kelahiranmu" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Handphone">No Telephone</label></th>
                            <th><input type="number" name="hp" id="hp" value="<?php echo $d['hp']?>" placeholder="Masukkan No Telephone" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="nama_ayah">Nama Ayah</label></th>
                            <th><input type="text" name="nama_ayah" id="nama_ayah" value="<?php echo $d['nama_ayah']?>" placeholder="Masukkan Nama Ayah anda" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Pekerjaan">Pekerjaan Ayah</label></th>
                            <th><select name="pekerjaan_ayah" id="pekerjaan_ayah">
                                <option value="1" <?php if($jeniskerjaAyah==1){?>selected=""<?php }?>>Polisi</option>
                                <option value="2" <?php if($jeniskerjaAyah==2){?>selected=""<?php }?>>TNI</option>
                                <option value="3" <?php if($jeniskerjaAyah==3){?>selected=""<?php }?>>Karyawan Swasta</option>
                                <option value="4" <?php if($jeniskerjaAyah==4){?>selected=""<?php }?>>Karyawan Negeri</option>
                                <option value="5" <?php if($jeniskerjaAyah==5){?>selected=""<?php }?>>Information AND Technology</option>
                                <option value="6" <?php if($jeniskerjaAyah==6){?>selected=""<?php }?>>Guru</option>
                                <option value="7" <?php if($jeniskerjaAyah==7){?>selected=""<?php }?>>Satpam</option>
                                <option value="8" <?php if($jeniskerjaAyah==8){?>selected=""<?php }?>>SPG</option>
                                <option value="9" <?php if($jeniskerjaAyah==9){?>selected=""<?php }?>>Kasir</option>
                                <option value="10" <?php if($jeniskerjaAyah==10){?>selected=""<?php }?>>Koki</option>
                                <option value="11" <?php if($jeniskerjaAyah==11){?>selected=""<?php }?>>Pelayan</option>
                                <option value="12" <?php if($jeniskerjaAyah==12){?>selected=""<?php }?>>Sutradara</option>
                                <option value="13" <?php if($jeniskerjaAyah==13){?>selected=""<?php }?>>Youtuber</option>
                                <option value="14" <?php if($jeniskerjaAyah==14){?>selected=""<?php }?>>Pro Player</option>
                                <option value="15" <?php if($jeniskerjaAyah==15){?>selected=""<?php }?>>Sopir</option>
                                <option value="16" <?php if($jeniskerjaAyah==16){?>selected=""<?php }?>>Pilot</option>
                                <option value="17" <?php if($jeniskerjaAyah==17){?>selected=""<?php }?>>Masinis</option>
                                <option value="18" <?php if($jeniskerjaAyah==18){?>selected=""<?php }?>>Nahkoda</option>
                                <option value="19" <?php if($jeniskerjaAyah==19){?>selected=""<?php }?>>Wirausaha</option>
                                </select></th>
                            </tr>
                        <tr>
                            <th><label for="nama_ibu">Nama Ibu</label></th>
                            <th><input type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $d['nama_ibu']?>" placeholder="Masukkan Nama Ibu anda" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Pekerjaan">Pekerjaan Ibu</label></th>
                            <th><select name="pekerjaan_ibu" id="pekerjaan_ibu">
                                <option value="1" <?php if($jeniskerjaIbu==1){?>selected=""<?php }?>>Ibu Rumah Tangga</option>
                                <option value="2" <?php if($jeniskerjaIbu==2){?>selected=""<?php }?>>Polisi</option>
                                <option value="3" <?php if($jeniskerjaIbu==3){?>selected=""<?php }?>>TNI</option>
                                <option value="4" <?php if($jeniskerjaIbu==4){?>selected=""<?php }?>>Karyawan Swasta</option>
                                <option value="5" <?php if($jeniskerjaIbu==5){?>selected=""<?php }?>>Karyawan Negeri</option>
                                <option value="6" <?php if($jeniskerjaIbu==6){?>selected=""<?php }?>>Information AND Technology</option>
                                <option value="7" <?php if($jeniskerjaIbu==7){?>selected=""<?php }?>>Guru</option>
                                <option value="8" <?php if($jeniskerjaIbu==8){?>selected=""<?php }?>>Satpam</option>
                                <option value="9" <?php if($jeniskerjaIbu==9){?>selected=""<?php }?>>SPG</option>
                                <option value="10" <?php if($jeniskerjaIbu==10){?>selected=""<?php }?>>Kasir</option>
                                <option value="11" <?php if($jeniskerjaIbu==11){?>selected=""<?php }?>>Koki</option>
                                <option value="12" <?php if($jeniskerjaIbu==12){?>selected=""<?php }?>>Pelayan</option>
                                <option value="13" <?php if($jeniskerjaIbu==13){?>selected=""<?php }?>>Sutradara</option>
                                <option value="14" <?php if($jeniskerjaIbu==14){?>selected=""<?php }?>>Youtuber</option>
                                <option value="15" <?php if($jeniskerjaIbu==15){?>selected=""<?php }?>>Pro Player</option>
                                <option value="16" <?php if($jeniskerjaIbu==16){?>selected=""<?php }?>>Sopir</option>
                                <option value="17" <?php if($jeniskerjaIbu==17){?>selected=""<?php }?>>Pilot</option>
                                <option value="18" <?php if($jeniskerjaIbu==18){?>selected=""<?php }?>>Masinis</option>
                                <option value="19" <?php if($jeniskerjaIbu==19){?>selected=""<?php }?>>Nahkoda</option>
                                <option value="20" <?php if($jeniskerjaIbu==20){?>selected=""<?php }?>>Wirausaha</option>
                            </select></th>
                            </tr>
                            <tr>
                                <th><label for="Jeniskelamin">Jenis Kelamin</label></th>
                                <th><select name="jk" id="jk" require>
                                    <option value="1" <?php if($jk==1){?>selected="" <?php }?>>Laki-Laki</option>
                                    <option value="2" <?php if($jk==2){?>selected="" <?php }?>>Perempuan</option>
                                </select></th>
                            </tr>
                    </table>
                    <input type="submit" value="SELESAI PENGEDITAN" class="btn btn-primary">
                </form>
            <?php    
            }
            ?>
        </div>
    </body>
</html>
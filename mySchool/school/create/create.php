<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Daftar Siswa Baru</title>
</head>
    <body>
        <div class="header">
            <h1>Daftar Siswa</h1>
            <form action="../db_siswa/addSiswa.php" method="post">
                <div class="form-controls">
                    <br>
                    <table class="table table-primary table table-striped-columns">
                        <tr>
                            <th><label for="nama">Nama Lengkap</label></th>
                            <th><input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap anda" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="tanggal_kelahiran">Tanggal Kelahiran</label></th>
                            <th><input type="date" name="tanggal_kelahiran" id="tanggal_kelahiran" placeholder="Masukkan tanggal kelahiranmu" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Handphone">No Telephone</label></th>
                            <th><input type="number" name="hp" id="hp" placeholder="Masukkan No Telephone" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="nama_ayah">Nama Ayah</label></th>
                            <th><input type="text" name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah anda" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Pekerjaan">Pekerjaan Ayah</label></th>
                            <th><select name="pekerjaan_ayah" id="pekerjaan_ayah">
                                <option value="1">Polisi</option>
                                <option value="2">TNI</option>
                                <option value="3">Karyawan Swasta</option>
                                <option value="4">Karyawan Negeri</option>
                                <option value="5">Information AND Technology</option>
                                <option value="6">Guru</option>
                                <option value="7">Satpam</option>
                                <option value="8">SPG</option>
                                <option value="9">Kasir</option>
                                <option value="10">Koki</option>
                                <option value="11">Pelayan</option>
                                <option value="12">Sutradara</option>
                                <option value="13">Youtuber</option>
                                <option value="14">Pro Player</option>
                                <option value="15">Sopir</option>
                                <option value="16">Pilot</option>
                                <option value="17">Masinis</option>
                                <option value="18">Nahkoda</option>
                                <option value="19">Wirausaha</option>
                                </select></th>
                            </tr>
                            <tr>
                            <th><label for="nama_ibu">Nama Ibu</label></th>
                            <th><input type="text" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu anda" class="form-control"></th>
                        </tr>
                        <tr>
                            <th><label for="Pekerjaan">Pekerjaan Ibu</label></th>
                            <th><select name="pekerjaan_ibu" id="pekerjaan_ibu">
                                <option value="1">Ibu Rumah Tangga</option>
                                <option value="2">Polisi Wanita</option>
                                <option value="3">TNI</option>
                                <option value="4">Karyawan Swasta</option>
                                <option value="5">Karyawan Negeri</option>
                                <option value="6">Information AND Technology</option>
                                <option value="7">Guru</option>
                                <option value="8">Satpam</option>
                                <option value="9">SPG</option>
                                <option value="10">Kasir</option>
                                <option value="11">Koki</option>
                                <option value="12">Pelayan</option>
                                <option value="13">Sutradara</option>
                                <option value="14">Youtuber</option>
                                <option value="15">Pro Player</option>
                                <option value="16">Sopir</option>
                                <option value="17">Pilot</option>
                                <option value="18">Masinis</option>
                                <option value="19">Nahkoda</option>
                                <option value="20">Wirausaha</option>
                            </select></th>
                            </tr>
                            <tr>
                                <th><label for="Jeniskelamin">Jenis Kelamin</label></th>
                                <th><select name="jk" id="jk" require>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select></th>
                            </tr>
                    </table>
                </div>
                    <input type="submit" value="SELESAI PENDAFTARAN" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
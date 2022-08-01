<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../java/school.js"></script>
    <link rel="stylesheet" href="../css/stylesheetsc.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>My School Indonesian</title>
</head>
    <body>
        <header class="header">
            <div class="dropdowns">
            <button onclick="myFunctions()" class="dropbtns">Menu Utama</button>
                <div id="myDropdowns" class="dropdowns-content">
                <a href="../school/index.php">Home</a>
                <a href="../school/create/create.php">Create</a>
                <?php
                $koneksi = new mysqli("localhost","root","","t_daftarmurid");
                $datas = mysqli_query($koneksi, "SELECT * from users");
                while($da = mysqli_fetch_array($datas)){
                    ?>
                        <a href="../school/about.php?id_user=<?php echo $da['id_user'];?>">About Me</a>
                    <?php
                    }
                ?>
                <a href="../school/logout.php">Log Out</a>
                    </div>
                </div>
            <div class="nameSchool"></div>
        </header>
        <div class="data-murid">
            <table class="table table-striped-columns">
        <tr>
			<th>NO</th>
			<th>Nama Lengkap</th>
			<th>Tanggal Kelahiran</th>
			<th>Hp</th>
			<th>Nama Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>Nama Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>Jenis Kelamin</th>
            <th>Option</th>
        </tr>
        <?php
        /*
            Database daftar murid sekolahan
        */
        include "../functSchool/school.php";
        
        $koneksi = new mysqli("localhost","root","","t_daftarmurid");
        $no = 0;
        $data = mysqli_query($koneksi, "SELECT * from datasiswa");
        while($d = mysqli_fetch_array($data)){
            $no++;
            $id = $d['id'];

            $nama = strtoupper($d['nama']);
            $tgl = tgl_indo($d['tanggal_kelahiran']);
            $hp = $d['hp'];
            $nama_bapak = strtoupper($d['nama_ayah']);
            $jeniskerjaAyah = $d['pekerjaan_ayah'];
            $nama_mama = strtoupper($d['nama_ibu']);
            $jeniskerjaIbu = $d['pekerjaan_ibu'];
            $jk = $d['jk'];
        ?>
        <tr>
			<td><?=$no++;?></td>
			<td><?=strtoupper($nama);?></td>
			<td><?=tgl_indo($d['tanggal_kelahiran']);?></td>
			<td><?=$hp;?></td>
			<td><?=strtoupper($nama_bapak);?></td>
			<td><?=jeniskerjaAyah($d['pekerjaan_ayah']);?></td>
			<td><?=strtoupper($nama_mama);?></td>
			<td><?=jeniskerjaIbu($d['pekerjaan_ibu']);?></td>
			<td><?=jk($d['jk']);?></td>
			<td>
				<a href="../school/create/edit.php?id=<?php echo $d['id']; ?>" class="btn btn-secondary">EDIT</a>
				<a href="../school/create/delete.php?id=<?php echo $d['id']; ?>" class="btn btn-secondary">HAPUS</a>
				</td>
			</tr>
        <?php
        }
        ?>
            </table>
        </div>
    </body>
</html>
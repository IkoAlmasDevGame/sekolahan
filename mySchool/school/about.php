<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesheetxs.css" type="text/css" >
    <script src="../java/PwRp.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>About Me -- Profile --</title>
</head>
    <body>
        <div class="profile-about" style="padding-top: 10px; padding-bottom: 5px; background-color:antiquewhite;">
            <div class="form-img" style="text-align:center;">
                <i class="material-icons" style="font-size: 12vh;">person</i>
            </div>
                <h1 style="text-align: center;">My Profile</h1>
            <?php
            include "../functSchool/school.php";

            /*
            */
            $koneksi = new mysqli("localhost","root","","t_daftarmurid");
            $id_user = $_GET['id_user'];
            $result = "SELECT * from users where id_user='$id_user'";
            $data = mysqli_query($koneksi, $result);
            while($d = mysqli_fetch_array($data)){
                $kls = $d['kelas'];
            ?>
            <div class="form-edit" style="padding-top: 5vh; padding-bottom: 1vh; background-color:white;">
            <form action="../login/db_login/editUser.php" method="POST">
                <table class="table table-striped-columns">
                    <tr>
                        <th><input type="hidden" name="id_user" id="id_user" value="<?php echo $d['id_user']?>"></th>
                        <tr>
                            <th><label for="username">Username</label></th>
                            <th><input type="text" name="username" id="username" value="<?php echo $d['username']?>"></th>
                        </tr>
                    </tr>
                    <tr>
                        <th><label for="password">Password</label></th>
                        <th><input type="password" name="password" id="password" value="<?php echo $d['password']?>"></th>
                        <th><input type="checkbox" onclick="myFunctionX()"> Tampilkan Password</th>
                    </tr>
                    <tr>
                        <th><label for="repassword">RePassword</label></th>
                        <th><input type="password" name="repassword" id="repassword" value="<?php echo $d['repassword']?>"></th>
                        <th><input type="checkbox" onclick="myFunctionS()"> Tampilkan Repassword</th>
                    </tr>
                    <tr>
                        <th><label for="kelas_walas">Wali Kelas</label></th>
                        <th><input type="text" name="wali_kelas_nm" id="wali_kelas_nm" value="<?php echo $d['wali_kelas_nm']?>"></th>
                    </tr>
                    <tr>
                        <th><label for="Kelas Berapa">Kelas Berapa</label></th>
                        <th><select name="kelas" id="kelas">
                            <option value="1" <?php if($kls==1){?>selected=""<?php }?>>Kelas 1</option>
                            <option value="2" <?php if($kls==2){?>selected=""<?php }?>>Kelas 2</option>
                            <option value="3" <?php if($kls==3){?>selected=""<?php }?>>Kelas 3</option>
                            <option value="4" <?php if($kls==4){?>selected=""<?php }?>>Kelas 4</option>
                            <option value="5" <?php if($kls==5){?>selected=""<?php }?>>Kelas 5</option>
                            <option value="6" <?php if($kls==6){?>selected=""<?php }?>>Kelas 6</option>
                            </select>
                        </th>
                    </tr>
                </table>
                <div class="form-edit" style="text-align:center; align-items:center; padding-top: 10px;">
                    <input type="submit" value="SELESAI PENGEDITAN" class="btn btn-secondary">
                    <a href="../login/db_login/deleteUser.php?id_user=<?php echo $d['id_user'];?>" class="btn btn-secondary">DELETE ALL ACCOUT</a>
                </div>
                </form>
            </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesheets.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>My School Register</title>
</head>
    <body>
        <div class="controls-menu">
            <h1>Register My School Indonesian By User</h1>
            <form action="../login/db_login/addUser.php" method="POST">
                <div class="form-controls">
                    <div class="form-img-center">
                        <i class="material-icons" style="font-size:12vh;">school</i>
                    </div>
                    <table class="table table-striped-columns">
                        <tr>
                            <th>
                                <label for="Username">Username </label>
                            </th>
                            <th><input type="text" id="username" name="username" class="form-control" placeholder="masukkan username anda yang diinginkan"></th>
                        </tr>
                        <tr>
                            <th>
                                <label for="Password">Password </label>
                            </th>
                            <th><input type="password" id="password" name="password" class="form-control" placeholder="masukkan password anda yang diinginkan"></th>
                        </tr>
                        <tr>
                            <th>
                                <label for="Repassword">Repassword </label>
                            </th>
                            <th><input type="password" id="repassword" name="repassword" class="form-control" placeholder="masukkan password anda yang diinginkan"></th>
                        </tr>
                        <tr>
                            <th><label for="wali kelas">Wali Kelas :</label></th>
                            <th><input type="text" name="wali_kelas_nm" id="wali_kelas_nm" placeholder="Nama Wali Kelas Anda" class="form-control"></th>
                    </tr>
                    <tr>
                        <th><label for="Kelas">Wali Kelas Berapa :</label></th>
                        <th>
                            <select name="kelas" id="kelas">
                                <option value="1">Kelas 1</option>
                                <option value="2">Kelas 2</option>
                                <option value="3">Kelas 3</option>
                                <option value="4">Kelas 4</option>
                                <option value="5">Kelas 5</option>
                                <option value="6">Kelas 6</option>
                            </select>
                        </th>
                    </tr>
                    </table>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" id="simpan" value="SIMPAN DATA">
                </div>
            </form>
        </div>
    <script>
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;
    if (username.value != "" && password.value != "" && repassword.value != ""){
        return true;
    }else{
        alert('Username, Password, dan Repassword harus di isi !');
        return false;
    }   
        </script>
    </body>
</html>
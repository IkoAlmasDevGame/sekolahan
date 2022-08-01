<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../java/school.js"></script>
    <link rel="stylesheet" href="../css/stylesheet_l.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login My School</title>
</head>
    <body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    <header class="header">
        <div class="controls-menu">
        <h1>Login My School Indonesia</h1>
            <form action="../login/db_login/user.php" method="POST">
                <div class="form-controls">  
                    <div class="form-img-center">
                        <i class="material-icons" style="font-size:12vh;">school</i>
                    </div>
                        <table class="table table-secondary table table-striped-columns">
                    <tr>
                        <th><label for="username">Username :</label></th>
                        <th><input type="text" id="username" name="username" class="form-control" placeholder="masukkan username anda"></th>
                    </tr>
                    <tr>
                        <th><label for="password">Password :</label></th>
                        <th><input type="password" id="password" name="password" class="form-control" placeholder="masukkan password anda"></th>
                    </tr>
                    </table>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Login MySchool" id="btn-login">
                    <a href=../login/login.php type="button" class="btn btn-primary">Register MySchool</a>
                </div>
            </form>
        </div>
        </header>
    <script>
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;		
    if (username.value != "" && password.value != "") {
        return true;
    }else{
        alert('Username dan Password harus di isi !');
        return false;
    }
    </script>
    </body>
</html>
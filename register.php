<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
	echo "<script>alert('Pendaftaran Berhasil!');;window.location='login.php';</script>";
	}	else	{
	echo "<script>alert('Pendaftaran gagal, silahkan dicek kembali Username & Email');;window.location='register.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register ASTube</title>

    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body background="img/bg.jpg" style="background-image:url(img/bg.jpg); background-size:cover;">
    <header>
        <div style="height:80px; background:white">
            <div class="container">
                <div class="row">
                    <div class="col-md-5"> <a href="home.php"><img src="img/back.png" class="img img-responsive" width="50" height="60"></a>
                    </div>
                    <div class="col-md-3">
					<img src="img/logo.png" width="130" height="50" class="img img-responsive">
					</div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
					<img src="img/logo.png" width="300" height="110" class="img img-responsive"><br>
                    <h4><b>AS TUBE MERUPAKAN WEBSITE VIDIO<br>YANG RAMAH UNTUK SEGALA UMUR LHO!</b></h4>
					<b>Ayo jelajahi ASTUBE! Beragam kategori dengan<br>video pilihan yang menarik untuk ditonton!<br>
					Unggah Video menarik kalian dan bagikan kepada pengunjung ASTUBE lainnya!</b>
                </div>
				<div class="col-md-3" style="position:fixed;right:100px;">
				<form action="" method="POST">
				<br>
				<table bgcolor="grey" width="300" border="4">
				<td height="30" bgcolor=""><b>Sign Up</b></td>
				<tr>
				<td><input class="form-control" type="text" name="name" placeholder="Nama kamu" required /></td>
				</tr>
				<tr>
				<td><input class="form-control" type="text" name="username" placeholder="Username" required /></td>
				</tr>
				<tr>
				<td><input class="form-control" type="email" name="email" placeholder="Alamat Email" required /></td>
				</tr>
				<tr>
				<td><input class="form-control" type="password" name="password" placeholder="Password" required /></td>

<tr>
<td>
            <input type="submit" class="btn btn-success" name="register" value="Daftar" /></td>
</tr>
<tr><td></td>
			</tr>
			<tr>
			<td class="form-group"><a href="login.php"><small><b>Sudah Punya akun? Login disini!</b></small></a></td>
			</tr>
</table>
		</div>
            </div>
        </div>
    </section>

</body>
</html>
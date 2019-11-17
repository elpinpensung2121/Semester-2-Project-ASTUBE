<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php?paging=0");
        }
    if($user){
        if(!$tambahdata ){
	echo "<script>alert('Login silahkan cek kembali Username & Password!');;window.location='login.php';</script>";
	}
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASTube Login</title>

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
				<div class="col-md-3">
				<form action="" method="POST">
				<br>
				<table bgcolor="grey" width="300" border="4">
				<td height="30" bgcolor=""><b>Sign In</b></td>
				<tr>
				<td><input class="form-control" type="text" name="username" placeholder="Username atau email" required /></td>
				</tr>
				<tr>
				<td><input class="form-control" type="password" name="password" placeholder="Password" required /></td>

<tr>
<td>
            <input type="submit" class="btn btn-success" name="login" value="Masuk" /></td>
</tr>
<tr><td></td>
			</tr>
			<tr>
			<td class="form-group"><a href="register.php"><small><b>Belum daftar? Daftar Sekarang disini.</b></small></a><br></td>
			</tr>
</table>
        </form>
		
		</div>
            </div>
        </div>
    </section>

</body>
</html>
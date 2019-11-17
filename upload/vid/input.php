<?php require_once("../../auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to ASTube!</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
	<style type="text/css">
	.nav{}
    .nav-link{}
	</style>
	<script src="../../js/jquery-3.3.1.min.js"></script>
 <script src="../../js/bootstrap.min.js"></script>
 <script src="../../js/popper.min.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">


 <!--Brand-->
 <a class="navbar-brand col-md-2 mx-6 px-0" href="./home.html">
 <img class="col-8 px-0" src="../../img/logo.png" alt="Astube" />
 </a>
 <!-- Toggler/collapsibe Button -->
 <button class="navbar-toggler" type="button"
 data-toggle="collapse"
 data-target="#navbarSupportedContent"
 aria-controls="navbarSupportedContent"
 aria-expanded="false"
 aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <!-- Navbar links -->
 <div class="collapse navbar-collapse"
 id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button"
                data-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item"
               href="#">News</a></li>
                <li><a class="dropdown-item"
               href="#">TV</a></li>
                <li><a class="dropdown-item"
               href="#">Music</a></li>
                <li><a class="dropdown-item"
               href="#">Games</a></li>
                </ul>
                </li>
          </ul>
                <div class="col-md-2">
                <div class="row">
                    <div> <img class="img img-responsive rounded-circle" width="40" src="../../img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
					Welcome <b><?php echo  $_SESSION["user"]["name"] ?></b>
                    <?php echo $_SESSION["user"]["email"] ?>
                    <p><a href="../../logout.php">Logout</a></p>
</div>
                </div>
            </div>
                </div>
                </nav>
                <div class="container-fluid mb-5">
<div class="container mt-5">

<form action="proses_vid.php" method="post" enctype="multipart/form-data">
        <table width="383" border="0">
<?php
include'../../koneksi.php';
$sql_kategori="select * from kategori order by id_kategori";
$kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());

$owner = $_SESSION["user"]["name"];
?>
          <tr>
            <td width="92"><small><strong>Kategori</strong></small></td>
            <td width="10">:</td>
            <td width="267"><select name="kategori">
              <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
   {
?>
              <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
              <?php
  }
?>
            </select></td>
          </tr>
          <tr>
            <td><small><strong>Nama Video </strong></small></td>
            <td>:</td>
            <td><input type="text" name="nama_video"></td>
          </tr>
          <tr>
            <td><small><strong>Deskripsi</strong></small></td>
            <td>:</td>
            <td><textarea name="deskripsi" id="deskripsi"></textarea></td>
          </tr>
          
          <tr>
            <td><small><strong>video</strong></small></td>
            <td>:</td>
            <td><input type="file" name="fupload" id="nama_file"></td>
          </tr>
		  <tr>
            <td><small><strong>Thumbnail</strong></small></td>
            <td>:</td>
            <td><input type="file" name="thumbs" id="nama_thumb"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
          </form>
        </div>
    
    </div>
</div>
<script>
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
</body>
</html>
<?php
require_once("../../auth.php");
include "../../koneksi.php";
include"../config/fungsi.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$lokasi_thumb = $_FILES['thumbs']['tmp_name'];
$nama_thumb   = $_FILES['thumbs']['name'];


$nama_video		= $_POST['nama_video'];
$kategori		= $_POST['kategori'];
$deskripsi		= $_POST['deskripsi'];

$owner 			= $_SESSION["user"]["name"];




if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

$query = mysql_query ('insert into video (nama_video,kategori,deskripsi,tgl_masuk,video,thumb,owner)values("","'.$nama_video.'","'.$kategori.'","'.$deskripsi.'","'.date('Y-m-d').'","'.$nama_file.'","'.$nama_thumb.'","'.$owner.'")');
} else {
$query=mysql_query('insert into video (id_video,nama_video,kategori,deskripsi,tgl_masuk,video,thumb,owner) values("","'.$nama_video.'","'.$kategori.'","'.$deskripsi.'","'.date('Y-m-d').'","'.$nama_file.'","'.$nama_thumb.'","'.$owner.'")');
}
if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='input.php'; </script>\n";
}

?>
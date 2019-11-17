
<?php 
include "../koneksi.php";
?>

<?php

$id_produk  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from produk where id_produk='$id_produk'");

} else {
$query = mysql_query("delete from produk where gambar='$foto'");
unlink("produk/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='produk.php'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='produk.php'; </script>\n";}


?>

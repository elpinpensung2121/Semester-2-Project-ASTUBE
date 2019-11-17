<?php
include "../koneksi.php";
include"../config/fungsi_gambar.php";




extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 

  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE produk SET 
									
                                    kategori	 		= '$_POST[kategori]',
                                    nama_produk			= '$_POST[produk]',
                                    deskripsi	 		= '$_POST[deskripsi]',
                                    harga	     		= '$_POST[harga]',
                                    stock			   	= '$_POST[stock]',
                                    dibeli		 		= '$_POST[dibeli]'
                                    WHERE id_produk		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE produk SET 
									 kategori	 		= '$_POST[kategori]',
                                    nama_produk			= '$_POST[produk]',
                                    deskripsi	 		= '$_POST[deskripsi]',
                                    harga	     		= '$_POST[harga]',
                                    stock			   	= '$_POST[stock]',
                                    dibeli		 		= '$_POST[dibeli]',
                                    gambar		 		= '$nama_file'
                                    WHERE id_produk		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='produk.php'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='produk.php'; </script>\n";
}
?>


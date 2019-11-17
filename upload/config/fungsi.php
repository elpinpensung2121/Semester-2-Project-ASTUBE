<?php
function UploadFile($fupload_name){
  //direktori file
  $vdir_upload = "../../video/";
  

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vdir_upload.$_FILES['fupload']['name']);
move_uploaded_file($_FILES["thumbs"]["tmp_name"], $vdir_upload.$_FILES['thumbs']['name']);
}

?>

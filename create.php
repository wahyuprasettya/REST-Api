<?php
require_once('koneksi.php');

$id_penyakit = $_POST['id_penyakit'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$foto = $_POST['foto'];


if(!$id_penyakit || !$nama || !$deskripsi || !$foto){
  echo json_encode(array('message'=>'required field is empty.'));
}else{
$query = mysqli_query($CON, "INSERT INTO tbl_penyakit VALUES ('$id_penyakit','$nama','$deskripsi','$foto')");
if($query){
    echo json_encode(array('message'=>' data successfully added.'));
  }else{
    echo json_encode(array('message'=>' data failed to add.'));
  }
}
?>

<?php
require_once('koneksi.php');
// $nim = $_POST['nim'];
// $name = $_POST['name'];
// $address = $_POST['address'];
// $gender = $_POST['gender'];

$id_penyakit = $_POST['id_penyakit'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$foto = $_POST['foto'];

if(!$id_penyakit || !$nama || !$deskripsi || !$foto){
  echo json_encode(array('message'=>'required field is empty.'));
}else{
$query = mysqli_query($CON, "UPDATE tbl_penyakit SET nama='$nama', deskripsi='$deskripsi', foto='$foto' WHERE id_penykait = '$id_penyakit'");
if($query){
    echo json_encode(array('message'=>'data successfully updated.'));
  }else{
    echo json_encode(array('message'=>' data failed to update.'));
  }
}
?>
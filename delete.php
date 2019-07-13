<?php
require_once('koneksi.php');
$id_penyakit = $_GET['id_penyakit'];
if(!$id_penyakit){
  echo json_encode(array('message'=>'required field is empty'));
}else{
$query = mysqli_query($CON, "DELETE FROM tbl_penyakit WHERE id_penyakit='$id_penyakit'");
if($query){
    echo json_encode(array('message'=>' data successfully deleted.'));
  }else{
    echo json_encode(array('message'=>' data failed to delete.'));
  }
}
?>

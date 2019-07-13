<?php
require_once('koneksi.php');
$result = array();
$query = mysqli_query($CON,"SELECT * FROM tbl_penyakit ORDER BY id_penyakit DESC");
while($row = mysqli_fetch_assoc($query)){
  $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>
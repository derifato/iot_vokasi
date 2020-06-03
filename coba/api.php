<?php 
include("koneksi.php");

$sql="SELECT * From lampu";
$result=array();
$query=mysqli_query($conn, $sql);

while($row =mysqli_fetch_array($query)){
	array_push($result, array('id_lampu' =>$row['id_lampu'],'nama_lampu'=>$row['nama_lampu'],'status'=>$row['status']  ));
 }
 echo json_encode(array("result"=>$result));
 ?>

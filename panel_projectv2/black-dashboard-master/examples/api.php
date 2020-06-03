<?php 
include("koneksi.php");

$sql="SELECT * From lampu";
$result=array();
$query=mysqli_query($conn, $sql);

while($row =mysqli_fetch_array($query)){
	array_push($result, array('id_lampu' =>$row['id_lampu'],
		'nama_lampu'=>$row['nama_lampu'],
		'status'=>$row['status'],
		'mode'=>$row['mode'],
		'jam_hidup'=>$row['jam_hidup'],
		'menit_hidup'=>$row['menit_hidup'],
		'detik_hidup'=>$row['detik_hidup'],
		'jam_mati'=>$row['jam_mati'],
		'menit_mati'=>$row['menit_mati'],
		'detik_mati'=>$row['detik_mati']));
 }
 echo json_encode(array("result"=>$result));
 ?>

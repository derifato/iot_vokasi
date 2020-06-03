<?php
include("koneksi.php");

$id = $_POST['id'];
$jam1 = $_POST['jam1'];
$menit1 = $_POST['menit1'];
$jam0 = $_POST['jam0'];
$menit0 = $_POST['menit0'];
$detik1 = $_POST['detik1'];
$detik0 = $_POST['detik0'];


$sql = "UPDATE lampu SET jam_hidup = '$jam1', menit_hidup = '$menit1', detik_hidup = '$detik1', jam_mati = '$jam0', menit_mati = '$menit0', detik_mati = '$detik0' WHERE id_lampu = '$id'";
$query = mysqli_query($conn, $sql);

if($query){
	header('Location: home_admin_auto.php');
}else{
	die("Gagal Menyimpan Perubahan !!!");
}
?>
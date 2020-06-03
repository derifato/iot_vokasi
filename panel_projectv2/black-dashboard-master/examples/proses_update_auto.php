<?php 

include("koneksi.php");
date_default_timezone_set("Asia/Jakarta");
$waktu=date("Y-m-d h:i:sa");
		$status= $_GET['status'];


	$sql = "UPDATE lampu SET status='$status' WHERE id_lampu='1'";
	$query = mysqli_query($conn,$sql);

$sql1 ="INSERT INTO log_lampu VALUES ('$waktu','','Lampu Kerto','$status') ";
	$query1 = mysqli_query($conn, $sql1);

	if ($query&&$query1) {
		header('Location: home_admin_auto.php');
	}else{
		die("Gagal menyimpan perubahan...");
	}


 ?>

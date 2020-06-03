<?php 

include("koneksi.php");

		$status= $_GET['status'];

	$sql = "UPDATE lampu SET status='$status' WHERE id_lampu='2'";
	$query = mysqli_query($conn,$sql);


	if ($query) {
		header('Location: home_admin_auto.php');
	}else{
		die("Gagal menyimpan perubahan...");
	}


 ?>
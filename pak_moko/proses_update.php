<?php 

include("koneksi.php");

		$status= $_GET['status'];

	$sql1 = "UPDATE lampu SET status='$status' WHERE id_lampu='1'";
	$query1 = mysqli_query($conn,$sql1);


	if ($query1) {
		header('Location: index.php');
	}else{
		die("Gagal menyimpan perubahan...");
	}


 ?>
<?php

include("koneksi.php");

    $status= $_GET['status'];
    
	// buat query update
	$sql1 = "UPDATE lampu SET status_aktual='$status' WHERE id_lampu='1'";
	$query1 = mysqli_query($conn, $sql1);

	// buat query update
	
	// apakah query update berhasil?
	if( $query1) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	


?>
<?php

include("koneksi.php");

    $status= $_GET['status2'];
    
	// buat query update
	$sql = "UPDATE lampu SET status_aktual='$status' WHERE id_lampu='2'";
	$query = mysqli_query($conn, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	


?>
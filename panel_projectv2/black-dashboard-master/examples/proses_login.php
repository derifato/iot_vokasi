<?php  
include("koneksi.php");



 $name=$_POST['username'];
 $pass=$_POST['password'];



	$sql = mysqli_query($conn, "SELECT * FROM tabel_login where username='$name'");
	$data = mysqli_fetch_array($sql);


	if($name==$data['username'] && $pass==$data['password']){
		if ($data['status']=="admin") {
			header('Location: menu.php');
		}
		elseif ($data['status']=="tamu") {
			header('Location: home_tamu.php');
		}
 		
 	}
 	else{
 		
 		echo "<script>alert('Username atau Password yang Anda Masukan salah');history.go(-1)</script>";
	
 	}
?>
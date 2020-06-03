<?php
  include("koneksi.php");

  $sql1 = "UPDATE lampu SET mode='manual'";
  $query1 = mysqli_query($conn,$sql1);
  if ($query1) {
    header('Location: home_admin_manual.php');
  }else{
    die("Gagal menyimpan perubahan...");
  }
  ?>
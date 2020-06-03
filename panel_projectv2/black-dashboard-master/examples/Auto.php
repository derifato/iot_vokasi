<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>PANEL</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <script src="../assets/js/jquery-latest.js"></script> 

  <style type="text/css">
    .border{
      border: 2px solid black;
    }
    .padding{
    padding-bottom: 15px;
  }
  </style>

</head>

<body class="">
  <a class="btn btn-primary  btn-round ss" href="index.php" >Keluar</a>
<H2>&nbsp&nbspPANEL MODE : ADMIN</H2>

    <div class="sidebar">
      <div class="sidebar-wrapper" class="logo">
<div class="aktual">

        <?php
          include("koneksi.php");
              $lampu1 = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='1'");
              while($row1 = mysqli_fetch_array($lampu1)){
                $hasil1 = $row1["status"];
                $identitas1 = $row1["id_lampu"];
              }
              $lampu2 = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='2'");
              while($row2 = mysqli_fetch_array($lampu2)){
                $hasil2 = $row2["status"];
                $identitas2 = $row2["id_lampu"];
              }

          ?>

          <h2 > <font color="#1e1e2f"><center>Stopkontak 1</center>  </font> </h2>
              <center><a href="Auto.php?id=<?=$identitas1?>" class="btn btn-info">Atur Jadwal</a>
          <hr size="200px" color="red">
              
          <h2 > <font color="#1e1e2f"><center>Stopkontak 2</center>  </font> </h2>
              <center><a href="Auto.php?id=<?=$identitas2?>" class="btn btn-info">Atur Jadwal</a>

</div> 
      </div>
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">


  <?php
  include 'koneksi.php';
      $id   = $_GET['id'];
      $sql  = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='$id'");
      $row  = mysqli_fetch_array($sql);
  ?>       

  <center><h1><B>Timer Lampu</B></h1>
    <form action="TimerProses.php" method="POST">
          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id_lampu'];?>">
          <div class="form-group">
            <table width="286">
              <tr>
                <td width="150"><label for="jam">Waktu Nyala</label></td>
                <td width="62"><input type="text" class="form-control" id="jam1" name="jam1" maxlength="2" value="<?php echo $row['jam_hidup'];?>"></td>
                <td>:</td>
                <td width="62"><input type="text" class="form-control" id="menit1" name="menit1" maxlength="2" value="<?php echo $row['menit_hidup'];?>"></td>
                <td width="62"><input type="text" class="form-control" id="detik1" name="detik1" maxlength="2" value="<?php echo $row['detik_hidup'];?>"></td>
              </tr>
              <tr>
                <td width="150"><label for="jam">Waktu Mati</label></td>
                <td width="53"><input type="text" class="form-control" id="jam0" name="jam0" maxlength="2" value="<?php echo $row['jam_mati'];?>"></td>
                <td>:</td>
                <td width="53"><input type="text" class="form-control" id="menit0" name="menit0" maxlength="2" value="<?php echo $row['menit_mati'];?>"></td>
                <td width="53"><input type="text" class="form-control" id="detik0" name="detik0" maxlength="2" value="<?php echo $row['detik_mati'];?>"></td>
              </tr>
            </table>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="home_admin_auto.php" class="btn btn-warning">Kembali</a>
          </div>
        </form>  
</body>

</html>
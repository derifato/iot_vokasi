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
    <script>
    var refreshId = setInterval(function()
    {
       $('#responsecontainer').load('Refresh.php');
    }, 100);
  </script>

  <style type="text/css">
    .padding{
      padding-top: 20px;
    }
  </style>

</head>

<body class="">
  <a class="btn btn-primary  btn-round ss" href="index.php" >Keluar</a>
<H2>&nbsp&nbspPANEL MODE : ADMIN</H2>


  <div class="main-panel">
    <div class="padding">
      <center><h1><B>PILIH MODE</B></h1>
          <table width="600">
            <tr>
              <td><center><a href="mode_manual.php" class="btn btn-info"><img src="Klik.png" height="150"><br>Manual</a></td>
              <td><center><a href="mode_auto.php" class="btn btn-info"><img src="Setting.png" height="150"><br>Auto</a></td>
            </tr>
          </table>
          <br><br><br>
          <center>
            <font size="6" >
                Mode saat ini :
                 <?php


        include("koneksi.php");

        $sql = "SELECT * FROM lampu WHERE id_lampu='1'";
        $result = array();
        $query = mysqli_query($conn, $sql);
         
        while($row = mysqli_fetch_array($query)){
            echo "<font color='white'>".$row['mode']."</font>";
        }



        ?>    
          </font>    
          </center>
    </div>
  </div> 

</body>

</html>
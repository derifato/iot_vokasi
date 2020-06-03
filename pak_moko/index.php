<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>PANEL</title>
</head> 
<body>

<center>
	<h1> Pengendali Lampu Jarak Jauh Menggunakan Internet </h1><br>
  <div class="row">
    <div class="col">
    	<h2><b>Lampu 1</b></h2> <br>
      <a href="proses_update.php?status=on"><button type="button" class="btn btn-success">Nyalakan lampu</button></a>
	 <br><br>
	 <a href="proses_update.php?status=off"><button type="button" class="btn btn-danger">Matikan lampu</button></a>
	 <br>

	 	 <h2>Status Lampu 1(Aktual)</h2>

<?php


include("koneksi.php");

$sql = "SELECT * FROM lampu WHERE id_lampu='1'";
$result = array();
$query = mysqli_query($conn, $sql);
 
while($row = mysqli_fetch_array($query)){
    echo "<h2>[".$row['status_aktual']."]</h2>";
    if ($row['status_aktual']=="nyala") {
    	echo "<img src='nyala.jpg'  height='169'>";
    	
    }
    else{
    	echo "<img src='mati.png'  height='169'>";
    	
    }
}



?>

    </div>
    <div class="col">
      	<h2><b>Lampu 2</b></h2> <br>
      <a href="proses_update2.php?status=on"><button type="button" class="btn btn-success">Nyalakan lampu</button></a>
	 <br><br>
	 <a href="proses_update2.php?status=off"><button type="button" class="btn btn-danger">Matikan lampu</button></a>
	 <br>
	 	 <h2>Status Lampu 2 (Aktual)</h2>

<?php


include("koneksi.php");

$sql2 = "SELECT * FROM lampu WHERE id_lampu='2'";
$result2 = array();
$query2 = mysqli_query($conn, $sql2);
 
while($row2 = mysqli_fetch_array($query2)){
    echo "<h2>[".$row2['status_aktual']."]</h2>";
    if ($row2['status_aktual']=="nyala") {
    	echo "<img src='nyala.jpg'  height='169'>";
    
    }
    else{
    	echo "<img src='mati.png'  height='169'>";
    	
    }
}



?>
    </div>
  </div>
</div>
	 
	
	

</center>
</body>
</html>
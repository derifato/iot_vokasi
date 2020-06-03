<?php
include 'koneksi.php';
    $sql1  = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='1'");
    $rowa  = mysqli_fetch_array($sql1);
    $sql2  = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='2'");
    $rowb  = mysqli_fetch_array($sql2);
?>
<style type="text/css">
  .border{
    border: 2px solid black;
  }
  .padding{
    padding-bottom: 15px;
  }
</style>
<center>
            <?php
            date_default_timezone_set("Asia/Jakarta");
            $waktu=date("Y-m-d || h : i : s a");
        echo "<h5>".$waktu."</h5>";
        ?></center>
    <div class="col-md-12">
      <div class="row content">
        <div class="col-md-6 padding">
          <div class="col-md-12 border">
          <table>
            <tr>
              <td width="150" colspan="2">
                <table height="270" width="160">
                  <tr>
                    <td><h3><U><center>WAKTU NYALA</U></h3>
                        <center><h1><?php echo $rowa['jam_hidup'].".".$rowa['menit_hidup'];?></h1></center>
                    </td>
                  </tr>
                  <tr>
                    <td><h3><U><center>WAKTU MATI</U></h3>
                        <center><h1><?php echo $rowa['jam_mati'].".".$rowa['menit_mati'];?></h1></center>
                    </td>
                  </tr>
                </table>
              </td>
              <td width="500">
                <center>   
                <h2 ><font color="yellow">Status Stopkontak 1</font></h2>
                <?php
                  include("koneksi.php");
                  $sql = "SELECT * FROM lampu WHERE id_lampu='1'";
                  $result = array();
                  $query = mysqli_query($conn, $sql);
                   
                  while($row = mysqli_fetch_array($query)){
                      echo "<h4>[".$row['status_aktual']."]</h4>";
                      if ($row['status_aktual']=="nyala") {
                        echo "<img src='nyala1.png'  height='169'><br>"; 
                      }else{
                        echo "<img src='mati1.png'  height='169'><br>"; 
                      }
                  }
                  ?>    
                </center>
              </td>
            </tr> 
          </table>
          </div>
        </div> 

        <div class="col-md-6">
          <div class="col-md-12 border">
          <table>
            <tr>
              <td width="150" colspan="2">
                <table height="270" width="160">
                  <tr>
                    <td><h3><U><center>WAKTU NYALA</U></h3>
                        <center><h1><?php echo $rowb['jam_hidup'].".".$rowb['menit_hidup'];?></h1></center>
                    </td>
                  </tr>
                  <tr>
                    <td><h3><U><center>WAKTU MATI</U></h3>
                        <center><h1><?php echo $rowb['jam_mati'].".".$rowb['menit_mati'];?></h1></center>
                    </td>
                  </tr>
                </table>
              </td>
              <td width="350">
                <CENTER>
                <h2 ><font color="yellow">Status Stopkontak 2</font></h2>
                <?php
                  include("koneksi.php");
                  $sql2 = "SELECT * FROM lampu WHERE id_lampu='2'";
                  $result2 = array();
                  $query2 = mysqli_query($conn, $sql2);
                     
                  while($row2 = mysqli_fetch_array($query2)){
                        echo "<h4>[".$row2['status_aktual']."]</h4>";
                        if ($row2['status_aktual']=="nyala") {
                          echo "<img src='nyala1.png'  height='169'><br>";
                        }else{
                          echo "<img src='mati1.png'  height='169'><br>";  
                        }
                  }
                  ?>
                  </CENTER>
              </td>      
            </tr>
          </table>
          </div>
        </div>
      </div>
    </div>
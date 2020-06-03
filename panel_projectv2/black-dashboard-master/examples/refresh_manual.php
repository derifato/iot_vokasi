<div class="col-md-12">
                  <div class="row content">
                    <div class="col-md-6 padding">
                      <div class="col-md-12 border">
                      <table>
                        <tr>
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

                    <div class="col-md-6 padding">
                      <div class="col-md-12 border">
                      <table>
                        <tr>
                          <td width="500">
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
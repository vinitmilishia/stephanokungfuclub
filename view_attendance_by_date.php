<?php
session_start();
include './connection.php';
include './header.php';
include './sidemenu.php';
include './navbar_top.php';
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php	
                                
$c=new connection1();
$c->connect();
$c->sql="select * from attendance";
$c->getdata($c->sql);
while($row=mysql_fetch_array($c->res))
{
    $timestamp = $row['attendance_date'];
    $splitTimeStamp = explode(" ",$timestamp);
    $date = $splitTimeStamp[0];
    $time = $splitTimeStamp[1];
    
    $c2=new connection1();
    $c2->connect();
    $c2->sql="update attendance set
    attendance_date='".$date."'
    where attendance_id='".$row['attendance_id']."'";
   
   $c2->savedata($c2->sql);
    
} 
?>
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Attendance by Date</h3>
              </div>
            </div>
              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
            <div class="clearfix"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Attendance on <small><?php echo $_POST['attendance_date']; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="piechart" width="400" height="400"></canvas>
                            <?php	
                                
                                $c=new connection1();
                                $c->connect();
                                $c->sql="select * from attendance where attendance_date='".$_POST['attendance_date']." 00:00:00' order by attendance_class_id";
                                $c->getdata($c->sql);
                                while($row=mysql_fetch_array($c->res))
                                {
                                    $c4=new connection1();
                                    $c4->connect();
                                    $c4->sql="SELECT COUNT(*) FROM attendance WHERE attendance_class_id=".$row['attendance_class_id']."";
                                    $c4->getdata($c4->sql);
                                    $no=mysql_num_rows($c->res);
                                    
                                } 
                              ?>
                        <script type="text/javascript">
                          // Get the context of the canvas element we want to select
                          var ctx = document.getElementById("piechart").getContext("2d");
                          var data = [{
                              value: <?php echo $no; ?>,
                              color:"#F7464A",
                              highlight: "#FF5A5E",
                              label: "Red"
                          },
                          {
                              value: 50,
                              color: "#46BFBD",
                              highlight: "#5AD3D1",
                              label: "Green"
                          },
                          {
                              value: 100,
                              color: "#FDB45C",
                              highlight: "#FFC870",
                              label: "Yellow"
                          }];

                          var options = {
                            animateScale: true
                          };

                          var myNewChart = new Chart(ctx).Pie(data,options);

                        </script>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
        <!-- /page content -->

<?php 
include './footer.php';
include './jscript.php';
?>
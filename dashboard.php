<?php 
error_reporting(E_ALL ^ E_DEPRECATED);

include 'connection.php';


$c=new connection1();
$c->connect();
$c->sql="select * from student";
$c->getdata($c->sql);
$no_stud=mysql_num_rows($c->res);

$c1=new connection1();
$c1->connect();
$c1->sql="select payment_amount from payment";
$c1->getdata($c1->sql);
while($row=mysql_fetch_array($c1->res))
    {
        $total_amount=0;
        $total_amount=$total_amount+$row['payment_amount'];
        
    }

$c2=new connection1();
$c2->connect();
$c2->sql="select * from class";
$c2->getdata($c2->sql);
$no_class=mysql_num_rows($c2->res);
?>
<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Students</span>
              <div class="count"><?php echo $no_stud; ?></div>
              
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-dollar"></i> Total Income</span>
              <div class="count"><?php echo $total_amount; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>0% </i> Pending Payments</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar-o"></i> Total Classes</span>
              <div class="count green"><?php echo $no_class; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> 2 </i> per Day</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-check-square-o"></i> Average Attendance</span>
              <div class="count">65%</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

        <br />

          <div class="row">
              

            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Students as per Rank</h2>
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
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p></p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Rank</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Strength</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>White Blet </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Yellow Belt </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Brown Belt </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Black Belt</p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Other Belt </p>
                            </td>
                            <td>25%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


              
              <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Schedule meeting with XYZ </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create Invoice of payment</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
          </div>


              <div class="row">
                
             
          </div>
        </div>
        <!-- /page content -->
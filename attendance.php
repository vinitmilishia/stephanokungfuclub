<?php
session_start();
include './connection.php';
include './header.php';
include './sidemenu.php';
include './navbar_top.php';
error_reporting(E_ALL ^ E_DEPRECATED);
?>
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Attendance</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-graduation-cap"></i> Show Attendance By Date</h2>
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
                      
                    <form class="form-horizontal form-label-left" method="post" action="view_attendance_by_date.php">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Select Date</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="date" class="form-control" name="attendance_date"/>
                        </div>
                      </div>
                        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                          <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Show</button>
                        </div>
                      </div>
                    </form>
                      
                  </div>
                </div>
              </div>

             
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-edit"></i> Show Attendance By Class</h2>
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
                      
                     <form class="form-horizontal form-label-left" method="post" action="view_attendance_by_class.php">
                      <div class="form-group">  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select class</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <select class="form-control" name="class_id">
                              <option>Select Day...</option>
                              <?php	

                                $c=new connection1();
                                $c->connect();
                                $c->sql="select * from class order by class_level";
                                $c->getdata($c->sql);
                                while($row=mysql_fetch_array($c->res))
                                {
                                  echo "<option value=".$row['class_id'].">".$row['class_day']." ".$row['class_time']." (".$row['class_level'].")</option>";
                                } 
                              ?>
                          </select>
                        </div>
                      </div>
                        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                          <button type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>
                    </form> 
                      
                  </div>
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
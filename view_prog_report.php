<?php
session_start();
include './connection.php';
include './header.php';
include './sidemenu.php';
include './navbar_top.php';
error_reporting(E_ALL ^ E_DEPRECATED);
$sid=$_REQUEST['stud_id'];
?>
<?php
$c=new connection1();
$c->connect();

$c->sql="select * from student where stud_id='".$sid."'";
$c->getdata($c->sql);
while($row = mysql_fetch_array($c->res))
{
   $stud_name=$row['stud_name'];
   $stud_rec_rank=$row['stud_rank_id'];
}
 ?>
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Progress Report</h3>
              </div>
            </div>
              
            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Progress Report Card of <?php echo $stud_name; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a href="prog_report.php"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div id="delete_div"> </div>
                  <div class="x_content">
                      <?php
                        $c=new connection1();
                        $c->connect();

                        $c->sql="select student_progress.*,rank.* from student_progress inner join rank on student_progress.stud_prog_rank_id=rank.rank_id where stud_prog_stud_id='".$sid."' order by stud_prog_rank_date desc";
                        $c->getdata($c->sql);
                        while($row = mysql_fetch_array($c->res))
                        {
                      ?>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tile-stats">
                              <div class="icon"><i class="fa fa-trophy"></i>
                              </div>
                              <div class="count"><?php echo $row['rank_belt_color']; ?></div>

                              <h3><?php echo $row['stud_prog_rank_date']; ?></h3>
                              <p>Progress : <?php echo $row['rank_requirement']; ?></p>
                        </div>
                      </div>
                        <?php } ?>
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
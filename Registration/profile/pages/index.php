<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['regno'])){
    require_once('db-connect.php');
    $cid=$_SESSION['regno'];
    $sql="select * from registered_users where cid='$cid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $photo=$row['photo'];
    ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PLACEMENT CELL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
<div class="container container-fluid text-center">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            
                <a class="navbar-brand" href="index.html"><h5 class="text-primary" style="font-family: arial;">PLACEMENT CELL</h5></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>DOMAIN</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress  active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>COMPANY</strong>
                                        <span class="pull-right text-muted">50% Complete</span>
                                    </p>
                                    <div class="progress  active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                       
                       
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src="uploads/<?php echo $photo; ?>" style="border-radius: 50%" height="85px" width="70px"/>
             </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['cname']; ?></a>
                        </li>
                        <?php $sql1="select email from candidate where cid='$cid'";
                              $result1=mysqli_query($con,$sql1);
                              $row1=mysqli_fetch_array($result1); ?>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i><?php echo $row1['email'];?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

          
            <!-- /.navbar-static-side -->
        </nav>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Topics</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Learn by Domain</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
                
                
                
                 <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Topics</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Learn by Company</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
              
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                       
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
                    <div class="panel panel-fluid">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Quiz Test Results
                            <div class="pull-right">
                                <div class="btn-group">
                                    
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Quiz id</th>
                                                    <th>Date</th>
                                                    <th>Subject</th>
                                                    <th>Results</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql="select * from quizresult where cid='$cid'";
                                                $result=mysqli_query($con,$sql);
                                                $row=mysqli_fetch_array($result);
                                                $num=mysqli_num_rows($result);
                                                while($num!=0){
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['chid']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['subjectname']; ?></td>
                                                    <td><?php echo $row['result']; ?></td>
                                                </tr>
                                                <?php 
                                                    $row=mysqli_fetch_array($result);
                                                    $num--;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
         
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            
            
            
            
                   <div class="row">
                <div class="col">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                       
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
                    <div class="panel panel-fluid">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Mock Test Results
                            <div class="pull-right">
                                <div class="btn-group">
                                  
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Mock id</th>
                                                    <th>Date</th>
                                                    <th>Subject</th>
                                                    <th>Results</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql="select * from quizresult where cid='$cid'";
                                                $result=mysqli_query($con,$sql);
                                                $row=mysqli_fetch_array($result);
                                                $num=mysqli_num_rows($result);
                                                while($num!=0){
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['chid']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['subjectname']; ?></td>
                                                    <td><?php echo $row['result']; ?></td>
                                                </tr>
                                                <?php 
                                                    $row=mysqli_fetch_array($result);
                                                    $num--;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
         
                <!-- /.col-lg-4 -->
            </div>
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    
    
    
    	<!-- start footer Area -->		
			 <!-- Footer -->
			 <footer class="page-footer text-primary font-lg bg-light" >

				<!-- Copyright -->
				<div class="footer-copyright text-center py-3">© 2018 Copyright:
				  <a href="https://collegedunia.com/college/13147-cv-raman-college-of-engineering-cvrce-bhubaneswar" target="blank"> cvrce.edu.in</a>
				</div>
				<!-- Copyright -->
	  
			  </footer>
			  <!-- Footer -->
			<!-- End footer Area -->	
    
    
    
    
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    </div>
</body>
</html>
<?php } ?>
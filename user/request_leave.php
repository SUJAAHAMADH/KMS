<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/


-->

<?php
session_start();
 $user=	$_SESSION['user'];
    if(!isset($_SESSION['user']) ){
      header('Location:../login.php');
    }
?>

<?php

include"../db.php";

$user=	$_SESSION['user'];




$query="select * from users where username='$user'";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result))
{

     $id=$row['uid'];
	
	
		
$_SESSION['id']=$id;



}





?>






<!DOCTYPE HTML>
<html>
<head>
<title>User Dashboard | KMS </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index2.php">KMS</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge"><?php echo $_SESSION['task'] ?></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						
						
						<li class="m_2"><a href="assign_tasks.php"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger"><?php echo $_SESSION['task'] ?></span></a></li>
						
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="user_profile_update.php"><i class="fa fa-user"></i> Profile</a></li>
						
						
					
						<li class="divider"></li>
						
						<li class="m_2"><a href="../logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-md nav_icon"></i> Profile<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="user_profile.php">View My profile</a>
                                </li>
                                <li>
                                    <a href="user_profile_update.php">Update My Profile</a>
                                </li>
								<li>
                                    <a href="view_other_profile.php">View others profile</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i> Leave<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="request_leave.php">Request Leave </a>
                                </li>
                                <li>
                                    <a href="leave_response.php">Leave Responses</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forum_home.php"><i class="fa fa-envelope nav_icon"></i>Visit forum</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
						
						 <li>
						  <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Chat<span class="fa arrow"></span></a>
						   <ul class="nav nav-second-level">
						    <li>
                            <a href="send_message.php"><i class="fa fa-envelope nav_icon"></i>Send Messages</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
						 <li>
                            <a href="inbox.php"><i class="fa fa-envelope nav_icon"></i>Inbox</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
						    </ul>
							</li>
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Projects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="view_finished_pro.php">View Finished projects</a>
                                </li>
                                <li>
                                    <a href="finished_pro.php">Finished projects</a>
                                </li>
                                <li>
                                    <a href="upload_learn.php">Upload Learning Materials</a>
									
                                </li>
								 <li>
                                    <a href="view_learn.php">View Learning Materials</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="assign_tasks.php"><i class="fa fa-table nav_icon"></i>View Assigned Tasks</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
						     <li>
                            <a href="Expert_directry.php"><i class="fa fa-sitemap fa-fw nav_icon"></i>Expert Directory</a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="piechart.php">Leave Report</a>
                                </li>
                                <li>
                                    <a href="performance.php">Performance Report</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     <!-- view profile-->
	
				
	
	
	
	<!--end profile-->	 
     
	 
	 
	 
		
            
      <div>
	  <h2> Leave Request</h2>
	  </div>
	  
	 <div class="container">
			
			<br/>
			<div class="row well" style=" background-color:#98FB98;">
			 <form  class="col-md-8" action="request_leave.php" method="POST" role="form" enctype="multipart/form-data">
				
				 <label style="color:blue;font-size:150%;  font-family: verdana;" >Leave_type</label>
				 <select name="leave_type" style=" background-color:yellow;font-weight: bold;" class="form-control">
								    <option >---Select Type---</option>
									<option value="Personal">Personal</option>
									<option value="Medical">Medical</option></select><br/>
                <label style="color:blue;font-size:150%;  font-family: verdana;" > Leave_type_description</label><input  style="font-weight: bold;" type="text"  name="discp" class="form-control"   required><br/>
				<label style="color:blue;font-size:150%;  font-family: verdana;" >Date of Leave</label><br/>
			<div class="form-control">	
    <input class="input-append date form_datetime"  name="date1"  type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span><br/></div>
	
				<label style="color:blue;font-size:150%;  font-family: verdana;" >Number of days </label><input style="font-weight: bold;" type="text"   name="no" class="form-control"  required autofocus><br/>				  
				<button type="submit" class="btn btn-success " name="submit">Request</button>
			
			</form>
			</div>
			
			<?php 
	include"../db.php";
	if(isset($_POST['submit']))
		{
			$leave_type=$_POST['leave_type'];
			$discp=$_POST['discp'];
			$date1=$_POST['date1'];
			$no=$_POST['no'];
			$id=$_SESSION['id'];
			
		
		$dat=date("Y/m/d");
			
	$query="insert into leave_request(Leave_type,Leave_type_description,leave_date,num,Request_date,emp_id)
		values('$leave_type','$discp','$date1','$no','$dat','$id')";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());

       mysql_close($connection);
			
		}


?>
			
			
	</div>
		<div class="copy">
            <p>KMS | Design by <a href="#" target="_blank">Asran</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 <script src="bootstrap-datetimepicker.js"></script>
	
	<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy"
    });
</script>    
</script>
</body>
</html>
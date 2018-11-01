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
	
	include "../db.php";
	 $user=	$_SESSION['user'];
	$query="select * from users";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	$num_rows = mysql_num_rows($result);
	$_SESSION['mem']=$num_rows;
	
	
	$query1="select * from post_topic";
	$result1=mysql_query($query1) or die("query failed <br><b>".mysql_error);	
	$num_rows1 = mysql_num_rows($result1);
	$_SESSION['post']=$num_rows1;
	
	
	$query1="select * from assigned_tasks where emp_name='$user'";
	$result1=mysql_query($query1) or die("query failed <br><b>".mysql_error);	
	$num_rows1 = mysql_num_rows($result1);
	$_SESSION['task']=$num_rows1;
	
	$query1="select * from message where reciever='$user' and reciever_read='no'";
	$result1=mysql_query($query1) or die("query failed <br><b>".mysql_error);	
	$num_rows1 = mysql_num_rows($result1);
	$_SESSION['notify']=$num_rows1;
	
	$query="select * from users where username='$user'";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	while($row=mysql_fetch_array($result))
	{
		$pro_image=$row['pro_image'];
		$_SESSION['prof_im']=$pro_image;
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

<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
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
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"><?php echo $_SESSION['notify'] ?></span></a>
	        		<ul class="dropdown-menu">
						
						<li class="avatar">
							<a href="inbox.php">
								
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
							
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><?php echo"<img src='../uploadimages/".$_SESSION['prof_im']."'width=60px height=40px/>";?><span class="badge"><?php echo $_SESSION['task'] ?></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						
						
						<li class="m_2"><a href="assign_tasks.php"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger"><?php echo $_SESSION['task'] ?></span></a></li>
						
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="user_profile_update.php"><i class="fa fa-user"></i> Profile</a></li>
						
						
						<li class="m_2"><a href="view_project.php"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
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
						  <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Chat <?php echo "&emsp;&emsp;".$_SESSION['notify'] ?><span class="fa arrow"></span></a>
						   <ul class="nav nav-second-level">
						    <li>
                            <a href="send_message.php"><i class="fa fa-envelope nav_icon"></i>Send Messages</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
						 <li>
                            <a href="inbox.php"><i class="fa fa-envelope nav_icon"></i>Inbox <?php echo "&emsp;&emsp;".$_SESSION['notify'] ?></a>
                           
                            <!-- /.nav-second-level -->
                        </li>
						    </ul>
							</li>
							
							 <li>
                            <a href="Expert_directry.php"><i class="fa fa-sitemap fa-fw nav_icon"></i>Expert Directory</a>
                            
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
                            <a href="calendar/index.php"><i class="fa fa-table nav_icon"></i>Add Reminder</a>
                            
                            <!-- /.nav-second-level -->
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
   
      <div class="col_1">
		    <div class="col-md-4 span_7">	
		      <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
		    </div>
		 
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Reminder</h4>
					
					<form   class="form-horizontal"   action="memo.php" method="POST"  role="form" autocomplete="off"  enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="control-label">Add New Reminder</label>
									<div >
										<input type="text" name="title" class="form-control1" id="focusedinput" placeholder="Memo" required autofocus>
									</div>
									
							</div>	
							<div class="form-group">
									<label for="focusedinput" class="control-label">Add Description</label>
							
									<div ><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" placeholder="Description" class="form-control1"></textarea></div>
									
									
							</div>	
							
							<div class="form-group">
									<label for="focusedinput" class="control-label">Reminder Date & Time</label>
							
									<div  class="form-control1">	
    <input class="input-append date form_datetime" name="date2"  type="text" value="" readonly placeholder="Select date">
    <span class="add-on"><i class="icon-th"></i></span></div>
									
									
							</div>	
							 <button class="btn btn-primary" type="submit" name="submit">Add </button>
							</form>
							
							
	 </div>
							
              
               
            </div>
			
			
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Reminders..</h4>
					
					
									<label for="focusedinput" class="control-label">Remember</label>
									<table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Memo</th>
		          <th>Description</th>
		          <th>Date</th>
				  <th></th>
		        </tr>
		      </thead>
		      <tbody>
 <?php
	
	include "../db.php";
	$user1=	$_SESSION['user'];
	$query="select * from memo where user_name ='$user1'";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
	
	
	while($row=mysql_fetch_array($result))
	{
		//$id=$row['uid'];
	$name=$row['title'];
	$email=$row['description'];
	
	$cont=$row['dat_rem'];
	
	

	
	

		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['title'],"<th>",
				$row['description'],"<th>",$row['dat_rem'],
				
				"</tr>";
		
}?>
				 	


				
		      </tbody>
		    </table>
							
                </div>
               
            </div>
			
            <div class="clearfix"> </div>
	  </div>
	  <div class="span_11">
		<div class="col-md-6 col_4">
		 
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		
     
    </div>
    <div class="content_bottom">
	
	
	 <div class="col-md-8 span_3">
	 
		  <div class="bs-example1" data-example-id="contextual-table">
		  <h3 class="text-center">Active Users</h3>
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th></th>
		          <th></th>
		          <th></th>
				  <th></th>
		        </tr>
		      </thead>
		      <tbody>
 <?php
	
	include "../db.php";
	$user1=	$_SESSION['user'];
	$query="select * from users where username !='$user1'";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
	
	
	while($row=mysql_fetch_array($result))
	{
		$id=$row['uid'];
	$name=$row['username'];
	$email=$row['email'];
	
	$cont=$row['contactno'];
	$role=$row['role'];
	$nic=$row['NIC'];
	$image=$row['pro_image'];
	

	
	

		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['username'],"<th><a href='#'>",
				$row['email'],"</a>&nbsp;&nbsp;&nbsp;","<img src='../uploadimages/".$row['pro_image']."'width=60px height=40px/>";
				
				"</tr>";
		
}?>
				 	


				
		      </tbody>
		    </table>
		   </div>

	
	   </div>
     
	   <div class="col-md-4 span_4">
	
		  <div class="cloud">
			<div class="grid-date">
				<div class="date">
					<p class="date-in">Sri Lanka</p>
					<span class="date-on">°F °C </span>
					<div class="clearfix"> </div>							
				</div>
				<h4>30°<i class="fa fa-cloud-upload"> </i></h4>
			</div>
			<p class="monday"><?php echo date("Y/m/d ");?></p>
		  </div>
		</div>
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2016.KMS All Rights Reserved | Design by <a href="#" target="_blank">Asran</a> </p>
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

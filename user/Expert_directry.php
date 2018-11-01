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
              <input type="text" class="form-control" name="expert" id="expert" value="Search By Expertise field....." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search By Expertise field.....';}">
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
     
    
	
    <div class="content_bottom">
     <div class="col-md-8 span_3">
	<div class="bs-example1" id="result" data-example-id="contextual-table">
	
	  </div>

		  <div class="bs-example1" data-example-id="contextual-table">
		  <h3 class="text-center">Expert Directory List</h3>
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Employees Name</th>
		          <th>Expertise Field</th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>
 <?php
	
	include "../db.php";
	$user1=	$_SESSION['user'];

	$query="select * from users where username!='$user1' and role='employee'";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
	
	
	while($row=mysql_fetch_array($result))
	{
		//$id=$row['task_id'];
	$username=$row['username'];
	
	
	$expert=$row['expert'];
	//$user_name=$row['time_post'];
	//$_SESSION['category']= $category;
	//$_SESSION['title']= $title;
	//$_SESSION['user_name']= $user_name;
	//$_SESSION['id1']=$id;	
	

	
	

		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['username'],"<th>",
				$row['expert'],
				
				"</tr>";
		
}?>
				 	


				
		      </tbody>
		    </table>
		   </div>
		   

	
	   </div>
	   <div class="col-md-4 span_4">
		 <div class="col_2">
		  <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head red1">
			        <div class="text-center">Active Members</div>
			    </div>
			    <div class="tiles-body red"><?php echo $_SESSION['mem'] ?></div>
			 </a>
		   </div>
		      <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tw1">
			        <div class="text-center">Posted Topics</div>
			    </div>
			    <div class="tiles-body tw2"><?php echo $_SESSION['post'] ?></div>
			  </a>
		   </div>
		  
		   <div class="clearfix"> </div>
		 </div>
		 <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head fb1">
			        <div class="text-center">Tasks Assigned 2 U </div>
			    </div>
			    <div class="tiles-body fb2"><?php echo $_SESSION['task'] ?></div>
			 </a>
		   </div>
		    <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tiles_blue1">
			        <div class="text-center">Update</div>
			    </div>
			    <div class="tiles-body blue1">2</div>
			  </a>
		   </div>
		
		   <div class="clearfix"> </div>
		   </div>
		  </div>
		  <div class="cloud">
			<div class="grid-date">
				<div class="date">
					<p class="date-in">New York</p>
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
            <p>Copyright &copy; KMS. All Rights Reserved | Design by <a href="#">Asran</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/jquery.js"></script>
	
			<script>  
 $(document).ready(function(){  
      $('#expert').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('#result').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }  
      });  
 });  
 </script> 
</body>
</html>

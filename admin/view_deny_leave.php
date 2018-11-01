
<?php
session_start();
 $user=	$_SESSION['user'];
    if(!isset($_SESSION['user']) ){
      header('Location:../login.php');
    }
?>

<!doctype html>
<html>
	<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	</head>
	<body>
	  
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index2.php">KMS</a>
        </div>
		 
        <div class="navbar-collapse collapse" id="box">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminhome.php"></a></li>
            <li><a href="logout.php" >Logout</a></li>
			
          </ul>
        </div>
      </div>
    </div>
		<div class="container">
			<div class="row well">
				<h1 class="text-center page-header text-primary"></h1>
				<h2><p class="text-center text-primary">
				Admin Panel</h2></p>
			</div> 
		</div>
		
	
	
	
		<div class="container">
			<div class="row well">
				<div class="col-md-3 well">
				
					<div id="box2">
					<h4 class="success">Monitor Works</h4>
					<div>
					<p class="success"><a href="view_tasks.php">View Assigned works</a></p>
					<p class="success"><a href="assign_tasks.php"> Assigned works to Employees</a></p>
					<p class="success"><a href="Add_task.php">Add a Work</a></p>
					<p class="success"><a href="update_project.php">Update Documents</a></p>
			
					
					</div>
					
					
					
					
					
					<h4>Manage Employees</h4>
					<div>
					<p><a href="view_employee.php">View Employees</a></p>
					<p><a href="update_emp.php">Update Employees</a></p>
				
					
					
					<h4 class="success">Manage Leave</h4>
					<div>
					<p class="success"><a href="view_leave.php"> View Leave Requests</a></p>
					<p class="success"><a href="view_confirm_leave.php">View Confimed Requests</a></p>
					<p class="success"><a href="view_deny_leave.php">View Denied requests </a></p>
					
					
					</div>
					</div>
				
		 
					</div> 
		</div>
		<div class="col-md-9">
		
		<div class="row well">

	 
                <h2 class="text-center" style="color:green;">Hello Admin...</h2><br/>
                            
				<?php
	
	include "../db.php";
	
	$query="select * from leave_status where status='Denied'";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
	echo"<table class='table' border=7 cellspacing=7 cellpading=7 align=center>";
		echo"<caption><H3>List of Confirmed Leave Requests</H3> </caption>";		
		echo"<tr><th>Leave Type <th>Description<th>Requested Date<th>Leave Date<th>Number of days<th>Remove</tr>";
	
	while($row=mysql_fetch_array($result))
	{
		$Leave_type_id=$row['Leave_type_id'];
	$Leave_type=$row['Leave_type'];
	$Leave_type_description=$row['Leave_type_description'];
	
	$Request_date=$row['Request_date'];
	$leave_date=$row['leave_date'];
	$num=$row['num'];
	$emp_id=$row['emp_id'];
	

	

		

		
	
	
		 echo "<tr><span id=venue2><th>". $row['Leave_type'],"<th>",$row['Leave_type_description'],"<th>",$row['Request_date'],
				"<th>",$row['leave_date'],"<th>",$row['num'],"<th>",
				"<a href='remove_conf.php?id=$row[Leave_type_id]'>Remove</a>",
				
				"</tr>";
				
		
}

?>

                            
							
					
				</div>
		

	
				</div>
				
		</div>	
</div>
		
		
		<!--footer-->
	
		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>

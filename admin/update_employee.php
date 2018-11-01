
<?php
session_start();
?>


<?php

include"../db.php";



$id=$_GET['id'];
$_SESSION['id']= $id;

$query="select * from users where uid='$id'";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result))
{

     $id=$row['uid'];
	$name=$row['username'];
	$email=$row['email'];
	
	$nic=$row['NIC'];
	$phone=$row['contactno'];
	$role=$row['role'];

$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['nic']=$nic;
$_SESSION['phone']=$phone;
$_SESSION['role']=$role;

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

	 
                    <h4></span>Update Here<span ></h4><br/>
                            <div class="block-margin-top">
                             
                              <form  action="update_employee.php" method="POST" enctype="multipart/form-data" class="form-signin col-md-8 col-md-offset-2" role="form" autocomplete="off"> 
							  
							
                                 <label > Name</label> <input type="text" readonly name="name" class="form-control"  value="<?php echo $_SESSION['name'];?>"  required autofocus><br/>
                                  <label > Email</label><input type="text" name="email" class="form-control"  value="<?php echo $_SESSION['email'];?>" required><br/>
								   <label >NIC</label><input type="text" name="nic" class="form-control"  value="<?php echo $_SESSION['nic'];?>"required autofocus><br/>
								   <label >Phone</label><input type="text" name="phone"  class="form-control"  value="<?php echo $_SESSION['phone'];?>"  required autofocus><br/>
                                  <label >Job Category</label><input type="text" name="job"  class="form-control"  value="<?php echo $_SESSION['role'];?>"  required autofocus><br/>
								   
                                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Update Job</button>
                             </form>
							 

                           </div>
						   <?php


	include "../db.php";
	
	$_SESSION['id']=$id;
	if(isset($_POST['submit']))
	{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$nic=$_POST['nic'];

	$phone=$_POST['phone'];
	$job=$_POST['job'];
	
	
	
	
	
	
	
	
	


$query="UPDATE users SET role='$job',username='$name',email='$email',NIC='$nic',contactno='$phone' WHERE uid='$id'";
		
		
	
		
$result=mysql_query($query)
or die("Query failed".mysql_error());
header('location:update_emp.php');
mysql_close($connection);
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

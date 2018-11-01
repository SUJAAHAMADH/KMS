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
	<link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
	<script src="jquery.1.2.1.js"></script>
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

	 
                    <h4></span>Assign Employees to a Project<span ></h4><br/>
                            <div class="block-margin-top">
                             
                              <form  action="assign_tasks.php" method="POST" enctype="multipart/form-data" class="form-signin col-md-8 col-md-offset-2" role="form" autocomplete="off"> 
							  
							
                                 <label >Projec Name</label> 
								 <?php






	include "../db.php";
$sql2="SELECT * FROM task"; 


//$result2=mysql_query($sql2);



$result2=mysql_query($sql2);


echo "<select name='task_name' value=''class='form-control'>--select category--</option>"; // list box select command
echo "<option value=''>---select category---</option>";
while($row2=mysql_fetch_array($result2))
{
$id=$row2['id'];
echo "<option value='".$row2['name']."'>".$row2['name']."</option>";
} 

echo "</select>";// Closing of list box
echo "<br/>";
echo "<label >Select Employee</label>"; 
echo "<br/>";

$query="select * from users where role='employee'";
$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
echo "<select name='user_name' value=''class='form-control'>--select Employee--</option>"; // list box select command
echo "<option value=''>---select Employee---</option>";
while($row2=mysql_fetch_array($result))
{
//$id=$row2['id'];
echo "<option value='".$row2['username']."'>".$row2['username']."</option>";
} 

echo "</select>";// Closing of list box
echo "<br/>";
	
	
	
?>
	<label >Estimated Day</label>
								  <div class="form-control">	
    <input class=""  name="date1"  type="text" value="" placeholder="" ></div>
   <br/>	
								 
                                 	
	
				
				

				
				
								   <br/>
								  
								   <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Assign Task</button> 
                                 
                             </form>
							 

                           </div>
						   <?php 
	include"../db.php";
	if(isset($_POST['submit']))
		{
			$task_name=$_POST['task_name'];
			$user_name=$_POST['user_name'];
				$date2=$_POST['date1'];
			$sql="select * from task where name='$task_name'";
	$result=mysql_query($sql) or die("query failed <br><b>".mysql_error);
	while($row=mysql_fetch_array($result))
	{
    $id=$row['id'];
	
	
	
	
	}
			
			
		
		$date1=date("Y/m/d h:i:sa");
			
	$query="insert into assigned_tasks(task_id,emp_name,pro_name,date_add,estimated,status)
		values('$id','$user_name','$task_name','$date1','$date2','no')";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());
	   
	     //header('Location:.php');

       mysql_close($connection);
			
		}


?>
						   

				
				

				
				</div>
		

	
				</div>
				
		</div>	
</div>
		
		
		<!--footer-->
	
		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		
	 <script src="bootstrap-datetimepicker.js"></script>
	
	<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy"
    });
</script>    
</script>
	</body>
</html>

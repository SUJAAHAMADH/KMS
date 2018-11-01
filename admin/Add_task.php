


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

	 
                    <h4></span>Add a New Task<span ></h4><br/>
                            <div class="block-margin-top">
                             
                              <form  action="Add_task.php" method="POST" enctype="multipart/form-data" class="form-signin col-md-8 col-md-offset-2" role="form" autocomplete="off"> 
							  
							
                                 <label > Name</label> <input type="text" name="name" class="form-control" placeholder="name of the project here"  required autofocus><br/>
                                  <label > Start Date</label>
								  <div class="form-control">	
    <input class="input-append date form_datetime"  name="date1"  type="text" value="" placeholder="Select start date" readonly>
    <span class="add-on"><i class="icon-th"></i></span><br/></div><br/>
								   <label >End Date</label><div class="form-control">	
    <input class="input-append date form_datetime"  name="date2"  type="text" value="" readonly placeholder="Select end date">
    <span class="add-on"><i class="icon-th"></i></span><br/></div>
								   <br/>
								  
								   
                                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add New Project</button>
                             </form>
							 

                           </div>
						   <?php 
	include"../db.php";
	if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$date1=$_POST['date1'];
			$date2=$_POST['date2'];
			
			
		
		
			
	$query="insert into task(name,start_date,end_date)
		values('$name','$date1','$date2')";
		
	
		
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

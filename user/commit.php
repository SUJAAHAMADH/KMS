<?php 
	
	
		session_start();
		
		include"../db.php";
		
		//$user1=	$_SESSION['user'];
		
		
	if(isset($_POST['submit']))
		{
		
			$leave_type=$_POST['leave_type'];
			//$date2=$_POST['date2'];
				 $user=	$_SESSION['user'];
				$id=$_SESSION['ex'];
				//$dat=date("Y/m/d h:i:sa");
	
		
	$query="UPDATE assigned_tasks SET actual='$leave_type',status='yes' WHERE task_id='$id' and emp_name='$user'";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());
		header('Location:assign_tasks.php');
       mysql_close($connection);
			
		}



?>
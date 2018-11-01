<?php

session_start();
	include "../db.php";
	
	$id= $_SESSION['id'];
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
header("location:update_emp.php");
mysql_close($connection);
	}

?>
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
	$pass=$_POST['pass'];
	//$image=$_POST['image'];
	
	
	
	
	move_uploaded_file($_FILES['image']['tmp_name'],'../uploadimages/'.$_FILES['image']['name']);
    $imageName=mysql_real_escape_string($_FILES["image"]["name"]);
	
	
	
	


$query="UPDATE users SET username='$name',email='$email',NIC='$nic',contactno='$phone',pro_image='$imageName',role='$job' WHERE uid='$id'";
		
		
	
		
$result=mysql_query($query)
or die("Query failed".mysql_error());
header("location:user_profile.php");
mysql_close($connection);
	}

?>
<?php 
	include"db.php";
	if(isset($_POST['submit']))
		{
			$user=$_POST['fullname'];
			$email=$_POST['email'];
			$Phone=$_POST['Phone'];
			$nic=$_POST['nic'];
			$password=$_POST['password'];
			$txtarea1=$_POST['txtarea1'];
			//$pass=$_POST['password'];
			
	move_uploaded_file($_FILES['image']['tmp_name'],'uploadimages/'.$_FILES['image']['name']);
    $imageName=mysql_real_escape_string($_FILES["image"]["name"]);
		
		
	$query="insert into users(username,email,password,NIC,pro_image,contactno,role,expert)
		values('$user','$email','$password','$nic','$imageName','$Phone','employee','$txtarea1')";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());
		 header('Location:login.php');
       mysql_close($connection);
			
		}


?>
 
				<?php 
	session_start();
	
		
		
		include"../db.php";
	if(isset($_POST['submit']))
		{
			$title=$_POST['title'];
			$txtarea1=$_POST['txtarea1'];
			$date2=$_POST['date2'];
				 $user=	$_SESSION['user'];
		
			
	
		
	$query="insert into memo(title,description,dat_rem,user_name)
		values('$title','$txtarea1','$date2','$user')";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());
		 header('Location:index.php');
       mysql_close($connection);
			
		}



?>
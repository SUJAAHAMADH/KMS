
		   <?php 
	 session_start();
	include"../db.php";
	//$id=$_GET['id1'];
	if(isset($_POST['submit']))
		{
			$txtarea1=$_POST['txtarea1'];
			//$id3=$_SESSION['id2'];
			$txt1=$_POST['txt1'];
			
			$user1=	$_SESSION['user'];
		
	$dat=date("Y/m/d h:i:sa");
	$query="insert into forum_reply(topic_id,user_name,reply,date_reply)
		values('$txt1','$user1','$txtarea1','$dat')";
		
	
		
      $result=mysql_query($query)
       or die("Query failed".mysql_error());
	    header('Location:forum_home.php');
	   
		
		 
		
		
	
       mysql_close($connection);
			
		}


?>
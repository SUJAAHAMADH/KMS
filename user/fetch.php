<?php 
session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "kms");  
 //$output = '';  
 $user1=$_SESSION['user'];
 $sql = "SELECT * FROM users where username!='$user1' and role='employee' and expert LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
       
      echo '
		  <h3 class="text-center">Search Result...</h3>
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Employees Name</th>
		          <th>Expertise Field</th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>';
      while($row = mysqli_fetch_array($result))  
      {  
	  $username=$row['username'];
	
	
	$expert=$row['expert'];
	//$user_name=$row['time_post'];
	//$_SESSION['category']= $category;
	//$_SESSION['title']= $title;
	//$_SESSION['user_name']= $user_name;
	//$_SESSION['id1']=$id;	
	

	
	

		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['username'],"<th>",
				$row['expert'],
				
				"</tr>";
      }  
    echo '</tbody>
		    </table>
		  ' ;
 }  
 else  
 {  
      echo 'No Any Matching Results...';  
 }  
 ?>  
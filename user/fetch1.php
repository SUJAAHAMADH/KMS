<?php 
session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "kms");  
 //$output = '';  
 $user1=$_SESSION['user'];
 $sql = "SELECT * FROM post_topic where category='Computer Science & Technology' and title LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
       
      echo '
		  <div class="col-md-8 span_3">
	 <h3>Search Results...</h3>
		  <div class="bs-example1" data-example-id="contextual-table">
		  <h3 class="text-center">Computer Science & Technology</h3>
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Topics</th>
		          <th>Replies </th>
		          <th>Date</th>
				  <th></th>
		        </tr>
		      </thead>
		      <tbody>';
      while($row = mysqli_fetch_array($result))  
      {  
	  $id=$row['id'];
	$title=$row['title'];
	
	
	$category=$row['category'];
	//$user_name=$row['time_post'];
	//$_SESSION['category']= $category;
	//$_SESSION['title']= $title;
	//$_SESSION['user_name']= $user_name;
	//$_SESSION['id1']=$id;	
	

	$query="select * from forum_reply where topic_id='$id'";
	$result = mysqli_query($connect, $query);
	$num_rows = mysqli_num_rows($result);

		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['title'],"<th>","$num_rows ",
				"<th>",$row['time_post'],"&emsp;&emsp;<a href='view_reply.php?id1=$row[id]'>view</a>",
				
				"</tr>";
		
 }  
 echo '</tbody>
		    </table>
		   </div>';
	}	   
$sql = "SELECT * FROM post_topic where category='Management' and title LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql); 

if(mysqli_num_rows($result) > 0)  
 {  
       
      echo '
		 <div class="bs-example1" data-example-id="contextual-table">
		  <h3 class="text-center">Management</h3>
		
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Topics</th>
		          <th>Replies</th>
		          <th>Date</th>
		        </tr>
		      </thead>
		      <tbody>';
      while($row = mysqli_fetch_array($result))  
      {  
	 $id=$row['id'];
	$title=$row['title'];
	
	
	$category=$row['category'];
	//$user_name=$row['time_post'];
	//$_SESSION['category']= $category;
	//$_SESSION['title']= $title;
	//$_SESSION['user_name']= $user_name;
	//$_SESSION['id1']=$id;	
	

	$query="select * from forum_reply where topic_id='$id'";
	$result1 = mysqli_query($connect, $query);
	$num_rows = mysqli_num_rows($result1);


		

		
	
	
		 echo "<tr><span id=venue2><th>","<th>",$row['title'],"<th>","$num_rows ",
				"<th>",$row['time_post'],"&emsp;&emsp;<a href='view_reply.php?id1=$row[id]'>view</a>",
				
				"</tr>";
		
 }  
 echo '</tbody>
		    </table>
		   </div>';
 }
 ?>
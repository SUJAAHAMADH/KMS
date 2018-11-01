
<?php
session_start();
 $user=	$_SESSION['user'];
    if(!isset($_SESSION['user']) ){
      header('Location: login.php');
    }
?>

<?php

include"db.php";




$query="select * from cv where name='$user'";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result))
{





} 


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interview</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"><link rel="shortcut icon" href="favicon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>

	
	</style>
	
	
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>  User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php">Logout</a></li>
                        <li role="separator" class="divider"></li>
                       
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
      <div class="info">
         <h2 class="bg-primary">Company Name</h2>
         <div class="bg-info">
         
          <a href="#">Home</a>
       
          <div class="col-md-6 col-md-offset-3">
		
                    <h4></span>Hello <span ></h4><br/>
                       
            </div>
			
			<div class="col-md-12">
		<div class="row well">

	
				
				

				<?php
	
	include "db.php";
	
	$query="select * from cv";
	$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	
	echo"<table class='table table-bordered' >";
		echo"<caption><H3>Profile</H3> </caption>";		
		echo"<tr><th>Name <th>Address<th>Age<th>Email<th>profile pic<th>Update<th>Delete</tr>";
	
	while($row=mysql_fetch_array($result))
	{
		$id=$row['id'];
	$name=$row['name'];
	$address=$row['address'];
	
	$age=$row['age'];
	$email=$row['email'];
	$prof=$row['image'];
	

	

		

		
	
	
		 echo "<tr><span id=venue2><th>". $row['name'],"<th>",$row['address'],"<th>",$row['age'],
				"<th>",$row['email'],"<th>","<img src='uploadimages/".$row['image']."'width=60px height=40px/>","<th>",
				"<a href='update.php?id=$row[id]'><input class='btn btn-primary' type='button' value='Update'></button></a>","<th>",
				"<a href='delete.php?id=$row[id]'><input class='btn btn-primary' type='button' value='Delete'></button></a>",
				"</tr>";
		
}?>
				</div>
				</div>

      </div>
	  
	  
      
     
    </div>
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </body>
</html>
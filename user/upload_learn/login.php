
<?php
session_start();
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
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>  User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="register.php">SignUp</a></li>
                        <li role="separator" class="divider"></li>
                       
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
      <div class="info">
         <h2 class="bg-primary">KMS</h2>
         <div class="bg-info">
         
          <a href="#">Home</a>
       
          <div class="col-md-6 col-md-offset-3">
                    <h4></span>Login<span ></h4><br/>
                            <div class="block-margin-top">
                             
                              <form  action="login.php" method="POST" enctype="multipart/form-data" class="form-signin col-md-8 col-md-offset-2" role="form" autocomplete="off"> 
							  
							
                                 <label > User Name</label> <input type="text" name="username" class="form-control" placeholder="Name" required autofocus><br/>
                                 
                                   <label > Password</label><input type="password" name="password" class="form-control" placeholder="Password" required><br/>
								  
                                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">login</button>
                             </form>
                           </div>
            </div>

      </div>
	  
	  
      
     
    </div>
	
<?php 
	include"db.php";
	if(isset($_POST['submit']))
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
		
		
		$query="select * from cv where name='$user' AND password='$pass'";	
		
		$result=mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($result)==1)
		{
		$_SESSION['user']=$user;
		header("Location:profile.php");
		
		} 
		else
		{
		header("Location:login.php");
		}
			
		}


?>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </body>
</html>
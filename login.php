
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login|KMS</title>

	
	

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"><link rel="shortcut icon" href="favicon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <style>
  .modal-header, h4, .close {
      background-color:  #20B2AA;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
  
  
  
  
  
  
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
            <a class="navbar-brand" href="index.php">KMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li id="myBtn1"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> SignUp</a></li>
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
      <div class="info">
         <h2 class="bg-primary">KMS</h2>
         <div class="bg-info">
         
         
       
          <div class="col-md-6 col-md-offset-3">
                    <h4></span>Login<span ></h4><br/>
                            <div class="block-margin-top">
                             
                              <form  action="login.php" method="POST" enctype="multipart/form-data" class="form-signin col-md-8 col-md-offset-2" role="form" autocomplete="off"> 
							  
							
                                 <label ><i class="fa fa-user" aria-hidden="true"></i> User Name</label> <input type="text" name="username" class="form-control" placeholder="Name" required autofocus><br/>
                                 
                                   <label ><i class="fa fa-unlock" aria-hidden="true"></i> Password</label><input type="password" name="password" class="form-control" placeholder="Password" required><br/>
								  
                                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">login</button>
                             </form>
                           </div>
            </div>
			
			<?php 
	include"db.php";
	if(isset($_POST['submit']))
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
		
		
		$query="select * from users where username='$user' AND password='$pass'";	
		
		$result=mysql_query($query) or die(mysql_error());
		
		while($row=mysql_fetch_array($result))
	{
		$role=$row['role'];
		
		
	}

		
		
		
		if(mysql_num_rows($result)==1)
		{
		if($role=="employee")
		{
		$_SESSION['user']=$user;
		header("Location:user/index.php");
		}
		else if($role=="Admin")
		{
		$_SESSION['user']=$user;
		header("Location:admin/Admin_home.php");
		}
		} 
		else
		{
		header("Location:login.php");
		}
			
		}


?>
  

      </div>
	  
	  
      
     
    </div>
	
	<!--- Registration modal --->
	
	<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><i class="fa fa-user-plus" aria-hidden="true"></i> Registration</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form  action="registration_logic.php" name="form1" onSubmit="return check();" method="POST" role="form" enctype="multipart/form-data">
		   <div class="form-group">
              <label for="fullname"><i class="fa fa-user" aria-hidden="true"></i> Full Name</label>
              <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter full Name" required autofocus>
            </div>
			 <div class="form-group">
              <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required autofocus>
            </div>
			 <div class="form-group">
              <label for="phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone </label>
              <input type="text" name="Phone" class="form-control" id="Phone" maxlength="14" placeholder="Enter mobile number" required autofocus>
            </div>
			  <div class="form-group">
              <label for="NIC"><i class="fa fa-address-card" aria-hidden="true"></i> NIC No</label>
              <input type="text" name="nic" class="form-control" maxlength="10" id="nic" placeholder="Enter address" required autofocus>
            </div>
			
			  <div class="form-group">
              <label for="NIC"><i class="fa fa-address-card" aria-hidden="true"></i>Enter Expertise Fields</label>
             <div class="form-control"><select name="selector1" id="selector1" class="form-control1">
										<option >--Please Select--</option>
										<option value="Computer Science & Technology">Computer Science & Technology</option>
										<option value="Management">Management</option>
										<option value="Architecture">Architecture</option>
										
									</select></div>
			<textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
            </div>
			<script type="text/javascript">
    var mytextbox = document.getElementById('txtarea1');
    var mydropdown = document.getElementById('selector1');

    mydropdown.onchange = function(){
          mytextbox.value = mytextbox.value  + this.value+','; //to appened
         //mytextbox.innerHTML = this.value;
		var x = document.getElementById("selector1");
    x.remove(x.selectedIndex);
    }
</script>
			
			
			
			<div class="form-group">
               <label > <i class="fa fa-file-image-o" aria-hidden="true"></i> Upload your photo</label><input type="file" name="image" class="form-control" placeholder="Upload image" required><br/>
            </div>
			
			
		  
           
            <div class="form-group">
              <label for="psw"><i class="fa fa-unlock" aria-hidden="true"></i> Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required autofocus>
            </div>
			<div class="form-group">
              <label for="psw"><i class="fa fa-unlock" aria-hidden="true"></i> Confirm Password</label>
              <input type="password" name="password1" class="form-control" id="password" placeholder="Enter password" required autofocus>
            </div>
			
			
           
              <button type="submit" class="btn btn-success btn-block" name="submit"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</button>
          
        </div>
      </div>
      
    </div>
  </div>
</div>

<!--- end of Register modal --->
	
	
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	
	
	<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
    });
});
</script>
  </body>
</html>
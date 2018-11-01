<?php
$connection = @mysql_connect("localhost","root","")
		or die("Could Not Connect With The Server");
$db=@mysql_select_db("bloomers_job",$connection)
		or die("database connection fails");  


		?>
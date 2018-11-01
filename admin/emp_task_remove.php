<?php
include "../db.php";
$id=$_GET['id1'];

$sql="delete from assigned_tasks where emp_name='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:view_tasks.php');



?>
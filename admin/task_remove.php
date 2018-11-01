<?php
include "../db.php";
$id=$_GET['id1'];

$sql="delete from task where id='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
$sql="delete from assigned_tasks where task_id='$id'";
mysql_query($sql)or die(mysql_error());
header('location:view_tasks.php');



?>
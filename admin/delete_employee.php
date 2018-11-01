<?php
include "../db.php";
$id=$_GET['id'];

$sql="delete from users where uid='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:view_employee.php');



?>
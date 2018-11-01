<?php
include "../db.php";
$id=$_GET['id'];

$sql="delete from leave_status where Leave_type_id='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:view_confirm_leave.php');



?>
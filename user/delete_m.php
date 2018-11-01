<?php
include "../db.php";
$id=$_GET['id1'];

$sql="delete from message where id='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:discus.php');



?>
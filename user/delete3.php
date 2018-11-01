<?php
include "../db.php";
$id3=$_GET['id3'];
//$user1=	$_SESSION['user'];

$query="select * from message where id='$id3'";
$result=mysql_query($query) or die("query failed <br><b>".mysql_error);	
	while($row=mysql_fetch_array($result))
	{
		$id=$row['id'];
	$sender=$row['sender'];
	$reciever=$row['reciever'];
	
	//echo 	$user1;
$sql="delete from message where sender='$sender' and reciever='$reciever' and sender_read='yes' and reciever_read='yes'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"


}
header('location:inbox.php');

?>
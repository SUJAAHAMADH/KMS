<?php
include "../db.php";
$id=$_GET['id'];

$sql="select * from leave_request where Leave_type_id='$id'";
$result=mysql_query($sql) or die("query failed <br><b>".mysql_error);
while($row=mysql_fetch_array($result))
{
    $Leave_type_id=$row['Leave_type_id'];
	$Leave_type=$row['Leave_type'];
	$Leave_type_description=$row['Leave_type_description'];
	
	$Request_date=$row['Request_date'];
	$leave_date=$row['leave_date'];
	$num=$row['num'];
	$emp_id=$row['emp_id'];
	
	
	
}

$query="insert into leave_status(Leave_type_id,Leave_type,Leave_type_description,Request_date,leave_date,num,emp_id,status)
					 values('$Leave_type_id','$Leave_type','$Leave_type_description','$Request_date','$leave_date','$num','$emp_id','Denied')";
		
	
		
$result=mysql_query($query)
or die("Query failed".mysql_error());


$sql="delete from leave_request where Leave_type_id='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:view_leave.php');

?>
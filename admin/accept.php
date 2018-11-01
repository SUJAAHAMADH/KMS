<?php
session_start();
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
	$_SESSION['nm']=$num;
	$emp_id=$row['emp_id'];
	$_SESSION['emp_id']=$emp_id;
	
	
	
}

$query="insert into leave_status(Leave_type_id,Leave_type,Leave_type_description,Request_date,leave_date,num,emp_id,status)
					 values('$Leave_type_id','$Leave_type','$Leave_type_description','$Request_date','$leave_date','$num','$emp_id','Accepted')";
		
	
		
$result=mysql_query($query)
or die("Query failed".mysql_error());
	$emp_id=$_SESSION['emp_id'];
$sql="select * from users where uid='$emp_id'";
$result=mysql_query($sql) or die("query failed <br><b>".mysql_error);
while($row=mysql_fetch_array($result))
{
    $leave_no=$row['leave_no'];
	$_SESSION['leave_no']= $leave_no;
	//$leave_no1 = (int)$leave_no;
	
	
}
$num1=(int)$_SESSION['nm'];
$total=(int)$_SESSION['leave_no'];
$result=($total-$num1);
$query="UPDATE users SET leave_no='$result' WHERE uid='$emp_id'";
		
		
	
		
$result=mysql_query($query)
or die("Query failed".mysql_error());



$sql="delete from leave_request where Leave_type_id='$id'";
mysql_query($sql)or die(mysql_error());
//echo "user deleted"
header('location:view_leave.php');

?>
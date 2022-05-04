<?php

include("conn.php");


$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$contact_no=$_GET['contact_no'];
$pincode=$_GET['pincode'];
$age=$_GET['age'];
$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$dob=$day."-".$month."-".$year;
$city=$_GET['city'];
$gender=$_GET['gender'];
$healthplan=$_GET['healthplan'];
$relationship=$_GET['relationship'];
$height=$_GET['height'];
$weight=$_GET['weight'];
$health_issue=$_GET['health_issue'];
$sum_assured=$_GET['sum_assured'];
$premium=$_GET['premium'];

$sql = "insert into health_form values('','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$healthplan','$relationship',$height,$weight,'$health_issue',$sum_assured,$premium)";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:index.php");

?>

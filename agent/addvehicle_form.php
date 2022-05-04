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
$vehicleplan=$_GET['vehicleplan'];
$insurance_type=$_GET['insurance_type'];
$license_no=$_GET['license_no'];
$regi_no=$_GET['regi_no'];
$vehicle_type=$_GET['vehicle_type'];
$sum_assured=$_GET['sum_assured'];
$premium=$_GET['premium'];
$sql = "insert into vehicle_form values('','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$vehicleplan','$insurance_type','$license_no',$regi_no,'$vehicle_type',$sum_assured,$premium)";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:vehicle.php");

?>

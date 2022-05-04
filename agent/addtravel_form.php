<?php

include("conn.php");


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$pincode=$_POST['pincode'];
$age=$_POST['age'];
$dob=$_POST['dob'];

$city=$_POST['city'];
$gender=$_POST['gender'];
$travelplan=$_POST['travelplan'];
$country=$_POST['country'];
$s_date=$_POST['s_date'];
$r_date=$_POST['r_date'];
$num_day=$_POST['num_day'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];
$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"../article/".$_FILES['file']['name']);

		$sql = "insert into travel_form values('','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$travelplan','$country','$s_date','$r_date',$num_day,$sum_assured,$premium)";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:travel.php");

?>

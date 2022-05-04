<?php
session_start(); 
include("conn.php");

$t_id=$_POST['t_id'];
$u_id=$_SESSION['uid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$pincode=$_POST['pincode'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$agent_id=$_POST['agent_id'];
$gender=$_POST['gender'];
$travelplan=$_POST['travelplan'];
$country=$_POST['country'];
$s_date=$_POST['s_date'];
$r_date=$_POST['r_date'];
$num_day=$_POST['num_day'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];

	$file7=$_FILES["file7"]["name"];
	move_uploaded_file($_FILES['file7']['tmp_name'],"images/".$_FILES['file7']['name']);
	
	$file6=$_FILES["file6"]["name"];
	move_uploaded_file($_FILES['file6']['tmp_name'],"images/".$_FILES['file6']['name']);

	$sql = "insert into travel_form values('',$u_id,$agent_id,'$file7','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$travelplan','$country','$s_date','$r_date',$num_day,$sum_assured,$premium,'pandding','$file6')";

	$result=mysql_query($sql,$conn);
	if ($result==TRUE)
		header("location:category.php");

?>

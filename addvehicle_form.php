<?php

session_start();
include("conn.php");
$h_id=$_POST['v_id'];
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
$vehicleplan=$_POST['vehicleplan'];
$insurance_type=$_POST['insurance_type'];
$license_no=$_POST['license_no'];
$regi_no=$_POST['regi_no'];
$vehicle_type=$_POST['vehicle_type'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];



$file3=$_FILES["file3"]["name"];
		move_uploaded_file($_FILES['file3']['tmp_name'],"images/".$_FILES['file3']['name']);
$file4=$_FILES["file4"]["name"];
		move_uploaded_file($_FILES['file4']['tmp_name'],"images/".$_FILES['file4']['name']);

$sql = "insert into vehicle_form values('',$u_id,$agent_id,'$file3','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$vehicleplan','$insurance_type','$license_no','$regi_no','$vehicle_type',$sum_assured,$premium,'pandding','$file4')";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:index.php");

?>

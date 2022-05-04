<?php
session_start(); 
include("conn.php");

$h_id=$_POST['h_id'];
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
$healthplan=$_POST['healthplan'];
$relationship=$_POST['relationship'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$health_issue=$_POST['health_issue'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];


		$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
		
		$file1=$_FILES["file1"]["name"];
		move_uploaded_file($_FILES['file1']['tmp_name'],"images/".$_FILES['file1']['name']);
		
		$sql = "insert into health_form values('',$u_id,$agent_id,'$file','$fname','$lname','$email','$contact_no',$pincode,$age,'$dob','$city','$gender','$healthplan','$relationship',$height,$weight,'$health_issue',$sum_assured,$premium,'pandding','$file1')";



$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:index.php");

?>

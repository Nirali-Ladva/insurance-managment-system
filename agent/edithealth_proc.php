<?php

include("conn.php");

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$pincode=$_POST['pincode'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$healthplan=$_POST['healthplan'];
$relationship=$_POST['relationship'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$health_issue=$_POST['health_issue'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];

	$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$_FILES['file']['name']);
		if($_FILES["file"]["name"]=="")
		{
			$sql="update  health_form set fname='$fname',lname='$lname',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',healthplan='$healthplan',relationship='$relationship',height=$height,weight=$weight,health_issue='$health_issue',sum_assured=$sum_assured,premium=$premium where h_id=$id";
		}
		else
		{
			
			$sql="update  health_form set user_photo='$file',fname='$fname',lname='$lname',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',healthplan='$healthplan',relationship='$relationship',height=$height,weight=$weight,health_issue='$health_issue',sum_assured=$sum_assured,premium=$premium where h_id=$id";
		}
$result=mysql_query($sql,$conn);
if ($result)
{
	header("location:health.php");
}
else
{
	
	echo"no";
}
?>

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
$travelplan=$_POST['travelplan'];
$country=$_POST['country'];
$s_date=$_POST['s_date'];
$r_date=$_POST['r_date'];
$num_day=$_POST['num_day'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];

$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$_FILES['file']['name']);
		if($_FILES["file"]["name"]=="")
		{
			$sql="update  travel_form set fname='$fname',lname='$lname',email='$email',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',travelplan='$travelplan',country='$country',s_date='$s_date',r_date='$r_date',num_day='$num_day',sum_assured=$sum_assured,premium=$premium where t_id=$id";
		}
		else
		{
			$sql="update  travel_form set user_photo='$file', fname='$fname',lname='$lname',email='$email',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',travelplan='$travelplan',country='$country',s_date='$s_date',r_date='$r_date',num_day='$num_day',sum_assured=$sum_assured,premium=$premium where t_id=$id";
			
		}
$result=mysql_query($sql,$conn);
if ($result)
{
	header("location:travel.php");
}
else
{	
	echo"no";
}
?>

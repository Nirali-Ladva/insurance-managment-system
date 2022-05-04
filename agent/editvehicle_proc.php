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
$vehicleplan=$_POST['vehicleplan'];
$insurance_type=$_POST['insurance_type'];
$regi_no=$_POST['regi_no'];
$license_no=$_POST['license_no'];
$vehicle_type=$_POST['vehicle_type'];
$sum_assured=$_POST['sum_assured'];
$premium=$_POST['premium'];

$file=$_FILES["file"]["name"];

		move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$_FILES['file']['name']);
		if($_FILES["file"]["name"]=="")
		{
			$sql="update vehicle_form set fname='$fname',lname='$lname',email='$email',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',vehicleplan='$vehicleplan',insurance_type='$insurance_type',regi_no=$regi_no,license_no='$license_no',vehicle_type='$vehicle_type',sum_assured=$sum_assured,premium=$premium where v_id=$id";
		}
		else
		{
			$sql="update vehicle_form set user_photo='$file',fname='$fname',lname='$lname',email='$email',contact_no='$contact_no',pincode=$pincode,age=$age,dob='$dob',city='$city',gender='$gender',vehicleplan='$vehicleplan',insurance_type='$insurance_type',regi_no=$regi_no,license_no=$license_no,vehicle_type='$vehicle_type',sum_assured=$sum_assured,premium=$premium where v_id=$id";
			
		}
		$result=mysql_query($sql,$conn);
		if ($result)
		{
			header("location:vehicle.php");
		}
		else
		{	
			echo"not succsess";
		}
?>

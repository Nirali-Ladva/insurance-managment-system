<?php

	include("conn.php");

	$id=$_GET['id'];
	$sql="update vehicle_form set status='approve' where v_id=$id ";
	$result=mysql_query($sql,$conn);
	
	if($result)
		header("location:vehicle.php");
	else
		echo "not succsses";
?>
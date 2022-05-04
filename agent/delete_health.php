<?php

	include("conn.php");

	$id=$_GET['id'];
	$sql="update health_form set status='rejected' where h_id=$id ";
	$result=mysql_query($sql,$conn);
	
	if($result==TRUE)
		header("location:health.php");
	else
		echo "not succsses";
?>
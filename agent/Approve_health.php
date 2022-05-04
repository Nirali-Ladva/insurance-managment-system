<?php

	include("conn.php");

	$id=$_GET['id'];
	$sql="update health_form set status='approve' where h_id=$id ";
	$result=mysql_query($sql,$conn);
	
	if($result)
		header("location:health.php");
	else
		echo "not succsses";
?>
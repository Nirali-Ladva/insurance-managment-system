<?php

	include("conn.php");

	$id=$_GET['id'];
	$sql="update travel_form set status='approve' where t_id=$id ";
	$result=mysql_query($sql,$conn);
	
	if($result)
		header("location:travel.php");
	else
		echo "not succsses";
?>
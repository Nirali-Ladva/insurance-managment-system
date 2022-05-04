<?php

include("conn.php");

$Policy_id=$_GET['Policy_id'];	
$Category_id=$_GET['Category_id'];
$Name=$_GET['Name'];
$photo_name=$_GET['photo_name'];
$sql = "insert into policy_info(Policy_id,Category_id,Name,photo_name)values('',$Category_id,'$Name','$photo_name')";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:Display_policy.php");

?>

<?php

include("conn.php");

$id=$_GET["id"];
$sql = "delete from agent_policy where policy_id = $id";
$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:Display_policy.php");
?>
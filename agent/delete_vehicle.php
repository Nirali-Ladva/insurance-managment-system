<?php

include("conn.php");

$id=$_GET["id"];
$sql = "update vehicle_form set status='rejected' where v_id=$id";
$result=mysql_query($sql,$conn);

if ($result==TRUE)
	header("location:vehicle.php");
?>
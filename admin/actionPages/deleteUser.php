<?php

	include('../dbcon.php');
	$db=new dbcon();

	$idCode=$_GET['id'];
	$sql="delete from reg where mail='$idCode'";
	$db->insertQuery($sql);
	$sql1="DELETE FROM `login` WHERE uname='$idCode';";
	$db->insertQuery($sql1);
	echo "<script>window.alert('Deleted Successfully');window.location='../vreg.php';</script>";
?>

<?php

	include('../dbcon.php');
	$db=new dbcon();

	$idCode=$_GET['id'];
	$sql="delete from transport where transMode='$idCode'";
	$db->insertquery($sql);
	echo "<script>window.alert('Deleted successfully');window.location='../transport.php';</script>";
?>
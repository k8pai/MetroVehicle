<?php
	include('../dbcon.php');
	$db=new dbcon;

	$mrateid=$_GET['id'];
	$sql="delete from mrate where mrateId='$mrateid'";
	$db->insertquery($sql);
	echo "<script>alert('Deleted Succesfully');window.location='../mtrate.php';</script>";
	?>
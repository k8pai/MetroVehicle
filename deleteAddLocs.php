<?php

	include('dbcon.php');
	$db=new dbcon();

	$idCode=$_GET['id'];
	$sql="delete from servavlloc where servavllocId=$idCode";
	$db->insertQuery($sql);
	echo "<script>window.alert('Deleted Successfully');window.location='addLocs.php';</script>";
?>

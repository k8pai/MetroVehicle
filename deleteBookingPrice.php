<?php

	include('dbcon.php');
	$db=new dbcon;

	$idCode=$_GET['id'];
	$sql="delete from ratecalc where ratecalcId=$idCode";
	$db->insertquery($sql);
	echo "<script>window.alert('Deleted Successfully');window.location='bookingPrice.php';</script>";
?>
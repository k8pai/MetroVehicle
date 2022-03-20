<?php
	include('../dbcon.php');
	$db=new DbCon();

	$idCode=$_GET['id'];

	$sql="delete from banda where bandaId='$idCode'";
	$query=$db->insertquery($sql);

	echo "<script>alert('Deleted succesfully!!!');window.location='../ticketBooking.php';</script>";
?>
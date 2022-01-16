<?php
	include('dbcon.php');
	$db=new dbcon;

	$ct=$_GET['id'];
	$sql="delete from transport where transport='$ct'";
	$db->insertquery($sql);
	echo"<script>alert('Deleted');window.location='transport.php';</script>";
	?>
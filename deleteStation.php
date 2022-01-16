<?php
	include('dbcon.php');
	$db=new dbcon;

	$scode=$_GET['id'];
	$sql="delete from station where sCode='$scode'";
	$db->insertquery($sql);
	echo"<script>alert('Deleted Succesfully');window.location='station.php';</script>";
	?>
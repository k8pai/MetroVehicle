<?php
	include('dbcon.php');
	$db=new dbcon;
	
	
	$transport=$_POST['transName'];
	$dr=$_POST['DriveType'];
	$trate=$_POST['transRate']."/km";

	// .$_POST['dis'];

	$sql="insert into transport(transMode,driving,rate) values ('$transport','$dr','$trate')";
	$db->insertQuery($sql);

	echo"<script>alert('Transport Added');window.location='transport.php'</script>";
?>
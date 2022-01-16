<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$tcode=$_POST['transcode'];
	$transport=$_POST['transport'];
	$time=$_POST['time'];

	$sql="insert into transport(transcode,transport,time) values ('$tcode','$transport','$time')";
	$db->insertQuery($sql);

	echo"<script>alert('SUCCESS');window.location='mot.php'</script>";
?>
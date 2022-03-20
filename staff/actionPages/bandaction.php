<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$a=$_POST['BAcode'];
	$b=$_POST['Bstation'];
	$c=$_POST['Astation'];
	$dest=$_POST['destination'];	

	$sql="insert into banda(BAcode,Bstation,Astation,destination) values ('$a','$b','$c','$dest')";
	$db->insertQuery($sql);

	echo"<script>alert('SUCCESS');window.location='baa2.php'</script>";
?>
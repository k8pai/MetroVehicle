<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$avlstation=$_POST['avlstation'];
	

	$sql="insert into servavlloc(avlStation) values ('$avlstation')";
	$db->insertQuery($sql);

	echo"<script>window.location='addLocs.php'</script>";
?>
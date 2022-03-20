<?php
	include('../dbcon.php');
	$db=new dbcon;
	
	$source=$_POST['Source'];
	$destination=$_POST['Destination'];
	$rate=$_POST['rate'];
	

	$sql="insert into mrate(srcName,destName,rate) values ('$source','$destination','$rate')";
	$db->insertQuery($sql);

	echo"<script>alert('Successfully Added');window.location='../mtrate.php'</script>";
?>
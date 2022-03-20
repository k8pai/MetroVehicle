<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$a=$_POST['Pcode'];
	$b=$_POST['paymode'];	

	$sql="insert into payment(paycode,paymode) values ('$a','$b')";
	$db->insertQuery($sql);

	echo"<script>alert('SUCCESS');window.location='mop.php'</script>";
?>
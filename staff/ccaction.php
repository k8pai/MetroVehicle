<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$a=$_POST['cancode'];
	$b=$_POST['uname'];
	$c=$_POST['trans'];
	$d=$_POST['refacc'];
	$e=$_POST['compaint'];

	$sql="insert into cancomp(cancode,uname,trans,refacc,compaint) values ('$a','$b','$c','$d','$e')";
	$db->insertQuery($sql);

	echo"<script>alert('SUCCESS');window.location='cancellation.php'</script>";
?>
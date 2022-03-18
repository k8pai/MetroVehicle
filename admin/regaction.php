<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gen=$_POST['gen'];
	$utype=$_POST['utype'];	
	$ph=$_POST['ph'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];

	$selquery="select * from reg where ph='$ph'";
	$result=$db->selectData($selquery);
	$selquery1="select * from reg where mail='$mail'";
	$result1=$db->selectData($selquery1);
	if ($row=mysqli_fetch_array($result)) {
		echo "<script>alert('This phone number is already registered.');window.location='addUser.php'</script>";
	}
	else if ($row1=mysqli_fetch_array($result1)) {
		echo "<script>alert('This mail is already taken.');window.location='addUser.php'</script>";
	}
	else{
		$sql="insert into reg(fname,lname,gen,utype,ph,mail) values ('$fname','$lname','$gen','$utype','$ph','$mail')";
		$db->insertQuery($sql);

		$s="select max(regId) as cid from reg";
	}

	$rs=$db->selectData($s);
	$row=mysqli_fetch_array($rs);
	$cid=$row['cid'];
	$ss="insert into login(loginId,uname,upass,utype,status) values('$cid','$mail','$pass','$utype','true')";
	$db->insertQuery($ss);
	echo"<script>alert('SUCCESS');window.location='addUser.php'</script>";
?>
<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$cancode=$_POST['cancode'];
	$uname=$_POST['uname'];
	$pass=$_POST['password'];
	$reason=$_POST['reason'];	
	$complaint=$_POST['complaint'];

	$selquery="select * from cancomp where bookingId='$cancode'";
	$query=$db->selectData($selquery);
	while($row=mysqli_fetch_array($query)){
		if($row['uname']=='$uname' && $row['reason']=='$reason'){
			echo "<script>alert('okey, We got that earlier!');window.location='complaint.php';</script>";
		}
		else{
			$sql="insert into cancomp(cancompid,uname,pass,transMode,reason,complaint) values ('$cancode','$uname','$pass','$transMode','$reason','$complaint')";
			$db->insertQuery($sql);

			echo"<script>alert('Sorry for the inconvenience. We wont let you down again!');window.location='complaint.php'</script>";
		}
	}
	$sql="insert into cancomp(cancompid,uname,pass,transMode,reason,complaint) values ('$cancode','$uname','$pass','$transMode','$reason','$complaint')";
	$db->insertQuery($sql);

	echo"<script>alert('Sorry for the inconvenience. We wont let you down again!');window.location='complaint.php'</script>";
?>
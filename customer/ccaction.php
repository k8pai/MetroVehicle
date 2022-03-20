<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$cancode=$_POST['cancode'];
	$uname=$_POST['uname'];
	$pass=$_POST['password'];
	$reason=$_POST['reason'];	
	// $complaint=$_POST['complaint'];

	$selquery="select * from cancomp where bookingId='$cancode'";
	$selquery1="select * from banda where bookingId='$cancode'";
	$selquery2="select * from login where uname='$uname' and upass='$pass'";

	$query=$db->selectData($selquery);
	$query1=$db->selectData($selquery1);
	$query2=$db->selectData($selquery2);
	if(mysqli_num_rows($query1) > 0){
		$transMode=$row1['transMode'];
	}
	if($row2=mysqli_fetch_array($query2)){
		while($row=mysqli_fetch_array($query)){
			if($row['uname']=='$uname' && $row['reason']=='$reason'){
				echo "<script>alert('okey, We got that earlier!');window.location='complaint.php';</script>";
			}
			else{
				$sql="insert into cancomp(cancompid,uname,pass,transMode,reason) values ('$cancode','$uname','$pass','$transMode','$reason')";
				$db->insertQuery($sql);

				echo"<script>alert('Sorry for the inconvenience. We wont let you down again!');window.location='complaint.php'</script>";
			}
		}
		$sql="insert into cancomp(cancompid,uname,pass,transMode,reason) values ('$cancode','$uname','$pass','$transMode','$reason')";
		$db->insertQuery($sql);

		echo"<script>alert('Sorry for the inconvenience. We wont let you down again!');window.location='complaint.php'</script>";	
	}
	else{
		echo"<script>alert('Check your password and try again.');window.location='complaint.php'</script>";
	}
?>
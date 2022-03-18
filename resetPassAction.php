<?php
	session_start();
	include('dbCon.php');
	$db=new DbCon();
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	$sql="select * from login where uname='$mail'";
	$rt=$db->selectQuery($sql);
	if($rt==1)
	{
		$query =$db->selectData($sql);
		$row=mysqli_fetch_array($query);
		$oldPass=$row['upass'];

		if($pass == $repass){
			if($pass == $oldPass){
				echo "<script>alert('Try another password. This password looks similar to your old password.');window.location='resetPass.php';</script>";
			}else{
				$res = "UPDATE `login` SET `upass`='$pass' WHERE `uname`='$mail'";
				$db->insertQuery($res);
				echo "<script>alert('Password changed');window.location='login.php';</script>";
			}
		}
		else{
			echo "<script>alert('Passwords are not same. Enter again.');window.location='resetPass.php';</script>";
		}
	}
	else{
		echo "<script>alert('No Account found with this mail.');window.location='resetPass.php';</script>";
	}
?> 
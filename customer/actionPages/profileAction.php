<?php 
	include('../dbcon.php');
	$db=new dbcon();
	session_start();

    $_SESSION['cust']=$_POST['mail'];

  	$regId=$_POST['rno'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];

  	$updquery="UPDATE `reg` SET `fname`='$fname',`lname`='$lname',`ph`='$phone',`mail`='$mail' WHERE `regId`='$regId'";
 	$db->insertquery($updquery);
 	$updquery="UPDATE `login` SET `uname`='$mail' WHERE `loginId`='$logId'";
 	$db->insertquery($updquery);
	echo"<script>alert('updated succesfully');window.location='../customerHome.php';</script>";
?>
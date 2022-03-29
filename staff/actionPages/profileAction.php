<?php 
	include('../dbcon.php');
	$db=new dbcon();
	session_start();

  	$regId=$_POST['rno'];
  	$logId=$_POST['loginId'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];

  	$updquery="UPDATE `reg` SET `fname`='$fname',`lname`='$lname',`ph`='$phone',`mail`='$mail' WHERE `regId`='$regId'";
 	$db->insertquery($updquery);
 	$updquery="UPDATE `login` SET `uname`='$mail' WHERE `loginId`='$logId'";
 	$db->insertquery($updquery);
 	$updquery="UPDATE `station` SET `stationStaff`='$mail' WHERE `loginId`='$logId'";
 	$db->insertquery($updquery);
    $_SESSION['staff']=$_POST['mail'];
	echo"<script>alert('updated succesfully');window.location='../staffhome.php';</script>";
?>
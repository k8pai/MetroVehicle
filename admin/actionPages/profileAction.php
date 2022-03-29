<?php 
	include('../dbcon.php');
	$db=new dbcon();
	session_start();

    $_SESSION['admin']=$_POST['mail'];
  	$regId=$_POST['rno'];
  	$logId=$_POST['loginId'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];

  	echo "regId = ".$regId;
  	echo "loginId = ".$logId;
  	echo "fname = ".$fname;
  	echo "lname = ".$lname;
  	echo "phone = ".$phone;
  	echo "mail = ".$mail;


  	$updquery="UPDATE `reg` SET `fname`='$fname',`lname`='$lname',`ph`='$phone',`mail`='$mail' WHERE `regId`='$regId'";
 	$db->insertquery($updquery);
 	$updquery="UPDATE `login` SET `uname`='$mail' WHERE `loginId`='$logId'";
 	$db->insertquery($updquery);
	echo"<script>alert('updated succesfully');window.location='../adminhome.php';</script>";
?>
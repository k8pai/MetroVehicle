<?php 
	include('../dbcon.php');
	$db=new dbcon();
  	$regId=$_POST['rno'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];

  	echo "regId = ".$regId;
  	echo "fname = ".$fname;
  	echo "lname = ".$lname;
  	echo "phone = ".$phone;
  	echo "mail = ".$mail;
  	$updquery="UPDATE `reg` SET `fname`='$fname',`lname`='$lname',`ph`='$phone',`mail`='$mail' WHERE `regId`='$regId'";
 	$db->insertquery($updquery);
	echo"<script>alert('updated succesfully');window.location='../customerHome.php';</script>";
?>
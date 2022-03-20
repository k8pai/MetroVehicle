<?php
	include('../dbcon.php');
	$db=new dbcon;
	session_start();

	$transmode=$_POST['trans'];
	$bookId=$_POST['bookId'];
	unset($_SESSION['cancel']);
	
	$selquery="select * from bookinghistory where BookingId='$bookId' and transportMode='$transmode'";
	$query=$db->selectData($selquery);
	if($row=mysqli_fetch_array($query)){
		$bookingStatus=$row['bookingStatus'];
		$paymentStatus=$row['paymentStatus'];
		if($bookingStatus!=='transport assigned' and $bookingStatus !== 'Cancelled' and $paymentStatus!=='Successful'){
			$bookingid=$row['bookingId'];
			$delquery="delete from banda where bookingId='$bookingid' and transMode='$transmode'";
			$db->insertQuery($delquery);
			$updquery="update bookinghistory set bookingStatus='Cancelled' where bookingId='$bookingid'";
			$db->insertQuery($updquery);

			echo"<script>alert('Ticket Cancelled!');window.location='../cancel.php';</script>";
			$_SESSION['cancel']='true';
		}
		else if($bookingStatus == 'Cancelled')
		{
			echo"<script>alert('Your already cancelled this ticket!');window.location='../cancel.php';</script>";
		}
		else if($paymentStatus == 'Successful'){
			$updquery="update bookinghistory set paymentStatus='Refundable' where bookingId='$bookId'";
			$db->insertQuery($updquery);
			echo"<script>alert('Your already paid for this ticket.');window.location='../cancel.php';</script>";
		}
		else{
			echo"<script>alert('Your transport has already been assigned!');window.location='../cancel.php';</script>";
		}
	}
	else
	{
		unset($_SESSION['cancel']);
		echo"<script>alert('Check your credentials and try again!');window.location='../cancel.php';</script>";
	}
?>
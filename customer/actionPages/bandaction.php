<?php
	session_start();
	include('../dbcon.php');
	$db=new dbcon;
	date_default_timezone_set('Asia/Kolkata');

	$b=$_POST['Bstation'];
	$c=$_POST['Astation'];
	$transMode=$_POST['mot'];
	$dest=$_POST['avlstation'];
	$custcount=$_POST['numpass'];
	$randcode=mt_rand(10000,99999);
	$bookId="cbkid".mt_rand(1234444,1239999);
	$dateVar=date('j/m/y, H:i');
	$userName=$_SESSION['cust'];

	echo $userName;

	$sql="select * from station where sName='$c'";
	$sql1="select * from servavlloc where avlStation='$dest'";
	$sql2="select * from ratecalc where pickLoc='$c' and avlStation='$dest'";
	$sql3="select * from payment where ";
	$query=$db->selectData($sql);
	$query1=$db->selectData($sql1);
	$query2=$db->selectData($sql2);
	$row=mysqli_fetch_array($query);
	$row1=mysqli_fetch_array($query1);
	$row2=mysqli_fetch_array($query2);

	$_SESSION['srcCode']=$row['sCode'];
	$_SESSION['numCab']=$row['numCab'];
	$_SESSION['numAuto']=$row['numAuto'];
	$_SESSION['destCode']=$row1['servavllocId'];
	$ticketFare=$row2['rate'];
	$_SESSION['rate']=$row2['rate'];
	if($_SESSION['rate']=='0'){
		$_SESSION['rate']='1';
	}
	$_SESSION['randCode']=$randcode;
	$_SESSION['bookingId']=$bookId;
	$_SESSION['start']=date('H:i:sa');
	$_SESSION['expire']=date(('H:i:sa'),time() + 3600);
	$_SESSION['pickLoc']=$_POST['Astation'];
	$_SESSION['avlStation']=$_POST['avlstation'];
	$_SESSION['transMode']=$_POST['mot'];
	$_SESSION['custcount']=$_POST['numpass'];
	$_SESSION['bookingStatus']=" ";

	if($row2=mysqli_fetch_array($query2)){
		if($_SESSION['transMode']="Cab"){
			if($_SESSION['numCab']>0){
				$sql="insert into banda(bookingId,Bstation,Astation,destination,transMode,ticketFare,randCode,paymentStatus,custCount) values ('$bookId','$b','$c','$dest','$transMode','$ticketFare','$randcode','Pending','$custcount')";
				$db->insertQuery($sql);
				$sql="insert into bookinghistory(userName,fromStation,toStation,transportMode,ticketFare,bookingStatus,paymentStatus,passengerCount,date,bookingId) values ('$userName','$c','$dest','$transMode','$ticketFare','booked','pending','$custcount','$dateVar','$bookId')";
				$db->insertQuery($sql);

				$selquery="select * from bookinghistory where bookingId='$bookId'";
				$query=$db->selectData($selquery);
				if($row=mysqli_fetch_array($query))
				{
					$_SESSION['bookingStatus']=$row['bookingStatus'];
				}

				echo"<script>alert('5 digit OTP generated in your ticket!');window.location='../razorpay-php/pay.php';</script>";
			}
				echo"<script>alert('No Cabs are Available now from this station. Choose another transport.');window.location='../ticketBooking.php'</script>";
		}
		else if($_SESSION['transMode']="E-AutoRickshaw"){
			if($_SESSION['numAuto']>0){
				$sql="insert into banda(bookingId,Bstation,Astation,destination,transMode,ticketFare,randCode,paymentStatus,custCount) values ('$bookId','$b','$c','$dest','$transMode','$ticketFare','$randcode','Pending','$custcount')";
				$db->insertQuery($sql);
				$sql="insert into bookinghistory(userName,fromStation,toStation,transportMode,ticketFare,bookingStatus,paymentStatus,passengerCount,date,bookingId) values ('$userName','$c','$dest','$transMode','$ticketFare','booked','pending','$custcount','$dateVar','$bookId')";
				$db->insertQuery($sql);

				$selquery="select * from bookinghistory where bookingId='$bookId'";
				$query=$db->selectData($selquery);
				if($row=mysqli_fetch_array($query))
				{
					$_SESSION['bookingStatus']=$row['bookingStatus'];
				}

				echo"<script>alert('5 digit OTP generated in your ticket!');window.location='../razorpay-php/pay.php';</script>";
			}
			echo"<script>alert('No E-AutoRickshaws are Available now from this station. Choose another transport');window.location='../ticketBooking.php'</script>";
		}
		else if($_SESSION['transMode']="Bi-Cycle"){
			if($_SESSION['numCycle']>0){
				$sql="insert into banda(bookingId,Bstation,Astation,destination,transMode,ticketFare,randCode,paymentStatus,custCount) values ('$bookId','$b','$c','$dest','$transMode','$ticketFare','$randcode','Pending','$custcount')";
				$db->insertQuery($sql);
				$sql="insert into bookinghistory(userName,fromStation,toStation,transportMode,ticketFare,bookingStatus,paymentStatus,passengerCount,date,bookingId) values ('$userName','$c','$dest','$transMode','$ticketFare','booked','pending','$custcount','$dateVar','$bookId')";
				$db->insertQuery($sql);

				$selquery="select * from bookinghistory where bookingId='$bookId'";
				$query=$db->selectData($selquery);
				if($row=mysqli_fetch_array($query))
				{
					$_SESSION['bookingStatus']=$row['bookingStatus'];
				}

				echo"<script>alert('5 digit OTP generated in your ticket!');window.location='../razorpay-php/pay.php';</script>";
			}
			echo"<script>alert('No Cycles are Available now from this station. Choose another transport.');window.location='../ticketBooking.php'</script>";
		}
	}
	else{
		echo "<script>alert('There is no service available to the selected destination.');window.location='../ticketBooking.php';</script>";
	}
?>
<!-- "D:\wamp_updated\www\MetroVehicle\MetroVehicle\razorpay-php\pay.php" -->


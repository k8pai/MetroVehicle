<?php 
	session_start();
	include('../dbcon.php');
	$db=new dbcon();

	$idCode=$_GET['id'];
	$_SESSION['ticket']="false";

	echo "idCode = ".$idCode;
	$sql="select * from banda where bandaId='$idCode'";
	$query=$db->selectData($sql);
	while($row=mysqli_fetch_array($query))
  	{
  		if($row['transMode'] == "Cab") {
  			// echo "<script>alert('checked if transMode is a cab');</script>";
			$stationName=$row['Astation'];
			$query1=$db->selectData("select * from station where sName='$stationName'");
			$row1=mysqli_fetch_array($query1);
			if($row1['numCab'] > 0){
				// echo "<script>alert('inside second if');</script>";
				$sql="update station set numCab = numCab - 1 where sName='$stationName' AND numCab > 0";
				$db->insertquery($sql);
				$updquery="update bookinghistory set bookingStatus='transport assigned' where bookingId='".$row['bookingId']."'";
				$db->insertQuery($updquery);
				$updquery="update banda set rideNumber='' where bookingId='".$row['bookingId']."'";
				$db->insertQuery($updquery);
				$_SESSION['ticket']="true";
				echo "<script>alert('Updated successfully'); window.location='../ticketBooking.php';</script>";
		  	}
	  		else{
	  			unset($_SESSION['ticket']);
				echo "<script>alert('No cabs are available for Allocation.');window.location='../ticketBooking.php';</script>";
			}
		}
		if ($row['transMode'] == "E-AutoRickshaw") {
			$stationName=$row['Astation'];
			$query1=$db->selectData("select * from station where sName='$stationName'");
			$row1=mysqli_fetch_array($query1);
			if($row1['numAuto'] > 0){
				$sql="update station set numAuto = numAuto - 1 where sName='$stationName' AND numAuto > 0";
				$db->insertquery($sql);
				$updquery="update bookinghistory set bookingStatus='transport assigned' where bookingId='".$row['bookingId']."'";
				$db->insertQuery($updquery);
				$_SESSION['ticket']="true";
				echo "<script>alert('Updated successfully'); window.location='../ticketBooking.php';</script>";
		  	}
	  		else{
	  			unset($_SESSION['ticket']);
				echo "<script>alert('No E-AutoRickshaws are available for Allocation.');window.location='../ticketBooking.php';</script>";
			}
		}
	}
 ?>
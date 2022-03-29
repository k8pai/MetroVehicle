<?php 
	include('../dbcon.php');
	$db=new DbCon();

	$idCode=$_GET['id'];
	// unset($_SESSION['assigned']);

	echo $idCode;
	$sql="select * from banda where bandaId='$idCode'";
	$query=$db->selectData($sql);
	while($row=mysqli_fetch_array($query))
  	{
  		echo "yes1";
  		// echo "transMode = ".$row['transMode'];
  		// echo "<script>alert('Inside while loop');</script>";
  		if($row['transMode'] == "Cab") {
  			// echo "<script>alert('checked if transMode is a cab');</script>";
			$stationName=$row['Astation'];
			$query1=$db->selectData("select * from station where sName='$stationName'");
			$row1=mysqli_fetch_array($query1);
			if($row1['numCab'] < 3){
				// echo "<script>alert('inside second if');</script>";
				$sql="update station set numCab = numCab + 1 where sName='$stationName' AND numCab < 3";
				$db->insertquery($sql);
				$_SESSION['assigned']="true";
				echo "<script>alert('Updated successfully'); window.location='../ticketBooking.php';</script>";
		  	}
	  		else{
				echo "<script>alert('Every Cabs are present at the station.');window.location='../ticketBooking.php';</script>";
			}
		}
		if ($row['transMode'] == "E-AutoRickshaw") {
			// echo "<script>alert('check if transMode is an auto');</script>";
			$stationName=$row['Astation'];
			$query1=$db->selectData("select * from station where sName='$stationName'");
			$row1=mysqli_fetch_array($query1);
			if($row1['numAuto'] < 3){
				// echo "<script>alert('inside second if ');</script>";
				$sql="update station set numAuto = numAuto + 1 where sName='$stationName' AND numAuto < 3";
				$db->insertquery($sql);
				$_SESSION['assigned']="true";
				echo "<script>alert('Updated successfully'); window.location='../ticketBooking.php';</script>";
		  	}
	  		else{
				echo "<script>alert('Every E-AutoRickshaws are present at the station.');window.location='../ticketBooking.php';</script>";
			}
		}
	}

	// $sName=$_GET['id'];

	// //echo "idCode = ".$idCode;
	// $sql="select * from banda where BAcode='$idCode'";
	// $query=$db->selectData($sql);

	// $stationsql="select * from station where sName='$sName'";
	// $stationquery=$db->selectData($stationsql);
	// while($stationrow=mysqli_fetch_array($stationquery))
 //  	{
 //  		if($stationrow['numCab'] < 3){
	// 	$stationName=$stationrow['sName'];	
	// 	$sql="update station set numCab= numCab + 1 where sName='$stationName'";
	// 	$db->insertquery($sql);
	// 	echo "<script>alert('Updated successfully'); window.location='ticketBooking2.php';</script>";
	//   	}
 //  		else{
	// 		echo "<script>alert('Already allocated full transports.');window.location='ticketBooking2.php';</script>";
	// 	}
	// }
?>
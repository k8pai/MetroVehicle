<?php
	include('../dbcon.php');
	$db=new dbcon;
	
	$pickloc=$_POST['pickloc'];
	$avlstation=$_POST['avlstation'];
	$transmode=$_POST['transmode'];
	$rate=$_POST['kmsToCover'];
	if($transmode=="Cab")
	{
		$rate=$rate*50;
	}
	if($transmode=="E-AutoRickshaw")
	{
		$rate=$rate*20;
	}

	$selquery="select * from ratecalc";
	$query=$db->selectData($selquery);
	while($row=mysqli_fetch_array($query))
	{
		if("$pickloc" == $row['pickLoc'] && "$avlstation" == $row['avlStation'] && "$transmode" == $row['transMode'] && $row['rate']!=" "){
			
		}
	}
	$sql="insert into ratecalc(pickLoc,avlStation,transMode,rate) values ('$pickloc','$avlstation','$transmode','$rate')";
	$db->insertQuery($sql);

	echo"<script>window.location='../bookingPrice.php'</script>";
?>
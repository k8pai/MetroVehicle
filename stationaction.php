<?php
	include('dbcon.php');
	$db=new dbcon;
	
	$scode=$_POST['scode'];
	$sname=$_POST['sname'];
	
	$selquery="select * from station";
	$query=$db->selectData($selquery);
	while($row=mysqli_fetch_array($query))
	{
		if("$scode" == $row['sCode']){
			echo "<script>alert('Oops! You entered an existing station Code.');window.location='station.php';</script>";
			exit();
		}
		else if("$sname" == $row['sName']){
			echo "<script>alert('Oops! You entered an existing station Name.');window.location='station.php';</script>";
			exit();
		}
	}
	$sql="insert into station(sCode,sName) values ('$scode','$sname')";
	$db->insertQuery($sql);

	echo "<script>alert('Station Added');window.location='station.php'</script>";
?>
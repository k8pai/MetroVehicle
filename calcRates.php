<?php
	include('dbCon.php');
	db=new DbCon();
	session_start();
	$src1=$_POST['src'];
	$src2=$_POST['dest'];
	$sql="select * from mrate";
	$rt = $db->selectQuery($sql);
	if($rt==1)
	{
		$rs = $db->selectQuery($sql);
		$row = mysqli_fetch_array($rs);
		$price = $row['rate'];
		
		
	}
	
?>
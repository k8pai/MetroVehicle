<?php
	include('dbCon.php');
	$db=new DbCon();
	session_start();
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	$sql="select * from login where uname='$uname' and upass='$upass'";
	$sql1="select * from reg where mail='$uname'";
	$rt=$db->selectQuery($sql);
	if($rt==1)
	{
		$rs =$db->selectData($sql);
		$query=$db->selectData($sql1);
		$row=mysqli_fetch_array($rs);
		$reg1=mysqli_fetch_array($query);
		$utype=$row['utype'];
		$_SESSION['uid']=$row['loginId'];
		if($utype=="admin")
		{
			$_SESSION['fname']=$reg1['fname'];
			$_SESSION['lname']=$reg1['lname'];
			$_SESSION['admin']=$row['uname'];
			echo "<script>window.location='adminhome.php';</script>";
		}
		else if($utype=="staff")
		{
			$_SESSION['staff']=$row['uname'];
			echo "<script>alert('login success');window.location='/staff/staffhome.php';</script>";
		}
		else if($utype=="cust")
		{
			$_SESSION['fname']=$reg1['fname'];
			$_SESSION['lname']=$reg1['lname'];
			$_SESSION['cust']=$row['uname'];
			echo "<script>alert('login success');window.location='/customer/customerHome.php';</script>";
		}
		else
		{
			echo "<script>alert('invalid username or password.');window.location='index.php';</script>";
		}
	}
	else
	{
	// 	$_SESSION['loggedIn']='';
		echo "<script>alert('login failed');window.location='index.php';</script>";
	}
?> 
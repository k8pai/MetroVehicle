<?php
include('dbcon.php');
$db=new dbcon;
$ucode=$_GET['id'];
$s="select * from transport where tcode='$ucode'";
$rs=$db->selectData($s);
$row-mysqli_fetch_array($rs);
?>
	<form action="transportaction.php" method="post">
		<table>
		<tr>
			<td>TCODE:</td><td><input type="text" name="transcode"></td>
		<tr>
		<tr>
		<label for="TRANSPORT" > TRANSPORT:</label>
		<select name="transport" id="TRANSPORT">
			<option value="BICYCLE">BICYCLE</options>
			<option value="M-BUS">M-BUS</options>
			<option value="E-AUTORICKSHAW">E-AUTORICKSHAW</options>
			<option value="OTHERS">OTHERS</options>
		</select>
		<tr>
			<td>TIME REQUIRED:</td><td><input type="time" name="time"></td>
		<tr>
		<tr>
			 <td><input type ="submit" value="signup"></td>
		</tr>
		</table>
	</form>
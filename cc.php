<html >
<head>	
	<title>CANCELLATION AND COMPLAINT FORM</title>
</head>

<body>
	<h1>CANCELLATION AND COMPLAINT FORM</h1>
		<form action="ccaction.php" method="post">
		<table>
		<tr>
			<td>Ccode:</td><td><input type="text" name="cancode"></td>
		<tr>
		<tr>
			<td>USERNAME:</td><td><input type="text" name="uname"></td>
		<tr>
		<tr>
			<td>PASSWORD:</td><td><input type="text" name="pass"></td>
		<tr>
		<tr>
		<label for="MODE OF TRANSPORT" > CHOOSE A METHOD:</label>
		<select name="trans" id="TRANSPORT">
			<option value="BICYCLE">BICYCLE</options>
			<option value="M-BUS">M-BUS</options>
			<option value="E-AUTORICKSHAW">E-AUTORICKSHAW</options>
			<option value="OTHERS">OTHERS</options>
		</select>
		<tr>
			<td>REFUND ACCOUNT:</td><td><input type="text" name="refacc"></td>
		<tr>
		<tr>
			<td>COMPLAINT BOX:</td><td><textarea name="complaint" form="usrform"> </textarea></td>
		<tr>
		
		<tr>
			 <td><input type ="submit" value="PROCEED"></td>
		</tr>
	</form>
	<table border="1">
		<tr>
		<th>CCODE</th>
		<th>USERNAME</th>
		<th>TRANSPORT</th>
		<th>REFUND ACCOUNT</th>

		</tr>
		<?php
		include('dbcon.php');
		$db=new dbcon;

		$s="select * from cancomp";

		$rs=$db->selectData($s);

		while($row=mysqli_fetch_array($rs))
		{
		?>
			<tr>
			<td><?php echo $row['cancode']; ?></td>
			<td><?php echo $row['uname']; ?></td>
			<td><?php echo $row['trans']; ?></td>
			<td><?php echo $row['refacc']; ?></td>
			</tr>
		<?php } ?>
</body>
</html>
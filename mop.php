<html >
<head>	
	<title>PAYMENT  FORM</title>
</head>

<body>
	<h1>PAYMENT FORM</h1>
	<form action="mopaction.php" method="post">
		<table>
		<tr>
			<td>PCODE:</td><td><input type="text" name="paycode"></td>
		<tr>
		<tr>
		<label for="METHOD" > CHOOSE A METHOD:</label>
		<select name="paymode" id="METHOD">
			<option value="UPI">UPI</options>
			<option value="CREDIT/DEBIT CARD">CREDIT/DEBIT CARD</options>
			<option value="POST PAYMENT">POST PAYMENT</options>
			<option value="OTHERS">OTHERS</options>
		</select>
		<tr>
		 <td><input type ="submit" value="PROCEED"></td>
		</tr>
	</form>
	<table border="1">
		<tr>
		<th>PCODE</th>
		<th>PAYMENTN</th>

		</tr>
		<?php
		include('dbcon.php');
		$db=new dbcon;

		$s="select * from payment";

		$rs=$db->selectData($s);

		while($row=mysqli_fetch_array($rs))
		{
		?>
			<tr>
			<td><?php echo $row['paycode']; ?></td>
			<td><?php echo $row['paymode']; ?></td>

			</tr>
		<?php } ?>
</body>
</html>
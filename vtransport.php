<html >
<head>	
	<title>TRANSPORT</title>
</head>

<body>
	
	<h1>TRANSPORT</h1>
	
		<table border="1">
		<tr>
		
		<th>TRANSPORT</th>
		<th>DRIVING MODE</th>
		<th>RATE</th>
		</tr>
		<?php
		include('dbcon.php');
		$db=new dbcon;

		$s="select * from transport";

		$rs=$db->selectData($s);

		while($row=mysqli_fetch_array($rs))
		{
		?>
			<tr>
			
			<td><?php echo $row['transport']; ?></td>
			<td><?php echo $row['driving']; ?></td>
			<td><?php echo $row['rate']; ?></td>
			
			
						</tr>
			<?php } ?>
		</table>
</body>
</html>
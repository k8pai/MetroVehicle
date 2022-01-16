<html >
<head>	
	<title>STATION FORM</title>
</head>

<body>
	<h6>STATION FORM</h6>

	<table border="1">
		<tr>
		<th>STATION CODE</th>
		<th> STATION</th>
		
		</tr>
		<?php
		include('dbcon.php');
		$db=new dbcon;

		$s="select * from station";

		$rs=$db->selectData($s);

		while($row=mysqli_fetch_array($rs))
		{
		?>
			<tr>
			<td><?php echo $row['scode']; ?></td>
			<td><?php echo $row['station']; ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
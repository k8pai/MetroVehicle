<html >
<head>	
	<title>STATION FORM</title>
</head>

<body>
	<h6>RATE FORM</h6>
	
	<table border="1">
		<tr>
		<th>SOURCE</th>
		<th>DESTINATION</th>
		<th>TICKET RATE</th>
		</tr>
		<?php
		
	include('dbcon.php');
	$db=new dbcon;
		$s="select * from mrate";

		$rs=$db->selectData($s);

		while($row=mysqli_fetch_array($rs))
		{
		?>
			<tr>
			<td><?php echo $row['src']; ?></td>
			<td><?php echo $row['dest']; ?></td>
			<td><?php echo $row['rate']; ?></td>
			
			</tr>
		<?php } ?>
	</table>
</body>
</html>
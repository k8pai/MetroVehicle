<?php
	session_start();
	include('dbcon.php');
	$db=new DbCon();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>driver details</title>
</head>
<body>

	<form action="randomGenerator.php" method="post">
		<select class="form-select shadow-lg" aria-label="Default select example" name="stationName" required autofocus>
          <option value="" selected disabled>Station Name</option>
          <?php
          $s="select * from station";
          $rs=$db->selectData($s);
          while($row=mysqli_fetch_array($rs)) 
          {
          ?>
          <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>

          <?php 
          }
          ?>
        </select>
        <br>
        <br>
        <br>
        <select class="form-select shadow-lg" aria-label="Default select example" name="transMode" required autofocus>
          <option value="Cab" selected>Station Name</option>
          <?php
          $s="select * from transport";
          $rs=$db->selectData($s);
          while($row=mysqli_fetch_array($rs)) 
          {
          ?>
          <option value="<?php echo $row['transMode']; ?>"><?php echo $row['transMode']; ?></option>

          <?php 
          }
          ?>
        </select>
        <input type="submit" name="submit" value="submit">
	</form>

	<table class="table table-borderless shadow-lg"  style="width: fit-content; text-align: center; margin: auto;">
              <thead>
                <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                  <th scope="col"> ride ID </th>
                  <th scope="col"> station NAME </th>
                  <th scope="col"> ride NAME </th>
                  <th scope="col"> ride Number </th>
                  <th scope="col"> transMode </th>
                  <th scope="col"> driver NAME </th>
                  <th scope="col"> driverNumber </th>
                  <th scope="col"> availability </th>
                </tr>
              </thead>
              <tbody>
                <?php

                  // if(!isset($_POST['flagval'])){
                  //   $flag="all";
                  // }
                  // else{
                  //   $flag=$_POST['flagval'];
                  // }


                  // if($flag=="admin"){
                  //   $s="select * from reg where utype='admin'";
                  // }
                  // else if($flag=="staff"){
                  //   $s="select * from reg where utype='staff'";
                  // }
                  // else if ($flag=="cust") {
                  //   $s="select * from reg where utype='cust'";
                  // }
                  // else{
                  //   $s="select * from reg";
                  // }

                  // if(isset($_POST['mailId'])){
                  //   $sel="select * from reg where mail='".$_POST['mailId']."'";
                  //   $rs=$db->selectData($sel);
                  //   if($row=mysqli_fetch_array($rs)){
                  //     $s=$sel;
                  //   }
                  $s="select * from driverDetails";
                  $rs=$db->selectData($s);
                  while($row=mysqli_fetch_array($rs))
                  {
                  ?>
                    <tr class="data shadow-lg">
                    <td><?php echo $row['rideId']; ?></td>
                    <td><?php echo $row['sName']; ?></td>
                    <td><?php echo $row['rideName']; ?></td>
                    <td><?php echo $row['rideNumber']; ?></td>
                    <td><?php echo $row['transMode']; ?></td>
                    <td><?php echo $row['driverName']; ?></td>
                    <td><?php echo $row['driverNumber']; ?></td>
                    <td><?php echo $row['availbility']; ?></td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table>
</body>
</html>
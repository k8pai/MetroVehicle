<?php 
  session_start();
  if(!isset($_SESSION['staff'])){
    header('location: login.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="../css/commonStyles.css">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Transport Updation</title>
    
    <script>
      function goBack() {
        window.history.back();
      }
      function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </head>
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="abc-1" style="height: 100%; width: 100%;">
    <div class="abc-2"style="min-height: 100%; width: 100%; border: 1px solid black;">
        <div class="abc-3">
          <div id="mySidenav" class="sidenav">
            <div class="closebtn-div">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <a href="/staff/staffhome.php">Home</a>
            <a href="/staff/vreg.php">User Details</a>
            <a href="/staff/ticketBooking.php">Booking</a>
            <a href="/staff/mop.php">Payment management</a>
            <a href="/../logout.php">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="box-shadow: 0px 7px 10px #141414; height: 60px;">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; text-align: center;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
          <div class="container">
            <div class="card text-dark bg-transparent mb-3">
              <div class="card-header">Add Transport.</div>
              <div class="card-body" style="width: 550px;">
                <form action="" method="post">
                <div class="input1">
                  <input type="text" class="form-control shadow-lg" placeholder=" Booking Id " aria-label="Bookin Id" name="bookingid">
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Bstation">
                  <option selected disabled>Boarding Station</option>
                  <?php
                  include('dbcon.php');
                  $db=new DbCon();
                  $selstation="select * from station";
                  $selquery=$db->selectData($selstation);
                  while($row=mysqli_fetch_array($selquery)) 
                  {
                  ?>
                  <option value="<?php echo $row['scode']; ?>"><?php echo $row['sName']; ?></option>

                  <?php 
                  }
                  ?>
                </select>
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Astation">
                  <option selected disabled>Arrival Station</option>
                  <?php
                  while($row=mysqli_fetch_array($selquery)) 
                  {
                  ?>
                  <option value="<?php echo $row['scode']; ?>"><?php echo $row['sName']; ?></option>

                  <?php 
                  }
                  ?>
                </select>
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Atime">
                    <option selected disabled>Mode of Transport</option>
                    <?php
                    $seltransport="select * from transport";
                    $selquery=$db->selectData($seltransport);
                    while($row=mysqli_fetch_array($selquery)) 
                    {
                    ?>
                    <option value="<?php echo $row['transMode']; ?>"><?php echo $row['transMode']; ?></option>

                    <?php 
                    }
                    ?>
                  </select>
                </div>
                <div class="input1">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Destination" name="destination">
                </div>
                <div class="input1">
                  <input type="submit" class="form-control btn shadow-lg" value=" Search ">
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="card text-dark bg-transparent mb-3 shadow-lg">
              <div class="card-header"> Available mode of transports.</div>
              <div class="card-body" style="width: fit-content;">
                <table class="table table-borderless shadow-lg">
                  <thead>
                    <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                      <!-- <th scope="col"> BACODE </th> -->
                      <th scope="col"> BOOKING ID </th>
                      <th scope="col"> ASTATION </th>
                      <th scope="col"> DESTINATION </th>
                      <th scope="col"> TICKET RATE </th>
                      <th scope="col"> ONE TIME PIN </th>
                      <th scope="col"> TRANSMODE </th>
                      <!-- <th scope="col"> PASSENGERS </th> -->
                      <th scope="col"> CABS AVAILABLE </th>
                      <th scope="col"> AUTOS AVAILABLE </th>
                      <th scope="col"> ASSIGN </th>
                      <th scope="col"> REASSIGN </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      if(isset($_POST['bookingid'])){
                        echo $_POST['bookingid'];
                        $bookingid=$_POST['bookingid'];
                      }else{
                        echo "not defined";
                        $bookingid="";
                      }
                      $selquery="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."'";

                      if($bookingid !== ""){
                        $selquery=$selquery." and where banda.bookingId='".$_POST['bookingid']."'";
                      }
                      // $s="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."'";

                      $rs=$db->selectData($selquery);
                      $i=1;
                      echo $selquery;
                      if($rs){

                      while($row=mysqli_fetch_array($rs))
                      {
                      ?>
                        <tr class="data shadow-lg">
                        <!-- <td><?php echo $row['bandaId']; ?></td> -->
                        <td><?php echo $row['bookingId']; ?></td>
                        <td><?php echo $row['Astation']; ?></td>
                        <td><?php echo $row['destination']; ?></td>
                        <td><?php echo $row['ticketFare']; ?></td>
                        <td><?php echo $row['randCode']; ?></td>
                        <td><?php echo $row['transMode']; ?></td>
                        <!-- <td><?php echo $row['custCount']; ?></td> -->
                        <td><?php echo $row['numCab']; ?></td>
                        <td><?php echo $row['numAuto']; ?></td>
                        <td><a href="assignTransport.php?id=<?php echo $row['bandaId']; ?>">Assign</a></td>
                        <td><a href="reassignTransport.php?id=<?php echo $row['bandaId']; ?>">Reassign</a></td>
                        <td><a href="deleteBooking.php?id=<?php echo $row['bandaId']; ?>">Move to history</a></td>
                        </tr>
                      <?php $i++;} 
                      }
                      else{
                        echo "<script>alert('No records to display!');</script>";
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <footer>
            <div>
              <span>Copyright @ 2021 Team KGZ. All rights reserved</span>
              <span>Designed by KGZ.</span>
            </div>
          </footer>
      </div>
    </div>
  </div>
</body>
</html>
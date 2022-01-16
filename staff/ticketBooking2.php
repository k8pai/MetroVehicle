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

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Transport Updation</title>
    <style type="text/css">
    body{
      background-image: url('wp8715322.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .sidenav{
      display: block;
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      transition: 0.5s;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .sidenav a{
      padding: 7px 7px 7px 27px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover{
      color: #f1f1f1;
    }

    .sidenav .closebtn{
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    a.menu-btn{
      cursor: pointer;
      margin-left: 15px;
    }

    a.menu-btn:focus{
      content: '';
      width: 20%;
      height: 100%;
      background: #0a0a09;
      border: 1px solid #0297ad;
    }

    span.header{
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Dancing Script', cursive;
      text-align: middle;
      letter-spacing: 3px;
      color: #111;
      font-style: bold;
    }

    a.back-btn{
      position: absolute;
      right: 15px;
      top: 10px;
      cursor: pointer;
    }
    div.nav-bar{
      position: sticky;
      padding: 15px;
      border: 1px solid gray;
      border-radius: 0px 0px 5px 5px;
      background: #21211f;
    }


    li.nav-item{
      padding: 0px 10px; 
      margin: 0px 25px;
      display: flex;
      justify-items: left;
      font-family: 'Dancing Script', cursive;
      font-size: 20px;
      border: 1px solid gray;
      border-radius: 5px;
    }

    li.nav-item a{
      margin: 0px 15px;
    }

    div.section{
      display: flex;
      flex-direction: column;
      position: absolute;
      left: 50%;
      top: 20%;
      transform: translate(-50%);
    }

    select.form-select, div.form-control{
      margin: 20px 5%;
      width: 90%;
      letter-spacing: 2px;
      margin-top: 10px;
    }

    div.input1{
      display: flex; 
      width: 100%;
      justify-content: center; 
      padding: 0px, 10px; 
      margin-bottom: 13px;
    }

    input.form-control1{
      width: 90%; height: 38px; border-radius: 5px; border: 1px solid lightgray; letter-spacing: 3px; display: flex; margin: auto; margin-top: 10px; padding: 10px;
    }

    div.right-box{
      margin-top:  90px;
      margin-bottom: 130px;
    }

    div.card.text-white.bg-dark.mb-3.right{
    }

    div.footer{
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background: #141414;
      color: ghostwhite;
    }

    div.footer div{
      padding: 8px;
      margin: 20px;
    }

    div.footer div span{
      display: flex;
      justify-content: center;
    }


    </style>
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
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="customerHome.php" >Home</a>
            <a href="ticketRates.php">Ticket Rates</a>
            <a href="stationsAndTiming.php">Stations & Timings</a>
            <a href="transportation.php">Transportation</a>
            <a href="ticketBooking.php">Booking</a>
            <a href="bookingdetails.php">Booking details</a>
            <a href="printTicket.php">E-Ticket</a>
            <a href="payment.php">Payment</a>
            <a href="cancel.php">Cancel ticket</a>
            <a href="cancellation.php">Complaint</a>
            <a href="logout.php">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; color: #111;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
          <div class="right-box">
            <div class="card text-white bg-dark mb-3 right">
              <div class="card-header" style="text-align: center;"> Available mode of transports.</div>
              <div class="card-body">
                <table class="table table-borderless"  style="color: whitesmoke; text-align: center;">
                  <thead>
                    <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                      <th scope="col"> Station Code </th>
                      <th scope="col"> Station Name </th>
                      <th scope="col"> Number Of Cabs </th>
                      <th scope="col"> Number Of Autos </th>
                      <th scope="col"> REASSIGN </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include('dbcon.php');
                      $db=new dbcon();
                      $s="select * from banda inner join station on station.sName=banda.Astation and station.stationStaff='".$_SESSION['staff']."'";
                      $rs=$db->selectData($s);
                      while($row=mysqli_fetch_array($rs))
                      {
                      ?>
                        <tr class="data">
                        <td><?php echo $row['scode']; ?></td>
                        <td><?php echo $row['sName']; ?></td>
                        <td><?php echo $row['numCab']; ?></td>
                        <td><?php echo $row['numAuto']; ?></td>
                        <td><a href="reassignTransport.php?id=<?php echo $row['BAcode']; ?>">Reassign</a></td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <div>
            <span>Copyright @ 2021 Team KGZ. All rights reserved</span>
            <span>Designed by KGZ.</span>
          </div>
        </div>
    </div>
</div>
    </body>
</html>
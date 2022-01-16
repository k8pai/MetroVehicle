<?php 
  session_start();
  if(!isset($_SESSION['cust'])){
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
    <title>Stations And Timings</title>
    <style type="text/css">
    body{
      /*background: #0a0a09;*/
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-image: url('wall-img2.png');
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
      letter-spacing: 3px;
      font-style: bold;
    }

    a.back-btn{
      position: absolute;
      right: 15px;
      top: 10px;
      cursor: pointer;
    }

    div.nav-bar{
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
      min-height: 96vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    div.container{
      width: fit-content;
      display: flex;
      margin: auto;
      margin-top: 100px;
    }

    div.card-header{
      text-align: center;
      border: 1px solid #576765;
      border-bottom: none;
    }

    div.card-body{
      padding: 15px;
      border: 1px solid #576765;
    }

    div.footer{
      width: 100%;
      text-shadow: 5px 3px 10px #141414;
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
  </head>
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <div class="abc-1" style="height: 100%; width: 100%;">
          <div class="abc-2"style="min-height: 100%; width: 100%; border: none;">
              <div class="abc-3">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="customerHome.php" >Home</a>
                  <a href="ticketRates.php">Ticket Rates</a>
                  <a href="stationsAndTiming.php">Stations & Timings</a>
                  <a href="transportation.php">Transportation</a>
                  <a href="ticketBooking.php">Booking</a>
                  <a href="payment.php">Payment</a>
                  <a href="cancellation.php">Cancellation</a>
                  <a href="logout.php">logout</a>
                </div>
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
                    <span class="header" style="justify-content: center;"><h3>Metro By Vehicles</h3></span>
                    <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
                  </nav>
              </div> 
              <div class="section">
                <div class="container">
                <div class="card text-dark bg-transparent mb-3 shadow-lg" >
                  <div class="card-header shadow-lg">Stations and Timings</div>
                  <div class="card-body" style="width: 550px;">
                    <table class="table table-borderless shadow-lg"  style="color: #141414; text-align: center;">
                      <thead>
                        <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                          <th scope="col" style="font-size: Default;">*</th>
                          <th scope="col">Station Code</th>
                          <th scope="col">Station</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include('dbcon.php');
                          $db=new dbcon;

                          $s="select * from station order by scode";

                          $rs=$db->selectData($s);
                          $i=1;
                          while($row=mysqli_fetch_array($rs))
                          {
                          ?>
                            <tr class="data shadow-lg">
                            <td scope="row"><?php echo "$i";?></td>
                            <td><?php echo $row['scode']; ?></td>
                            <td><?php echo $row['station']; ?></td>
                            </tr>
                          <?php $i++;} ?>
                      </tbody>
                    </table>
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
      </div>
    </body>
</html>
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
    <title>Cancellation</title>
    <style type="text/css">
    body{
      background: #0a0a09;
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
      font-family: 'Dancinc Script', cursive;
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
      position: absolute;
      background: #111;
      width: 30rem;
      height: 40rem;
      left: 50%;
      top: 35%;
      transform: translate(-50%,-25%);
    }

    div.card-body-main{
      position: absolute;
      top: 20%;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      padding: 10px 0px;
    }

    select.form-select{
      margin: 25px 5%;
      width: 90%;
      letter-spacing: 2px;
      margin-top: 20px;
    }
    select option{
       margin: 25px 5%;
      letter-spacing: 2px;
    }

    div.mb-3-main{
      width: 90%;
      margin: 25px 5%;
      justify-content: center;
      letter-spacing: 5px;

    }

    div.input1{
      position: absolute;
      margin-top: 30px;
      left: 50%;
      transform: translate(-50%);
    }

    div.card-header-main{
      position: absolute;
      top: 5%;
      left: 50%;
      transform: translate(-50%);
      background: transparent;
      border-bottom: 2px solid gray;
      letter-spacing: 8px;
    }

    div.card.text-white.bg-dark.mb-3{
      background: #111;
      width: 30rem;
      height: 40rem;
      padding: 0;
      margin: 0;

    }

    div.card.text-white.bg-dark.mb-3.right{
      position: absolute;
      right: 10px;
      top: 52px;
      height: 100vh;
      overflow: hidden;
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
            <a href="payment.php">Payment</a>
            <a href="cancellation.php">Cancellation</a>
            <a href="login.php" onclick="preventBack()">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; color: #111;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
          <div class="card text-white bg-dark mb-3">
            <form action="ccaction.php" method="post">
            <div class="card-header-main">Cancellation</div>
            <div class="card-body-main">
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Mode of Tansport</option>
                <?php
                include('dbcon.php');
                $db=new dbcon();
                $s="select * from transport";
                $rs=$db->selectData($s);
                while($row=mysqli_fetch_array($rs))
                {
                ?>
                <option value="<?php echo $row['transport']; ?>"><?php echo $row['transport']; ?></option>
                <?php 
                }
                ?>
              </select>
              <div class="mb-3-main">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="cancode" placeholder="Cancellation Code">
              </div>
              <div class="mb-3-main">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="uname" placeholder="Username">
              </div>
              <div class="mb-3-main">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="trans" placeholder="Password">
              </div>
              <div class="mb-3-main">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="refacc" placeholder="Refund Account">
              </div>
              <div class="input1">
                <input type="submit" class="btn btn-outline-dark"  value="Cancel!" style="letter-spacing: 5px; color: ghostwhite; border: 1px solid ghostwhite; border-radius: 7px;">
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="right-box">
          <div class="card text-white bg-dark mb-3 right" style="max-width: 29rem;">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <h5 class="card-title">Jump To</h5>
              <p class="card-text"><a href="customerHome.php">Back To Home</a></p>
              <p class="card-text"><a href="ticketRates.php">Ticket Rates</a></p>
              <p class="card-text"><a href="stationsAndTiming.php">Station and Timings</a></p>
              <p class="card-text"><a href="ticketBooking.php">Ticket Booking</a></p>
              <p class="card-text"><a href="cancellation.php">Complaint And Cancellation</a></p>
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
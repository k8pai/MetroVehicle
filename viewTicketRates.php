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
    <title>Ticket Rates</title>
    <style type="text/css">
    body{

      /*background-image: url('92f0f835746185.57029469c3a92.gif');*/
      background-image: url('wall-img2.png');
      /*background: #0a0a09;*/
    }

    .sidenav{
      display: block;
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #04a0b9;
      transition: 0.5s;
      overflow-x: hidden;
    }

    .sidenav a{
      padding: 10px 7px 7px 27px;
      text-decoration: none;
      text-shadow: 2px 3px 4px #818181;
      font-size: 25px;
      color: #222;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover{
      color: #f1f1f1;
    }

    .closebtn-div{
      height: 70px;
      display: flex;
      justify-content: flex-end;
      margin-right: 20px;
    }

    .sidenav .closebtn{
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      font-size: 40px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    nav.navbar{
      display: flex;
      justify-content: space-between;
      align-content: baseline;
      font-family: 'monospace;', cursive;
      height: 70px;
      padding: 25px;
      border-radius: 0px 0px 5px 5px;
      background: #21211f;
    }

    nav a{
      cursor: pointer;
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
      margin-top: 210px;
      margin-bottom: 100px;
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

    button.btn{
      display: flex;
      margin: auto;
      margin-top: 25px;
      margin-bottom: 15px;
      border-color: whitesmoke;
      color: whitesmoke;
    }

    div.input1{
      padding: 10px 20px;
      display: flex;
      justify-content: space-around;
    }

    select.form-select, input.form-control{
      border-radius: 7px;
      width: 75%;
      /*background-color: #cbf0e9;*/
      border: 1px solid #141414;
    }

    input.form-control.btn.shadow-lg:hover{
      transition: 0.4s;
      background-color: #04a0b9;
      border: 2px solid #04a0b9;
    }

    footer{
      width: 100%;
      text-shadow: 5px 3px 10px #141414;
      /*background: #141414;*/
      color: #141414;
    }

    footer div{
      width: 100%;
      padding: 45px 0px;
    }

    footer div span{
      padding: 8px;
      margin: 0px 20px;
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
      
      function clearndview() {
        document.getElementById("table-body").style.display = "none";
        // document.getElementById("table-body").style.content = " ";
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
              <div id="mySidenav" class="sidenav shadow-lg">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php" >Home</a>
                <a href="viewticketRates.php">View Ticket Rates</a>
                <!-- <a href="viewStationsAndTiming.php">View Stations & Timings</a> -->
                <a href="invalid.php">Contact Us</a>
                <a href="invalid.php">Help</a>
                <a href="invalid.php">About Us</a>
              </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-lg"style="text-align: center;">
                  <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
                  <span class="header" style="justify-content: center;"><h3>Metro By Vehicles</h3></span>
                  <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
                </nav>
            </div>     
            <div class="section">
              <div class="container">
              <div class="card text-dark bg-transparent mb-3 shadow-lg">
                <div class="card-header shadow-lg">Ticket Rates</div>
                <div class="card-body" style="width: 550px;">
                  <form action="viewTicketRatesAction.php" method="post">
                  <div class="input1" style="margin-top: 30px;">
                    <select class="form-select shadow-lg" aria-label="Default select example" name="src">
                      <option value=" " selected disabled required>select arrival station</option>
                      <?php
                      include('dbcon.php');
                      $db=new dbcon();

                      $s="select * from station";
                      $rs=$db->selectData($s);
                      while($row=mysqli_fetch_array($rs)) 
                      {
                      ?>
                      <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>

                      <?php echo $row['sName'];
                      }
                      ?>
                    </select>
                  </div><br>
                  <div class="input1">
                    <select class="form-select shadow-lg" aria-label="Default select example" name="dest">
                      <option value=" " selected disabled required>select destination station</option>
                      <?php

                      $s="select * from station";
                      $rs=$db->selectData($s);
                      while($row=mysqli_fetch_array($rs)) 
                      {
                      ?>
                      <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>

                      <?php echo $row['sName'];
                      }
                      ?>
                    </select>
                  </div>
                  <div class="input1">
                    <input type="submit" class="form-control btn shadow-lg" onclick="" name="btn-functional" value="view details" style="letter-spacing: 5px; transition: 0.4s;margin: 20px; width: fit-content; border-radius: 7px; border: 1px solid; padding: 7px 15px;">
                  </div>
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

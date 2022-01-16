<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

     <link href="D:\wamp_updated\www\MetroVehicle\fontawesome-free-5.15.4-web" rel="stylesheet"> <!--load all styles -->


    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Login page</title>
    <style type="text/css">
    body{
      /*background: #EEF2F7;*/
      /*background-image: url('92f0walf835746185.57029469c3a92.gif');*/
      background-image: url('wall-img.jpg');
      background-position: center;
      background-size: cover;
      background-repeat: none;
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

    a.navbar-brand{
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    span.header{
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Dancinc Script', cursive;
      text-align: middle;
      letter-spacing: 3px;
      font-style: bold;
    }

    a.back-btn{
      cursor: pointer;
      position: absolute;
      right: 15px;
      top: 10px;
    }

    li.nav-item a{
      margin: 0px 15px;
    }

    div.card-header{
      text-align: center;
    }

    div.card{
      width: 20rem;
      height: 808px;
      z-index:  -1;
      position: absolute;
      margin: 10px 20px; 
      right: 0px; 
      top: 58px;
      background: #111;
      border: 1px solid grey;
    }

    div.card.shadow-lg.p-3.mb-5.bg-white.rounded{
      width: 30rem; height: 38rem; position: absolute; left: 50%; top: 45%; transform: translate(-50%, -50%); border: 1px solid grey; border-radius: 8px; padding: 10px;
    }

    div.input1{
      display: flex;
      justify-content: center;
      padding: 0px, 10px; 
      margin-bottom: 37px;
    }

    input.form-control1{
      width: 75%; height: 38px; border-radius: 5px; border: 1px solid lightgray; letter-spacing: 2px; padding: 10px;
    }

    div.link- a, label{
      display: block;
      text-align: center;
      padding: 0px 10px;
      letter-spacing: 2px;
      color: black;
    }

    footer{
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      /*background: #141414;*/
      color: #141414;
    }

    footer div{
      padding: 8px;
      margin: 20px;
    }

    footer div span{
      display: flex;
      justify-content: center;
    }
    </style>
    <script>
      var uname = document.getElementById("uname");
      var upass = document.getElementById("upass");
      var btn = document.getElementById("btn");
      uname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("upass").focus();
        }
      });
      upass.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("btn").click();
        }
      });
      function goBack() {
        window.history.back();
      }
      function openNav() {
        document.getElementById("mySidenav").style.width = "375px";
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
    <div class="abc-2"style=" height: 100%; width: 100%; border: 1px solid black;">
        <div class="abc-3">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" >Home</a>
            <a href="viewticketRates.php">View Ticket Rates</a>
            <a href="viewStationsAndTiming.php">View Stations & Timings</a>
            <a href="invalid.php">Contact Us</a>
            <a href="invalid.php">Help</a>
            <a href="invalid.php">About Us</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div>
      <div class="section">
        <div class="type-flex" style="display: flex;">
          <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <br>
                <form action="logaction.php" method="post"><br>
                <h1 style="display: flex; justify-content: center; font-family: 'Dancing Script', cursive; letter-spacing: 3px;"> Login </h1><br>
                <div class="abc-4" style="position: relative; top: 50%; width: 28rem; height: 15px;">
                    <div class="row">
                      <div class="input1">
                        <input type="text" class="form-control1" placeholder="Registered Email" aria-label="First name" id="uname" name="uname" required autofocus>
                      </div>
                      <div class="input1">
                        <i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i>
                        <input type="password" class="form-control1" placeholder="Password" aria-label="Last name" id="upass" name="upass" required>
                        <br><br><br>
                      </div>
                      <div class="input1">
                        <input type="submit" class="btn btn-outline-dark" name="btn" id="btn" value="Login" style="letter-spacing: 5px;">
                      </div>
                    </div> 
                <div class="link-">
                  <label>Not yet registered?</label>
                  <a href="registration.php">Sign Up!</a>  
                  </div>
                </div>
                </form>
          </div>
          <div class="card text-white bg-dark mb-3" style="max-width: 30rem;">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"><a href="invalid.php">Careers</a></p>
              <p class="card-text"><a href="invalid.php" aria-disabled="true">We Are Hiring!!!</a></p>
            </div>
          </div>
        </div>
        <footer>
          <div>
            <span>Copyright @ 2021 Team KGZ. All rights reserved</span>
            <span>Designed by KGZ.</span>
          </div>
          <div class="social-media-icons">
          </div>
        </footer>
      </div>
    </div>
</div>
</body>
</html>

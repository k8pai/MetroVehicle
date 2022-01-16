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
    <title>MBV Registration</title>
    <style type="text/css">
    body{
      background-image: url('wall-img.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .sidenav{
      display: block;
      height: 100%;
      width: 0%;
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
      height: 60px;
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

    @media only screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    @media only screen and (max-width: 768px){
      .sidenav{
        width: 100%;
        transition: 0.5s;
        position: relative;
        top: 0;
        left: 0;
        margin: 5px;
        height: fit-content;
      }

      .sidenav a{
        text-align: center;
        padding-bottom: 15px;
      }
      
    }

    nav.navbar{
      display: flex;
      justify-content: space-between;
      align-content: baseline;
      font-family: 'monospace;', cursive;
      box-shadow: 0px 7px 10px #141414;
      height: 60px;
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


    div.card-header{
      text-align: center;
    }

    div.section-div{
      min-height: 100vh;
    }
    div.section-container-div{
      overflow: auto;
      margin: 20px 20px 0px 20px;
    }

    div.card-div.display-none{
      float: left;
      width: 0%;
    }
    div.card.p-3.mb-5.bg-transparent.rounded{
      float: left;
      width: 80%;
      border: none;
    }

    div.card.text-white.bg-dark.mb-3{
      width: 20%;
      float: left;
      height: 1000px;
    }

    @media only screen and (max-width: 1600px)
    {
      div.card-div.display-none{
        width: 40%
      }
      div.card.p-3.mb-5.bg-transparent.rounded{ 
        width: 60%; 
      }
      div.card.text-white.bg-dark.mb-3{ 
        width: 100%; 
        height: fit-content;
      }
    }
    
    div.input1{
      display: flex; 
      justify-content: center; 
      padding: 0px, 10px; 
      margin-bottom: 13px;
    }

    input.form-control1{
      width: 75%; height: 38px; border-radius: 5px; border: 1px solid lightgray; letter-spacing: 3px; padding: 10px;
    }

    div.input-group-prepend{
      display: inline-flex;
      justify-content: center;
      margin: 0px 20px;
    }

    div.input-group-text{
      display: block;
      padding: 4px;
      margin: 0px 25px;
    }
    div.input-group-text label{
      letter-spacing: 3px;
      padding: 0px 37px;
    }

    div.link-{
      text-align: center;
      color: black;
      margin: 30px;
    }

    div.link- a{
      padding: 10px;
      letter-spacing: 2px;
      color: black;
    }

    footer{
      /*text-shadow: 5px 3px 10px #141414;*/
      background: #141414;
      color: snow;
    }

    div.footer-div
    {
      width: 100%;
      overflow: auto;
      text-align: center;
    }

    .footer-div h4{
      letter-spacing: 3px;
      font-family: monospace;
      padding-bottom: 15px;
    }

    div.footer-div-img{
      float: left;
      width: 10%;
      margin-top: 20px;
      text-align: center;
    }

    div.footer-div-span-head{
      text-align: left;
      float: left;
      width: 28%;
      height: 450px;
      padding: 75px 0px 0px 75px;
    }

    div.footer-div-span-head dt{
      padding: 15px 0px;
    }

    div.footer-div-span{
      float: left;
      width: 18%;
      height: 450px;
      padding: 75px 75px 0px 75px;
    }
    
    div.footer-div-span a{
      text-decoration: none;
      color: snow;
    }

    div.footer-div-span h4{
      padding-bottom: 15px;
    }

    div.footer-div-span dt{
      padding: 10px 0px;
    }

    div.footer-div-span-sub{
      text-align: center;
      padding: 75px 75px;
    }

    div.footer-div-span-sub dt{
      padding: 15px 0px;
    }

    div.footer-div-icons{
      /*overflow: auto;*/
    }

    div.footer-div.icons-div.d1, div.footer-div.icons-div.d2, div.footer-div.icons-div.d3{
      float: left;
      width: 20%;
      text-align: center;
    }

    div.footer-div.icons-div a{
      text-decoration: none;
      color: snow;
    }

    div.footer-div-copy{
      width: 100%;
      padding: 20px;
    }

@media only screen and (max-width: 1200px)
{
  div.footer-div-img{
    width: 20%;
  }
  div.footer-div-span-head{
    text-align: center;
    width: 100%;
    height: 350px;
    transition: 0.5s;
  }
  div.footer-div-span{
    width: 50%;
  }
}
@media only screen and (max-width: 768px){
  div.footer-div-span{
    transition: 0.5s;
    width: 100%;
  }
  .menu, .main, .right{
    width: 100%;
  }
}
@media only screen and (max-width: 620px)
{
  div.footer-div.icons-div.d1, div.footer-div.icons-div.d3{
    transition: 0.5s;
    width: 50%;
  }
  div.footer-div.icons-div.d2{
    width: 100%;
  }
}

    </style>
    <script>
      var fname = document.getElementById("fname");
      var lname = document.getElementById("lname");
      var gen1 = document.getElementById("gen1");
      var gen2 = document.getElementById("gen2");
      var ph = document.getElementById("ph");
      var mail = document.getElementById("mail");
      var pass = document.getElementById("pass");
      var btn = document.getElementById("btn");
      fname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("lname").focus();
        }
      });
      lname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("gen1").focus();
        }
      });
      gen1.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("gen2").focus();
        }
      });
      gen2.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("ph").focus();
        }
      });
      ph.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("mail").focus();
        }
      });
      mail.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("pass").focus();
        }
      });
      pass.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("btn").click();
        }
      });
      function goBack() {
        window.history.back();
      }

      
    </script>
  </head>
    <body id="body">

    <script type="text/javascript">
      document.getElementById("body").addEventListener("load", myFunction);
      // document.getElementById("body").addEventListener("resize", myFunction);
        var x = 0;
        function myFunction() {
          x = window.innerWidth;
          window.alert(x);
          window.alert("Screen Height: ");
        }

      function openNav() {
        if (window.innerWidth < 768) {
          document.getElementById("mySidenav").style.width = "100%";
          document.getElementById("mySidenav").style.height = "450px";
        }
        if (window.innerWidth > 768) {
          document.getElementById("mySidenav").style.width = "300px";
        }
      }
      function closeNav() {
        if (window.innerWidth < 768) {
          document.getElementById("mySidenav").style.width = "100%";
          document.getElementById("mySidenav").style.height = "0";
        }
        if (window.innerWidth > 768) {
        document.getElementById("mySidenav").style.width = "0";
        }
      }
    </script>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
    <span class="header" style="justify-content: center;"><h3>Metro By Vehicles</h3></span>
    <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
  </nav>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php" >Home</a>
    <a href="viewticketRates.php">View Ticket Rates</a>
    <a href="viewStationsAndTiming.php">View Stations & Timings</a>
    <a href="invalid.php">Contact Us</a>
    <a href="invalid.php">Help</a>
    <a href="invalid.php">About Us</a>
  </div>
<div class="section-div">
  <div class="section-container-div">
    <div class="card-div display-none">
      <div style="background: beige; height: 1000px; width: 375px;"></div>
    </div>
    <div class="card p-3 mb-5 bg-transparent rounded">
      <div style="width: 31rem; margin: auto; border: 1px solid grey; border-radius: 6px; padding: 10px; margin-top: 120px;">
        <br><br><br>
        <form action="regaction.php" method="post">
          <h1 style="text-align: center; font-family: 'Dancing Script', cursive; letter-spacing: 3px;"> Register Here! </h1><br><br>
            <div class="input1">
              <input type="text" class="form-control1" placeholder="First name" aria-label="First name" id="fname" name="fname" pattern="[a-z A-z]+"
              required autofocus>
            </div>
            <div class="input1">
              <input type="text" class="form-control1" placeholder="Last name" aria-label="Last name" id="lname" name="lname" pattern="[a-z A-z]+" required>
            </div>
            <div class="input1">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="gen" id="gen1" value="M" style="cursor: pointer;"><label>Male</label>
                  </div>
                  
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="gen" id="gen2" value="F" style="cursor: pointer;"><label>Female</label>
                  </div>
                </div>
            </div>
            <div class="input1">
              <input type="text" class="form-control1" placeholder="Phone Number" aria-label="Last name" name="ph" id="ph" pattern="[0-9]{10}" required>
            </div>
            <div class="input1">
              <input type="text" class="form-control1" placeholder="Email" aria-label="Last name" name="mail" id="mail" required>
            </div>
            <div class="input1">
              <i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i>
              <input type="password" class="form-control1" placeholder="Password" aria-label="Last name" name="pass" id="pass" required>
              
              <br><br><br>
            </div>
            <div class="input1">
              <input type="submit" class="btn btn-outline-dark" name="btn" id="btn" value="sign Up" style="letter-spacing: 5px;">
            </div>
            <div class="link-">
              <a href="login.php">login</a>
              <a href="index.php">back to home</a>  
            </div>  
        </form>
      </div>
    </div> 
    <div class="card text-white bg-dark mb-3">
      <div class="card-header">Menu</div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"><a href="invalid.php">Careers</a></p>
        <p class="card-text"><a href="invalid.php" aria-disabled="true">We Are Hiring!!!</a></p>
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="footer-div">
      <div class="footer-div-img"><img src="icons8/icons8-mastercard-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-debit-card-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-discover-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-google-wallet-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-paytm-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-unionpay-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-visa-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-wallet-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-american-express-squared-48"></div>
      <div class="footer-div-img"><img src="icons8/icons8-stripe-48"></div>
    </div>
    <hr>
    <div class="footer-div">
      <div class="footer-div-span-head">
        <h2> Metro By Vehicles </h2>
        <dt> Beauty, Charm, and Adventure. </dt>
        <dt> Here for the Future. </dt>
      </div>
      <div class="footer-div-span">
        <h4> Explore </h4>
        <dt><a href="index.php"> Home </a></dt>
        <dt><a href="about.php"> About </a></dt>
        <dt><a href="future.php"> Future </a></dt>
        <dt><a href="careers.php"> Careers </a></dt>
      </div>
      <div class="footer-div-span"> 
        <h4> Visit </h4> 
        <dl> Jawaharlal Nehru Stadium Metro Station, </dl>
        <dl>  4th Floor, Kaloor, Kochi, </dl>
        <dl> Kerala - 682017 </dl>
      </div>
      <div class="footer-div-span">
        <h4> Contact </h4> 
          <dl> Metrovehicles@gmail.com </dl>
          <dt> 0484-2846700 </dt>
          <dd> 9.30am -5.00pm </dd>
          <dt> 1800 425 0355 </dt>
          <dd> Toll Free </dd>
      </div>
      <div class="footer-div-span">
        <h4> What's NEXT </h4>
        <dt> Kochi Water Metro </dt>
        <dt> Coming Soon </dt>
      </div>
    </div>
    <div class="footer-div">
        <h4> Follow Us </h4>
      <div class="footer-div-icons">
        <div class="footer-div icons-div d1">
          <a href="https://www.facebook.com">
            <dt><img src="icons8/icons8-facebook-48"></dt>
            <dt><span> Facebook </span></dt>
          </a>
        </div>
        <div class="footer-div icons-div d1">
          <a href="https://www.instagram.com">
            <dt><img src="icons8/icons8-instagram-48"></dt>
            <dt><span> Instagram </span></dt>
          </a>
        </div>
        <div class="footer-div icons-div d2">
          <a href="https://www.linkedin.com">
            <dt><img src="icons8/icons8-linkedin-48"></dt>
            <dt><span> Linkedin </span></dt>
          </a>
        </div>
        <div class="footer-div icons-div d3">
          <a href="https://www.twitter.com">
            <dt><img src="icons8/icons8-twitter-48"></dt>
            <dt><span> Twitter </span></dt>
          </a>
        </div>
        <div class="footer-div icons-div d3">
          <a href="https://www.youtube.com">
            <dt><img src="icons8/icons8-youtube-48"></dt>
            <dt><span> Youtube </span></dt>
          </a>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="footer-div">
      <div class="footer-div-copy">
        <h6>&copy; 2021 Metro Vehicles ltd. All rights reserved</h6>
      </div>
    </div>
</footer>
</body>
</html>
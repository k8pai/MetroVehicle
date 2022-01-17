<?php 
  date_default_timezone_set('Asia/Kolkata');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <link rel="stylesheet" type="text/css" href="/customer/css/commonStyles.css?v=<?php echo time(); ?>">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Home Page</title>
    <script src="js/registration.js"></script>
    <script>
      function goBack() {
        window.history.back();
      }
      function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
        // document.getElementById("section").style.transform = "translate(50px)";
        // document.getElementById("section2").style.transform = "translate(50px)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        // document.getElementById("section").style.transform = "translate(-10px)";
        // document.getElementById("section2").style.transform = "translate(-10px)";
        
      }
    </script>
  </head>
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="dropMenu" class="dropMenu bg-dark text-white">
    <div class="dropHeader-div">
      <a href="viewticketRates.php">View Ticket Rates</a>
      <a href="invalid.php">Contact Us</a>
      <a href="invalid.php">Help</a>
      <a href="invalid.php">About Us</a>
    </div>
    <hr>
  </div>
  <nav class="navbar sticky-top text-white bg-dark">
    <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">
    <img src="baseline_menu_white_24dp.png">
    </label>
    <span class="nav-divider"></span>
    <a href="index.php" class="header"><h3>Metro By Vehicles</h3></a>
    <span style="flex:1;"></span>
    <div class="header-right">
      <a class="none-btn" href="login.php"> Login </a>
      <!-- <a class="link-" href="registration.php"> Sign Up</a> -->
      <!-- <?php echo date('H:i:sa'); ?> -->
      <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_white_24dp.png"></a>
    </div>
  </nav>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="focreadonly()"></button>
                        </div>
                        <div class="modal-body">
                          <form action="logaction.php" method="post"><br>
                            <h1 style="display: flex; justify-content: center; font-family: 'Dancing Script', cursive; letter-spacing: 3px;"> Login </h1>
                            <br><br>
                              <div class="input1">
                                <input type="text" class="form-control shadow-lg" placeholder="Registered Email" aria-label="First name" id="uname" name="uname" required autofocus>
                              </div>
                              <div class="input1">
                                <input type="password" class="form-control shadow-lg" placeholder="Password" aria-label="Last name" id="upass" name="upass" required>
                                <!-- <i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i> -->
                              </div>
                              <br>
                              <div class="input1">
                                <input type="submit" class="form-control btn shadow-lg" name="btn" id="btn" value="Login" style="letter-spacing: 5px;">
                              </div> 
                            <div class="link text-dark" style="text-align: center;">
                              <label>Not yet registered?</label>
                              <a href="registration.php">Sign Up!</a>  
                              </div>
                            </form>
                        </div>-
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <a href="#footer">go down to footer</a>
                <div class="container">
                  <!-- <a href="registration.php"><button type="button" class="btn btn-outline-dark btn2">Sign Up</button></a> -->
                  <!-- <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Login </button> -->
                  <!-- <a href="login.php"><button type="button" class="btn btn-outline-dark btn1">Login</button></a> -->
                </div>
                <div class="section" id="section" style="display: flex; justify-content: space-evenly; margin-top: 150px;">
                  <div class="card" style="width: 28rem;">
                    <img src="img/cycle1.jpg" class="card-img-top shadow-lg" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card" style="width: 28rem;">
                    <img src="img/metro5.jpg" class="card-img-top shadow-lg" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="section" id="section2" style="display: flex; justify-content: space-evenly; margin-top: 150px;">
                  <div class="card" style="width: 28rem;">
                    <img src="img/e-auto.jpeg" class="card-img-top shadow-lg" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card" style="width: 28rem;">
                    <img src="img/e-bus.jpg" class="card-img-top shadow-lg" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
          <div id="footer" class="footer-div">
            <div class="footer-div-copy">
              <h6>&copy; 2021 Metro Vehicles ltd. All rights reserved</h6>
            </div>
          </div>
      </footer>        
</body>
</html>
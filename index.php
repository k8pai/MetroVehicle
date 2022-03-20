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

   <link rel="stylesheet" type="text/css" href="css/commonStyles.css?v=<?php echo time(); ?>">
    
   <script src="js/commonJs.js"></script>

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>Metro Vehicles</title>

  </head>
    <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="dropMenu" class="dropMenu bg-dark text-white">
    <div class="dropHeader-div">
      <a href="viewticketRates.php">View Ticket Rates</a>
      <a href="#next">What's Next</a>
      <a href="#contact">Contact Us</a>
      <a href="#visit">Visit</a>
    </div>
    <hr>
  </div>
  <nav id="navbar" class="navbar sticky-top text-white bg-dark">
    <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">
    <a href="#gototop"><img src="1x/baseline_menu_white_24dp.png"></a>
    </label>
    <span class="nav-divider"></span>
    <a href="index.php" class="header"><h3>Metro By Vehicles</h3></a>
    <span style="flex:1;"></span>
    <div class="header-right">
      <a class="none-btn" href="login.php"> Login <img src="icons8/icons8-login-30.png"></a>
      <!-- <a class="link-" href="registration.php"> Sign Up</a> -->
      <!-- <?php echo date('H:i:sa'); ?> -->
      <!-- <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_white_24dp.png"></a> -->
    </div>
  </nav>
    
  <div class="content" id="content">
    <div class="content-containers">
      <div class="aln-vert">
      <div class="content-containers-div">
        <div class="img-box">
          <div class="img-box-container">
            <img src="img/cycle1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="text-box">
          <div class="text-box-container">
            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="content-containers-div">
        <div class="img-box">
          <div class="img-box-container">
            <img src="img/metro5.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="text-box">
          <div class="text-box-container">
            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      </div>
      <div class="aln-vert">
      <div class="content-containers-div">
        <div class="img-box">
          <div class="img-box-container">
            <img src="img/e-auto.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="text-box">
          <div class="text-box-container">
            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="content-containers-div">
        <div class="img-box">
          <div class="img-box-container">
            <img src="img/e-bus.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="text-box">
          <div class="text-box-container">
            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
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
        <div class="footer-div-span-head-sub" style="display: flex;">
          <div style="margin-right: 20px;">
            <h2 style="color: #6cbcc4;"> Metro </h2>
            <h2 style="color: #abdbe3;"> Vehicles </h2>
          </div>
          <img src="img/icons8-subway-100">
        </div>
        <dt> Beauty, Charm, and Adventure. </dt>
        <dt> Here for the Future. </dt>
      </div>
      <div class="footer-div-span">
        <h4> Explore </h4>
        <dt><a href="index.php"> Home </a></dt>
        <dt><a href="about.php"> About </a></dt>
        <dt><a href="privacypolicy.php"> Privacy policy </a></dt>
        <dt><a href="careers.php"> Careers </a></dt>
      </div>
      <div id="visit" class="footer-div-span"> 
        <h4> Visit </h4> 
        <dl> Jawaharlal Nehru Stadium Metro Station, </dl>
        <dl>  4th Floor, Kaloor, Kochi, </dl>
        <dl> Kerala - 682017 </dl>
      </div>
      <div id="contact" class="footer-div-span">
        <h4> Contact </h4> 
          <dl> <a href="mailto:Metrovehicles@gmail.com">Metrovehicles@gmail.com</a> </dl>
          <dt> 0484-2846700 </dt>
          <dd> 9.30am -5.00pm </dd>
          <dt> 1800 425 0355 </dt>
          <dd> Toll Free </dd>
      </div>
      <div id="next" class="footer-div-span">
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
        <span class="floating-footer-pointer"><a href="#gototop"><img src="customer/icons8/icons8-chevron-up-48"></a></span>
      </div>
    </div>
  </footer>
</body>
</html>
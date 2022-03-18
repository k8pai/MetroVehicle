<?php 
  session_start();
  if(!isset($_SESSION['admin'])){
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
   
   <link rel="stylesheet" type="text/css" href="css/commonStyles.css?v=<?php echo time(); ?>">

   <script src="js/commonJs.js"></script>

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Home page</title>

  </head>
    <body id="gototop">


   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-light" style="height: 130vh;">
    <div class="closebtn-div">
      <a href=""></a>
    </div>
    <div class="sidenav-div">
      <a href="adminhome.php" >Home</a>
      <a href="transport.php">Transport</a>
      <a href="bookingPrice.php">booking price</a>
      <a href="addLocs.php">add locations</a>
      <a href="Vreg.php">User Information</a>
      <a href="addUser.php">Add User</a>
      <a href="station.php">Station</a>
      <a href="mtrate.php">Metro Ticket Rates</a>
      <a href="logout.php">logout</a>
    </div>
  </div>
  <!-- <div id="dropMenu" class="dropMenu bg-dark text-light">
    <div id="dropHeader-div" class="dropHeader-div">
      <a href=""></a>
      <a href="ticketRates.php">Ticket Rates</a>
      <a href="transportation.php">Transportation</a>
      <a href="bookingdetails.php">Booking details</a>
      <a href="printTicket.php">E-Ticket</a>
      <a href="../logout.php" style="font-size: 32px;"><img src="icons8/icons8-logout-48.png"></a>
    </div>
    <hr>
  </div> -->
  <nav id="navbar" class="navbar text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_white_24dp.png"></a>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <!-- <a href="profile.php"><img src="icons8/icons8-user-48.png"></a> -->
      <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="icons8/icons8-name-tag-48"></button>
    </div>
  </nav>
  <div class="section" style="margin-top: 80px;">
    <div class="content-containers">
      <div class="reg-card bg-transparent">
        <div class="reg-form-card">
          <br><br><br>
          <form class="form-cards" action="regaction.php" method="post">
            <h1> Create Account </h1><br><br>
              <div class="input1">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="fname" name="fname" pattern="[a-z A-z]+"
                required autofocus>
              </div>
              <div class="input1">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lname" name="lname" pattern="[a-z A-z]+" required>
              </div>
              <div class="input1">
                <div class="form-check" name="flagval">
                  <input class="form-check-input" type="hidden" value="" id="flagval-all" name="flagval" checked>
                  <input class="form-check-input" type="radio" value="M" id="gen1" name="gen">
                  <label class="form-check-label" for="gen1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="F" id="gen2" name="gen">
                  <label class="form-check-label" for="gen2">
                    Female
                  </label>
                </div>
              </div>
              <div class="input1">
                <!-- <label class="form-check-label" for="utype">User Type :</label> -->
                <select class="form-select" name="utype" id="utype" placeholder="User Type" required>
                  <option valur="" disabled selected>User Type</option>
                  <option value="cust" hidden default></option>
                  <option value="admin">Admin</option>
                  <option value="staff">Staff</option>
                  <option value="cust">Customer</option>
                </select>
              </div>
              <div class="input1">
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="Last name" name="ph" id="ph" pattern="[0-9]{10}" required>
              </div>
              <div class="input1">
                <input type="text" class="form-control" placeholder="Email" aria-label="Last name" name="mail" id="mail" required>
              </div>
              <div class="input1">
                <!-- <i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i> -->
                <input type="password" class="form-control" placeholder="Password" aria-label="Last name" name="pass" id="pass" required> 
              </div>
                <br><br><br>
              <div class="input1">
                <input type="submit" class="btn btn-outline-dark" name="btn" id="btn" value="Create Account">
              </div>
          </form>
          <br><br>
          <br><br>
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
        <dt><a href="privacypolicy.php"> Privacy policy </a></dt>
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
          <dl> <a href="mailto:Metrovehicles@gmail.com">Metrovehicles@gmail.com</a> </dl>
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
        <span class="floating-footer-pointer"><a href="#gototop"><img src="customer/icons8/icons8-chevron-up-48"></a></span>
      </div>
    </div>
  </footer>
</body>
</html>
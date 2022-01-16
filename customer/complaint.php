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
   
   <link rel="stylesheet" type="text/css" href="css/commonStyles.css?v=<?php echo time(); ?>">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Transport Updation</title>
    
    <script src="js/commonJs.js"></script>
  </head>
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="abc-1" style="height: 100%; width: 100%;">
    <div class="abc-2"style="min-height: 100%; width: 100%; border: 1px solid black;">
        <div class="abc-3">
          <div id="mySidenav" class="sidenav bg-dark">
            <div class="closebtn-div">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <a href="/customer/customerHome.php" >Home</a>
            <a href="/customer/ticketRates.php">Ticket Rates</a>
            <!-- <a href="stationsAndTiming.php">Stations & Timings</a> -->
            <a href="/customer/transportation.php">Transportation</a>
            <a href="/customer/ticketBooking.php">Booking</a>
            <a href="/customer/bookingdetails.php">Booking details</a>
            <a href="/customer/printTicket.php">E-Ticket</a>
            <a href="/customer/razorpay-php/pay.php">Payment</a>
            <a href="/customer/cancel.php">Cancel ticket</a>
            <a href="/customer/complaint.php">Complaint</a>
            <a href="/../logout.php">logout</a>
          </div>
          <div id="dropMenu" class="dropMenu bg-dark text-light">
                  <div class="dropHeader-div">
                  <a href=""></a>
                  <a href="/customer/ticketRates.php">Ticket Rates</a>
                  <a href="/customer/transportation.php">Transportation</a>
                  <a href="/customer/bookingdetails.php">Booking details</a>
                  <a href="/customer/printTicket.php">E-Ticket</a>
                  </div>
                  <hr>
                </div>
                  <nav id="navbar" class="navbar sticky-top text-white bg-dark">
                    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_white_24dp.png"></a>
                    <span style="height: 100%; width: 1px; border: 1px solid white; margin: 0px 20px;"></span>
                    <span class="header" style="flex:1;"><h3>Metro By Vehicles</h3></span>
                    <div class="header-right" style=" right: 20px;">
                      <input type="checkbox" name="" id="drop-Menu" hidden>
                      <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">Stations and more 
                      <img id="img-div" src="icons8/icons8-sort-down-24.png">
                      </label>
                      <a href="customerHome.php"><img src="icons8/icons8-homepage-64.png" style="font-size: 48px;"></a>
                    </div>
                  </nav>
        </div> 
        <div class="section">
          <div class="content-containers card-div">
            <div class="card text-dark bg-transparent mb-3 shadow-lg" style="width: 600px; margin-bottom: 130px;">
              <div class="card-header" style="text-align: center;"> Register Complaint </div>
              <div class="card-body" style="padding: 35px;">
                <form action="ccaction.php" method="post">
                <div class="input1">
                  <input type="text" class="form-control shadow-lg" id="exampleFormControlInput1" name="cancode" placeholder="Booking Id" autofocus required>
                </div>
                <div class="input1">
                  <input type="text" class="form-control shadow-lg" id="exampleFormControlInput1" name="uname" placeholder="Username" value="<?php echo $_SESSION['cust'];?>" readonly>
                </div>
                <div class="input1">
                  <input type="password" class="form-control shadow-lg" id="exampleFormControlInput1" name="password" placeholder="Password" autofocus required>
                </div>
                <div class="input1">
                  <select class="form-select shadow-lg" aria-label="Default select example" name="reason" required>
                  <option value="" selected>Reason for cancellation</option>
                  <option value="Inefficient service">Inefficient service.</option>
                  <option value="Want a ride more than 5kms">Want a ride more than 5kms.</option>
                  <option value="Driver asking for more fare">Driver asking for more fare.</option>
                  <option value="Change of plans">Change of plans</option>
                  <option value="other">other</option>
                </select>
                </div>
                <div class="input1">
                  <textarea class="form-control shadow-lg" id="exampleFormControlTextarea1" rows="6" placeholder="Register your complaint here..." name="complaint" required></textarea>
                </div>
                <div class="input1">
                  <input type="submit" class="form-control btn shadow-lg"  value="Register complaint!" style="letter-spacing: 5px; transition: 0.4s;margin: 20px; width: fit-content; border-radius: 7px; border: 1px solid;">
                </div>
              </form>
              </div>
            </div>  
          </div>
         </div>
        <div id="head-pointer" class="head-pointer">
                <a href="#navbar"><img src="icons8/icons8-chevron-up-48"></a>
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
      </div>
    </div>
  </body>
</html>
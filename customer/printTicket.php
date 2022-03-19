<?php
  session_start();
  include('dbcon.php');
  $db=new dbcon();
  date_default_timezone_set('Asia/Kolkata');

  // $startTime=$_SESSION['start'];
  // $expireTime=$_SESSION['expire'];

  $expire="";
  if(isset($_SESSION['expire']))
  {
    $expire=$_SESSION['expire'];
  }

  // echo $expire;
  // echo $_SESSION['start'];
  // echo $_SESSION['expire'];
  // echo $_SESSION['pickLoc'];
  // echo $_SESSION['transMode'];
  // echo $_SESSION['bookingId'];
  // echo $_SESSION['transMode'];
  // echo $_SESSION['transMode'];

  if(!isset($_SESSION['cust'])){
    header('location: login.php');
  }

  if(date('H:i:sa') > $expire){
    unset($_SESSION['start']);
    unset($_SESSION['expire']);
    unset($_SESSION['pickLoc']);
    unset($_SESSION['transMode']);
  }

  if(!isset($_SESSION['pickLoc'])){
    echo "<script>alert('you have not booked your ticket!');window.location='ticketBooking.php';</script>";
  }

  if(!isset($_SESSION['payment'])){
    echo "<script>alert('Your payment is pending.');</script>;";
  }

  $selquery="select * from bookinghistory where bookingId='".$_SESSION['bookingId']."'";
  $query=$db->selectData($selquery);
  if($row=mysqli_fetch_array($query))
  {
    if($row['bookingStatus']=='Cancelled'){
      echo "<script>alert('Ticket has been cancelled. book again?');window.location='ticketBooking.php';</script>";
    }
    $_SESSION['bookingStatus']=$row['bookingStatus'];
    $_SESSION['paymentStatus']=$row['paymentStatus'];
  }



  if(!isset($_SESSION['expire'])){
    echo "<script>alert('You have not reached yet?. book again!');window.location='ticketBooking.php';</script>";
  }
  // if(!isset($_SESSION['expire']) && isset($_SESSION['ticket'])){
  //   echo "<script>alert('You have not reached yet?. book again!');window.location='ticketBooking.php';</script>";
  // }

  if(!isset($_SESSION['expire']) and ($_SESSION['bookingStatus'] !== 'transport assigned' OR $_SESSION['bookingStatus'] !== 'Cancelled')){
    $updquery="update bookinghistory set bookingStatus='Cancelled' where bookingId='".$_SESSION['bookingId']."'";
    $db->insertQuery($updquery);
  }

  // if($_SESSION['ticket']=='true'){
  //   echo "<script>alert('Enjoy your ride!!!');window.location='customerHome.php';</script>";
  //   $_SESSION['ticket']="false";
  // }
  // else
  // {
  //   if(!isset($_SESSION['expire'])){
  //   echo "<script>alert('Check your booking details in the booking details portal.');window.location='bookingdetails.php'</script>";
  //   }
  // }

  // $ticketStatus="waiting";
  // echo $_SESSION['ticket'];
  // if($_SESSION['ticket']=='true')
  // {
  //   $ticketStatus="confirmed";
  // }
?>
<!DOCTYPE html>
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
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>Online Ticket</title>
    
    <script src="js/commonJs.js"></script>
  </head>
  <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-light" style="height: 130vh;">
    <div class="closebtn-div">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <a href="/customer/customerHome.php" >Home</a>
    <a href="/customer/ticketRates.php">Ticket Rates</a>
    <a href="/customer/ticketBooking.php">Booking</a>
    <a href="/customer/bookingdetails.php">Booking details</a>
    <a href="/customer/printTicket.php">E-Ticket</a>
    <a href="/customer/cancel.php">Cancel ticket</a>
    <a href="/customer/complaint.php">Complaint</a>
  </div>
  <div id="dropMenu" class="dropMenu bg-dark text-light">
    <div class="dropHeader-div">
      <a href=""></a>
      <a href="/customer/ticketRates.php">Ticket Rates</a>
      <a href="/customer/transportation.php">Transportation</a>
      <a href="privacypolicy.php"> Privacy Policy </a>
      <a href="/customer/printTicket.php">E-Ticket</a>
    </div>
    <hr>
  </div>
  <nav id="navbar" class="navbar text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_white_24dp.png"></a>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <input type="checkbox" name="" id="drop-Menu" hidden>
      <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">Stations and more 
      <img id="img-div" src="icons8/icons8-sort-down-24.png">
      </label>
      <a href="customerHome.php"><img src="icons8/icons8-homepage-64.png" style="font-size: 48px;"></a>
      <div class="dec-none">
        <a href="../logout.php">Log out<img src="icons8/icons8-logout-48.png" style="font-size: 32px;"></a>
      </div>
    </div>
  </nav>
  <div class="content">
    <div class="container">
      <div class="content-container-card shadow-lg" style="height: fit-content; width: 450px; margin: auto; border-radius: 35px; overflow: hidden;">
          <h3 style=" margin: 0; text-align: center; width: 100%; padding: 20px; background: #cbf0e9;">MBV Ticket</h3><hr>
          <div class="from-to-info" style="display: flex; justify-content: space-around; padding: 25px;">
              <table>
                  <tr>
                      <th style="width: 100px; text-align: center;">
                          <div style="display: flex; flex-direction: column;">
                              <!-- <h2><?php echo $_SESSION['srcCode']; ?></h2> -->
                              <?php echo $_SESSION['pickLoc']; ?>                             
                          </div>
                      </th>
                      <th style="width: 100px; text-align: center;">
                          <img src="icons8/icons8-navigate-48.png" width="50px" height="50px" style="margin: 0px 3px;">
                      </th>
                      <th style="width: 100px; text-align: center;">
                          <div style="display: flex; flex-direction: column;">
                              <!-- <h2><?php echo $_SESSION['destCode']; ?></h2> -->
                              <?php echo $_SESSION['avlStation']; ?>                                    
                          </div>
                      </th>
                  </tr>
              </table>
          </div>
          <br>
          <div style="display: flex; justify-content: space-around;">
              <div>
                  <h4>Name of Customer : <?php echo " ".$_SESSION['fname']." ".$_SESSION['lname']; ?></h4>
                  <h4>Number of passengers : <?php echo " ".$_SESSION['custcount']; ?></h4>
              </div>
          </div>
          <br>
          <div class="ticket-info" style="display: flex; justify-content: space-evenly; text-align: center;">
              <div class="content-info">
                  <h5>Ticket Info</h5>
                  <p>Booked at  : <?php echo $_SESSION['start']; ?></p>
                  <p>Valid till : <?php echo $_SESSION['expire']; ?></p>
              </div>
              <div class="content-info">
                  <h5>Transport</h5>
                  <p>Mode : <?php echo $_SESSION['transMode']; ?></p>
                  <p>rate : <?php echo $_SESSION['rate']; ?></p>
              </div>
          </div>
          <br>
          <div class="ticket-info" style="display: flex; justify-content: space-evenly; text-align: center;">
              <div class="content-info">
                  <h5>Booking Id</h5>
                  <p>Id : <?php echo $_SESSION['bookingId']; ?></p>
              </div>
              <div class="content-info">
                  <h5>OTP Info</h5>
                  <p>OTP : <?php echo $_SESSION['randCode']; ?></p>
              </div>
          </div>
          <br>
          <div class="ticket-info" style="display: flex; justify-content: space-evenly; text-align: center;">
              <div class="content-info">
                  <h5>Booking Details</h5>
                  <p>Booking Status : <?php echo $_SESSION['bookingStatus']; ?></p>
                  <p>Payment Status : <?php echo $_SESSION['paymentStatus']; ?></p>
              </div>
          </div>
          <br>
      </div>
    </div>
  </div>
  <footer class="footer">
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
   <!-- <img src="img/icons8-subway-100">      -->
        <dt> Beauty, Charm, and Adventure. </dt>
        <dt> Here for the Future. </dt>
      </div>
      <div class="footer-div-span">
        <h4> Explore </h4>
        <dt><a href="index.php"> Home </a></dt>
        <dt><a href="about.php"> About </a></dt>
        <dt><a href="future.php"> Future </a></dt>
        <dt><a href="privacypolicy.php"> Privacy Policy </a></dt>
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
          <dl><a href="mailto:Metrovehicles@gmail.com">Metrovehicles@gmail.com</a>  </dl>
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
        <span class="floating-footer-pointer"><a href="#gototop"><img src="icons8/icons8-chevron-up-48"></a></span>
      </div>
    </div>
  </footer>
</body>
</html>

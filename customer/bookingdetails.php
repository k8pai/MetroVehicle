<?php 
  session_start();
  include('dbcon.php');
  $db=new dbcon;
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
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>Booking Details | MBV</title>
    
    <script src="js/commonJs.js"></script>
  </head>
    <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark" style="height: 130vh;">
    <div class="closebtn-div">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <a href="customerHome.php" >Home</a>
    <a href="ticketRates.php">Ticket Rates</a>
    <a href="ticketBooking.php">Booking</a>
    <a class="active-page" href="bookingdetails.php">Booking details</a>
    <a href="printTicket.php">E-Ticket</a>
    <a href="cancel.php">Cancel ticket</a>
    <a href="complaint.php">Complaint</a>
  </div>
  <div id="dropMenu" class="dropMenu bg-dark text-light">
    <div class="dropHeader-div">
      <a href=""></a>
      <a href="ticketRates.php">Ticket Rates</a>
      <a href="transportation.php">Transportation</a>
      <a href="privacypolicy.php"> Privacy Policy </a>
      <a href="printTicket.php">E-Ticket</a>
    </div>
    <hr>
  </div>
  <nav id="navbar" class="navbar text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="1x/baseline_menu_white_24dp.png"></a>
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
  <div id="section" class="section-div">
    <div class="section-container-div">
      <div class="card text-dark bg-transparent shadow-lg" style="width: fit-content; min-height: 80vh; height: fit-content; overflow: auto; float: left; margin-left: 275px; margin-top: 210px;">
        <div class="card-header"> Available mode of transports.</div>
        <div class="card-body">
          <table class="table table-borderless" style="width: fit-content;">
            <thead>
              <tr class="shadow-lg" style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                <th scope="col"> Booking Id </th>
                <th scope="col"> Date </th>
                <th scope="col"> Boarding </th>
                <th scope="col"> Destination </th>
                <th scope="col"> Transport </th>
                <!-- <th scope="col"> Ticket Fare </th> -->
                <th scope="col"> Booking Status </th>
                <th scope="col"> Payment Status </th>
                <!-- <th scope="col"> Passenger Count </th> -->
              </tr>
            </thead>
            <tbody>
              <?php

                if(!isset($_POST['sortControl'])){
                  $flag="all";
                }
                else{
                  $flag=$_POST['sortControl'];
                }

                if($flag=="bookId"){
                  $s="SELECT * FROM `bookinghistory` WHERE userName='".$_SESSION['cust']."' ORDER BY bookingId;";
                }
                else if($flag=="date"){
                  $s="SELECT * FROM `bookinghistory` WHERE userName='".$_SESSION['cust']."' ORDER BY date;";
                }
                else if($flag=="bStation"){
                  $s="SELECT * FROM `bookinghistory` WHERE userName='".$_SESSION['cust']."' ORDER BY fromStation;";
                }
                else if($flag=="destination"){
                  $s="SELECT * FROM `bookinghistory` WHERE userName='".$_SESSION['cust']."' ORDER BY toStation;";
                }
                else{
                  $s="SELECT * FROM `bookinghistory` WHERE userName='".$_SESSION['cust']."';";
                }
                

                // $s="select * from bookinghistory where userName='".$_SESSION['cust']."'";
                $rs=$db->selectData($s);
                while($row=mysqli_fetch_array($rs))
                {
                ?>
                  <tr class="data shadow-lg">
                  <td><?php echo $row['bookingId']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['fromStation']; ?></td>
                  <td><?php echo $row['toStation']; ?></td>
                  <td><?php echo $row['transportMode']; ?></td>
                  <!-- <td><?php echo $row['ticketFare']; ?></td> -->
                  <td><?php echo $row['bookingStatus']; ?></td>
                  <td><?php echo $row['paymentStatus']; ?></td>
                  <!-- <td><?php echo $row['passengerCount']; ?></td> -->
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="add-card text-white bg-dark shadow-lg" style="float: right;">
        <div class="card-body">
          <h5 class="card-title">Sort Section</h5>
          <hr>
            <form action="" method="post">
              <div class="input1">
                <select class="form-select shadow-lg" id="sortControl" name="sortControl" style="margin: 20px;">
                  <option value="" selected disabled>select an option</option>
                  <option value="bookId">Booking Id</option>
                  <option value="date">Date</option>
                  <option value="bStation">Boarding Station</option>
                  <option value="destination">Destination</option>
                </select>
              </div>
              <div class="input1">
                <input type="submit" class="form-control btn shadow-lg"  value=" submit " style="border: 1px solid white; color: white;">
              </div>
            </form>
          <hr>
          <h5 class="card-title">Filter Section</h5>
          <hr>
            <form action="" method="post">
              <div class="input1">
                <select class="form-select shadow-lg" id="sortControl" name="sortControl" style="margin: 20px;">
                  <option value="" selected disabled>select an option</option>
                  <option value="bookId">Booking Id</option>
                  <option value="date">Date</option>
                  <option value="bStation">Boarding Station</option>
                  <option value="destination">Destination</option>
                </select>
              </div>
              <div class="input1">
                <input type="submit" class="form-control btn shadow-lg"  value=" submit " style="border: 1px solid white; color: white;">
              </div>
            </form>
        </div>
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
    <div class="footer-div">
      <div class="footer-div-copy">
        <h6>&copy; 2021 Metro Vehicles ltd. All rights reserved</h6>
        <span class="floating-footer-pointer"><a href="#gototop"><img src="icons8/icons8-chevron-up-48"></a></span>
      </div>
    </div>
  </footer>
</body>
</html>
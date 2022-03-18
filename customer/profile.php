<?php 
  session_start();
  include('dbcon.php');
  $db=new dbcon;
  if(!isset($_SESSION['cust'])){
    header('location: login.php');
  }
  date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
	<link rel="stylesheet" type="text/css" href="css/commonStyles.css?v=<?php echo time(); ?>">

  <script src="js/commonJs.js"></script>
	<title></title>
  <script type="text/javascript">
function focedit()
{
  document.getElementById("fname").removeAttribute("readonly");
  document.getElementById("lname").removeAttribute("readonly");
  document.getElementById("phone").removeAttribute("readonly");
  document.getElementById("mail").removeAttribute("readonly");
  document.getElementById("save-btn").removeAttribute("disabled");
}

function focreadonly(){
  document.getElementById("fname").addAttribute("readonly");
  document.getElementById("lname").addAttribute("readonly");
  document.getElementById("phone").addAttribute("readonly");
  document.getElementById("mail").addAttribute("readonly");
  document.getElementById("save-btn").addAttribute("disabled");
}
  </script>
</head>
<body id="gototop">
  <div id="mySidenav" class="sidenav bg-dark text-light" style="height: 130vh;">
    <div class="closebtn-div">
      <a href=""></a>
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
      <a href="ticketRates.php">Ticket Rates</a>
      <a href="transportation.php">Transportation</a>
      <a href="bookingdetails.php">Booking details</a>
      <a href="printTicket.php">E-Ticket</a>
      <a href="../logout.php" style="font-size: 32px;"><img src="icons8/icons8-logout-48.png"></a>
    </div>
    <hr>
  </div>
  <nav id="navbar" class="navbar sticky-top text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_white_24dp.png"></a>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <input type="checkbox" name="" id="drop-Menu" hidden>
      <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">Stations and more 
      <img id="img-div" src="icons8/icons8-sort-down-24.png">
      </label>
      <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="icons8/icons8-user-48.png"></button>
      <a href="profile.php"><img src="icons8/icons8-user-48.png"></a>
    </div>
  </nav>

	<?php 
    $selquery="select * from reg where mail='".$_SESSION['cust']."'";
    $result=$db->selectData($selquery);
    if($row=mysqli_fetch_array($result)){
      $rno=$row['regId'];
      $fname=$row['fname'];
      $lname=$row['lname'];
      $phone=$row['ph'];
      $mail=$row['mail'];
    }
  ?>
  <div class="section">
  	<div class="content-containers mt-210">
		  <div class="card text-dark bg-transparent mb-3 shadow-lg" style="width: 550px;">
        <div class="card-header shadow-lg">
        	<div class="ft-right">
        		<label onclick="focreadonly()">Edit</label>
        	</div>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" class="form-control" id="rno" name="rno" value="<?php echo $rno; ?>" readonly>
            <div class="mb-5" style="margin-top: 20px;">
              <label for="fname" class="col-form-label">First name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="lname" class="col-form-label">Last name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="phone" class="col-form-label">Phone number :</label>
              <div class="input1">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="mail" class="col-form-label">mail</label>
              <div class="input1">
                <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>" readonly>
              </div>
            </div>
            <div class="input1">
              <input type="button" class="form-control btn shadow-lg" onclick="focedit()" value=" Edit ">
              <input type="submit" class="form-control btn shadow-lg" value=" Save " id="save-btn" disabled>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
                  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="input1">
            <h5 class="modal-title" id="exampleModalLabel"> Profile Details </h5>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="focreadonly()"></button>
        </div>
        <div class="modal-body">
          <form name="modal-form" action="profile.php" method="post">
            <input type="hidden" class="form-control" id="rno" name="rno" value="<?php echo $rno; ?>" readonly>
            <div class="mb-5" style="margin-top: 20px;">
              <label for="fname" class="col-form-label">First name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="lname" class="col-form-label">Last name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="phone" class="col-form-label">Phone number :</label>
              <div class="input1">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="mail" class="col-form-label">mail</label>
              <div class="input1">
                <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>" readonly>
              </div>
            </div>
            <div class="input1">
              <input type="button" class="form-control btn shadow-lg" onclick="focedit()" value=" Edit ">
              <input type="submit" class="form-control btn shadow-lg" value=" Save " id="save-btn" disabled>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
                <!-- modal class end -->
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
          <dl> <a href="mailto:Metrovehicles@gmail.com">Metrovehicles@gmail.com</a>  </dl>
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
<?php 
  session_start();
  if(!isset($_SESSION['staff'])){
    header('location: ../login.php');
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
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>User Details | MBV</title>
  </head>
  <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-white" style="height: 130vh;">
    <div class="closebtn-div">
      <a href=""></a>
    </div>
    <div class="sidenav-div">
      <a href="staffhome.php">Home</a>
      <a href="vreg.php">User Details</a>
      <a href="ticketBooking.php">Booking</a>
      <a href="driverDetails.php">Drivers</a>
      <a href="mop.php">Payments</a>
      <a href="vcomp.php">Complaint</a>
      <!-- <a href="cancellation.php">Complaint</a> -->
      <!-- <a href="../logout.php">logout</a> -->
    </div>
  </div>
  <nav id="navbar" class="navbar sticky-top text-white bg-dark">
    <input type="checkbox" name="checkMenu" id="checkMenu" hidden>
    <label for="checkMenu" class="menu-btn" id="Menu-open" onclick="openNav()"><img src="1x/baseline_menu_white_24dp.png"></label>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <div class="dec-none">
        <a href="logout.php">Log out<img src="icons8/icons8-logout-48.png" style="font-size: 32px;"></a>
      </div>
    </div>
  </nav>
  <div class="content-containers">
    <div class="aln-horz">
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg">
          <div class="card-header">Users.</div>
          <div class="card-body" style="width: fit-content;">
            <form action="" method="post">
            <div class="input1">
              <input type="text" class="form-control shadow-lg" placeholder=" Mail Address " aria-label="mail id" name="mailId">
            </div>
            <div class="input1">
              <div class="form-check" name="flagval">
                <!-- <input class="form-check-input" type="hidden" value="" id="flagval" name="flagval"> -->
                <input class="form-check-input" type="radio" value="all" id="flagval-all" name="flagval" default>
                <label class="form-check-label" for="flagval-all">
                  Users.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="admin" id="flagval-admin" name="flagval">
                <label class="form-check-label" for="flagval-admin">
                  Admins.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="staff" id="flagval-staff" name="flagval">
                <label class="form-check-label" for="flagval-staff">
                  Staffs.
                </label>
              </div>
              <div class="form-check" name="flagval">
                <input class="form-check-input" type="radio" value="cust" id="flagval-cust" name="flagval">
                <label class="form-check-label" for="flagval-cust">
                  Customers.
                </label>
              </div>
            </div>
            <div class="input1">
              <input type="submit" class="form-control btn shadow-lg"  value=" Check ">
            </div>
          </form>
          </div>
        </div>
      </div>
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg">
          <div class="card-header"> User Details </div>
          <div class="card-body" style="height: fit-content; max-height: 80vh; overflow-y: auto;">
            <table class="table table-borderless shadow-lg"  style="width: 900px;">
              <thead>
                <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                  <th scope="col"> REG ID </th>
                  <th scope="col"> FIRST NAME </th>
                  <th scope="col"> LAST NAME </th>
                  <th scope="col"> GENDER </th>
                  <th scope="col"> PHONE </th>
                  <th scope="col"> MAIL </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include('dbcon.php');
                  $db=new dbcon;

                  if(!isset($_POST['flagval'])){
                    $flag="all";
                  }
                  else{
                    $flag=$_POST['flagval'];
                  }


                  if($flag=="admin"){
                    $s="select * from reg where utype='admin'";
                  }
                  else if($flag=="staff"){
                    $s="select * from reg where utype='staff'";
                  }
                  else if ($flag=="cust") {
                    $s="select * from reg where utype='cust'";
                  }
                  else{
                    $s="select * from reg";
                  }

                  if(isset($_POST['mailId'])){
                    $sel="select * from reg where mail='".$_POST['mailId']."'";
                    $rs=$db->selectData($sel);
                    if($row=mysqli_fetch_array($rs)){
                      $s=$sel;
                    }
                  }
                  $rs=$db->selectData($s);
                  while($row=mysqli_fetch_array($rs))
                  {
                  ?>
                    <tr class="data shadow-lg">
                    <td><?php echo $row['regId']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <!-- <td><?php echo $row['utype']; ?></td> -->
                    <td><?php echo $row['gen']; ?></td>
                    <td><?php echo $row['ph']; ?></td>
                    <td><?php echo $row['mail']; ?></td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>
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

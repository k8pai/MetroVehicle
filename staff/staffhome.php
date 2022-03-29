<?php 
  session_start();
  include('dbcon.php');
  $db=new dbcon;
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

    <title>Home page | MBV</title>
  </head>
    <body>


   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-light" style="height: 180vh;">
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
      <a href="logout.php">logout</a>
    </div>
  </div>
  <nav id="navbar" class="navbar sticky-top text-white bg-dark">
    <input type="checkbox" name="checkMenu" id="checkMenu" hidden>
    <label for="checkMenu" class="menu-btn" id="Menu-open" onclick="openNav()"><img src="1x/baseline_menu_white_24dp.png"></label>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="icons8/icons8-name-tag-48"></button>
    </div>
  </nav>
  <?php 
    $selquery="select * from reg where mail='".$_SESSION['staff']."'";
    $selquery1="select * from login where uname='".$_SESSION['staff']."'";
    $result=$db->selectData($selquery);
    $result1=$db->selectData($selquery1);
    if($row1=mysqli_fetch_array($result1)){
      $logId=$row1['loginId'];
    }
    if($row=mysqli_fetch_array($result)){
      $rno=$row['regId'];
      $fname=$row['fname'];
      $lname=$row['lname'];
      $phone=$row['ph'];
      $mail=$row['mail'];
    }
      // echo $rno;
      // echo $fname;
      // echo $lname;
      // echo $phone;
      // echo $mail;
      // echo $_SESSION['staff'];
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="h" style="letter-spacing: 5px; font-family: monospace; margin-left: 45px; font-weight: bolder;">
            <h3 class="modal-title" id="exampleModalLabel"> Profile Details </h3>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="focreadonly()"></button>
        </div>
        <div class="modal-body">
          <form name="modal-form" action="actionPages/profileAction.php" method="post">
            <input type="hidden" class="form-control" id="rno" name="rno" value="<?php echo $rno; ?>" readonly>
            <input type="hidden" class="form-control" id="loginId" name="loginId" value="<?php echo $logId; ?>" readonly>
            <table align="center">
            <tr>
              <td>
              <div >
                <label for="fname" class="col-form-label">First name </label>
              </div>
              </td>
              <td>
                <div class="input1">
                  <label for="fname" class="col-form-label"> : </label>
                </div>
              </td>
              <td>
              <div class="input1">
                <input type="text" class="form-control" id="fname" name="fname" pattern="[a-z A-z]+" value="<?php echo $fname; ?>" style="width: 200%;" readonly required>
              </div>
              </td>
            </tr>
            <tr><td colspan="3"><br><br></td></tr>
            <tr>
              <td>
              <div>
                <label for="lname" class="col-form-label">Last name </label>
              </div>
              </td>
              <td>
                <div class="input1">
                  <label for="lname" class="col-form-label"> : </label>
                </div>
              </td>
              <td>
              <div class="input1" style="float: right;">
                <input type="text" class="form-control" id="lname" name="lname" pattern="[a-z A-z]+" value="<?php echo $lname; ?>" style="width: 200%;" readonly required>
              </div>
              </td>
            </tr>
            <tr><td colspan="3"><br><br></td></tr>
            <tr>
              <td>
              <div>
                <label for="phone" class="col-form-label">Phone no </label>
              </div>
              </td>
              <td>
                <div class="input1">
                  <label for="phone" class="col-form-label"> : </label>
                </div>
              </td>
              <td>
              <div class="input1" style="float: right;">
                <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" value="<?php echo $phone; ?>" style="width: 200%;" readonly required>
              </div>
              </td>
            </tr>
            <tr><td colpan="3"><br><br></td></tr>
            <tr>
              <td>
              <div>
                <label for="mail" class="col-form-label">mail </label>
              </div>
              </td>
              <td>
                <div class="input1">
                  <label for="mail" class="col-form-label"> : </label>
                </div>
              </td>
              <td>
              <div class="input1" style="float: right;">
                <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>" style="width: 200%;" readonly required>
              </div>
              </td>
            </tr>
            </table>
            <div class="input1">
              <input type="button" class="form-control btn shadow-lg" onclick="focedit()" value=" Edit ">
              <input type="submit" class="form-control btn shadow-lg" value=" Save " id="save-btn" disabled>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="section" class="section">
    <div id="info" class="content-containers">
      <div class="img-box">
        <div class="img-box-container">
          <img src="/img/sec-info-img.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <div class="text-box">
        <div class="text-box-container">
          <h1>Metro Vehicles for the people.</h1>
          <p><dt>Our objective is to make Kochi the first city in the country where the entire public transport system: the metro, the buses, the boats, the autorickshaws and the taxies work together as a seamless integrated system; with a common timetable, common ticketing and centralised 'command and control'.</dt></p>
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

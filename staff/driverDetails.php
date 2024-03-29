<?php 
  session_start();
  include('dbcon.php');
  $db=new DbCon();
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

    <title>Bookings | MBV</title>
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
      <a href="staffhome.php">Home</a>
      <a href="vreg.php">User Details</a>
      <a href="ticketBooking.php">Booking</a>
      <a href="driverDetails.php">Drivers</a>
      <a href="mop.php">Payments</a>
      <a href="vcomp.php">Complaint</a>
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
    <div class="content">
      <div class="card text-white bg-dark shadow-lg" style="width: 70%; height: fit-content; margin: auto">
        <div class="card-body">
          <!-- <hr> -->
          <form action="" method="post">
            <table width="100%;" style="text-align: center;">
              <tr>
                <td>
                  <div class="flex-class">
                    <div class="input1">
                      <select class="form-select shadow-lg" id="sortControl" name="sortControl" style="margin: 20px;">
                        <option value="" selected disabled>select an option</option>
                        <option value="driverName">Driver Name</option>
                        <option value="sName">Station Name</option>
                        <option value="availbility">Availability</option>
                      </select>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <div class="input1">
                      <select class="form-select shadow-lg" id="filterControl" name="filterControl" style="margin: 20px;">
                        <option value="" selected disabled>select an option</option>
                        <?php 

                          $selquery="SELECT * FROM station";
                          $result=$db->selectData($selquery);
                          while ($row=mysqli_fetch_array($result)) {
                            
                        ?>
                          <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>
                        <?php 
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <input type="text" class="form-control shadow-lg" placeholder=" Ride Number " aria-label="ride number" name="rideNumber">
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <div class="input1">
                      <input type="submit" class="form-control btn shadow-lg"  value=" Search " style="border: 1px solid white; color: white;">
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </form>
          <!-- <hr> -->
        </div>
      </div>
      <?php

        if(!isset($_POST['sortControl']) and !isset($_POST['filterControl']) and !isset($_POST['rideNumber'])){
          $selquery="SELECT * FROM driverdetails";
        }
        else if(isset($_POST['sortControl']) and isset($_POST['filterControl']) and isset($_POST['rideNumber'])){
          $flag=$_POST['sortControl'];
          $filterflag=$_POST['filterControl'];
          $rideNumber=$_POST['rideNumber'];
          if($rideNumber!=""){
            $selquery="SELECT * FROM driverdetails where sName='$filterflag' and rideNumber='$rideNumber' ORDER BY $flag";
          }
          else{
            $selquery="SELECT * FROM driverdetails where sName='$filterflag' ORDER BY $flag";
          }
        }
        else if(isset($_POST['sortControl']) and isset($_POST['rideNumber'])){
          $flag=$_POST['sortControl'];
          $rideNumber=$_POST['rideNumber'];
          if($rideNumber!=""){
            $selquery="SELECT * FROM driverdetails where rideNumber='$rideNumber' ORDER BY $flag";
          }
          else{
            $selquery="SELECT * FROM driverdetails ORDER BY $flag";
          }
        }
        else if(isset($_POST['filterControl']) and isset($_POST['rideNumber'])){
          $filterflag=$_POST['filterControl'];
          $rideNumber=$_POST['rideNumber'];
          if($rideNumber!=""){
            $selquery="SELECT * FROM driverdetails where sName='$filterflag' and rideNumber='$rideNumber'";
          }
          else{
            $selquery="SELECT * FROM driverdetails where sName='$filterflag'";
          }
        }
        else if(isset($_POST['sortControl']) and isset($_POST['filterControl'])){
          $flag=$_POST['sortControl'];
          $filterflag=$_POST['filterControl'];
          $selquery="SELECT * FROM driverdetails where sName='$filterflag' ORDER BY $flag";
        }
        else if(isset($_POST['rideNumber'])){
          $rideNumber=$_POST['rideNumber'];
          if($rideNumber!=""){
            $selquery="SELECT * FROM driverdetails where rideNumber='$rideNumber'";
          }
          else{
          $selquery="SELECT * FROM driverdetails";
          }
        }
        else if(isset($_POST['sortControl'])){
          $flag=$_POST['sortControl'];
          $selquery="SELECT * FROM driverdetails where ORDER BY $flag";
        }
        else if(isset($_POST['filterControl'])){
          $filterflag=$_POST['filterControl'];
          $selquery="SELECT * FROM driverdetails where sName='$filterflag'";
        }
        else{
          $selquery="SELECT * FROM driverdetails";
        }

        // if(isset($_POST['rideNumber'])){
        //   $sel="SELECT * FROM driverdetails where rideNumber='".$_POST['rideNumber']."'";
        //   $result=$db->selectData($sel);
        //   if($row=mysqli_fetch_array($result)){
        //     $selquery=$sel;
        //   }
        // }

        // echo $selquery;
        // $selquery="SELECT * FROM driverdetails";
        $result=$db->selectData($selquery);

        if(mysqli_num_rows($result)){

        while ($row=mysqli_fetch_array($result)) {
          // code...

      ?>
      <div class="card text-white bg-dark shadow-lg" style="width: 70%; margin: auto;">
        <div class="card-body">
          <hr>
            <table width="100%;">
              <tr>
                <td>
                  <div class="flex-class">
                    <dt><h3><?php echo $row['driverName']; ?></h3></dt>
                  </div>
                  <hr>
                </td>
                <td>
                  <div class="flex-class" style="display: flex;">
                    <dt><h3><?php echo $row['rideName']; ?></h3></dt>
                  </div>
                  <hr>
                </td>
                <td>
                  <div class="flex-class">
                    <dt><h3><?php echo $row['sName']; ?></h3></dt>
                  </div>
                  <hr>
                </td>
                <td>
                  <div class="input1">
                    <input type="submit" class="form-control btn shadow-lg"  value=" contact " style="border: 1px solid white; color: white;">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="flex-class">
                    <label>Driver Number</label>
                  </div>
                  <div class="flex-class">
                    <dt><?php echo $row['driverNumber']; ?></dt>
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <label>Ride Number</label>
                  </div>
                  <div class="flex-class">
                    <dt><?php echo $row['rideNumber']; ?></dt>
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <label>Availability</label>
                  </div>
                  <div class="flex-class">
                    <dt><?php echo $row['availbility']; ?></dt>
                  </div>
                </td>
              </tr>
              <tr>
              </tr>
            </table>
          <hr>
        </div>
      </div>
      <br>
    <?php }
        }
        else{
          // echo "<script>alert('No Records found!');</script>";
          ?>
      <div class="card text-white bg-dark shadow-lg" style="width: 70%; height: fit-content; margin: auto">
        <div class="card-body">
          <table width="100%;" style="text-align: center;">
            <tr>
              <td>
                <h3>No Results found!</h3>
              </td>
            </tr>
          </table>
        </div>
      </div>

        <?php }
    ?>
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

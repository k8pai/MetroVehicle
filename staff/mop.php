<?php 
  session_start();
  if(!isset($_SESSION['staff'])){
    header('location: login.php');
  }
  // $_POST['flagval']='.';
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
    <title>Transport Updation</title>

  </head>
    <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-light" style="height: 150vh;">
    <div class="closebtn-div">
      <a href=""></a>
    </div>
    <div class="sidenav-div">
      <a href="staffhome.php">Home</a>
      <a href="vreg.php">User Details</a>
      <a href="ticketBooking.php">Booking</a>
      <a href="mop.php">Payment management</a>
      <a href="../logout.php">logout</a>
    </div>
  </div>
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
  <div class="content-containers">
    <div class="aln-horz">
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg">
          <div class="card-header">Payment.</div>
          <div class="card-body" style="width: 550px;">
            <form action="" method="post">
            <div class="input1">
              <input type="text" class="form-control shadow-lg" placeholder=" Booking Id " aria-label="Payment code" name="bookingid">
            </div>
            <div class="input1">
              <div class="form-check" name="flagval">
                <input class="form-check-input" type="hidden" value="" id="flagval-all" name="flagval">
                <input class="form-check-input" type="radio" value="all" id="flagval-all" name="flagval" checked>
                <label class="form-check-label" for="flagval-all">
                  all payment
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="suc" id="flagval-suc" name="flagval">
                <label class="form-check-label" for="flagval-suc">
                  successful payment
                </label>
              </div>
              <div class="form-check" name="flagval">
                <input class="form-check-input" type="radio" value="pen" id="flagval-pen" name="flagval">
                <label class="form-check-label" for="flagval-pen">
                  pending payment
                </label>
              </div>
            </div>
            <div class="input1">
              <input type="submit" class="form-control btn shadow-lg"  value=" submit ">
            </div>
          </form>
          </div>
        </div>
      </div>
      <div class="sec">
        <div class="card text-white bg-dark mb-3 right">
          <div class="card-header" style="text-align: center;"> Payment Details.</div>
          <div class="card-body">
            <table class="table table-borderless"  style="color: whitesmoke; text-align: center; width: 600px;">
              <thead>
                <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                  <th scope="col" style="font-size: Default;">*</th>
                  <th scope="col"> Booking Id </th>
                  <th scope="col"> Name </th>
                  <th scope="col"> Amount </th>
                  <th scope="col"> Payment Id </th>
                  <th scope="col"> Payment Status </th>
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



                  echo $flag;

                  if($flag=="suc"){
                    $s="select * from payment where paymentStatus='Successful'";
                  }
                  else if ($flag=="pen") {
                    $s="select * from payment where paymentStatus='pending'";
                  }
                  else{
                    $s="select * from payment";
                  }
                  if(isset($_POST['bookingid']) && $flag=="all"){
                    $s=$s." where bookingId='".$_POST['bookingid']."'";
                  }
                  else if(!isset($_POST['bookingid']) && $flag!=="all"){
                    $s=$s." and where bookingId='".$_POST['bookingid']."'";
                  }
                  echo $flag;
                  // echo $_POST['bookingid'];
                  echo $s;
                  $i=1;
                  $rs=$db->selectData($s);
                  while($row=mysqli_fetch_array($rs))
                  {
                  ?>
                    <tr class="data shadow-lg">
                    <td scope="row"><?php echo "$i";?></td>
                    <td><?php echo $row['bookingId']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['payment_id']; ?></td>
                    <td><?php echo $row['paymentStatus']; ?></td>
                    </tr>
                  <?php $i++;} ?>
              </tbody>
            </table>
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
        <span class="floating-footer-pointer"><a href="#gototop"><img src="icons8/icons8-chevron-up-48"></a></span>
      </div>
    </div>
  </footer>
</body>
</html>
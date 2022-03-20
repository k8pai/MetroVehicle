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
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>Station Updation | MBV</title>
    
  </head>
    <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark text-light">
    <div class="closebtn-div">
      <a href=""></a>
    </div>
    <div class="sidenav-div">
      <a href="adminhome.php" >Home</a>
      <a href="transport.php">Transport</a>
      <a href="bookingPrice.php">booking price</a>
      <a class="active-page" href="addLocs.php">add locations</a>
      <a href="Vreg.php">User Information</a>
      <a href="addUser.php">Add User</a>
      <a href="station.php">Station</a>
      <a href="mtrate.php">Metro Ticket Rates</a>
      <a href="../logout.php">logout</a>
    </div>
  </div>
  <nav id="navbar" class="navbar text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_white_24dp.png"></a>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <a href="adminhome.php"><img src="icons8/icons8-homepage-64.png" style="font-size: 24px;"></a>
    </div>
  </nav>
  <div class="content-containers">
    <div class="aln-horz">
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg">
          <div class="card-header"> Add Station. </div>
          <div class="card-body" style="width: 550px;">
            <form action="actionPages/addLocsaction.php" method="post">
            <div class="input1">
              <input type="text" class="form-control" placeholder=" available locations " aria-label="Station name" name="avlstation" required autofocus>
            </div>
            <div class="input1">
              <input type="submit" class="form-control btn shadow-lg"  value=" Add Station " style=" transition: 0.4s; margin: 20px; border-radius: 7px; border: 1px solid;">
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg">
          <div class="card-header"> Stations codes and Stations. </div>
          <div class="card-body" style="width: fit-content;">
            <table class="table table-borderless shadow-lg"  style="width: 500px;">
              <thead>
                <tr style="font-family: 'monospace;', cursive; font-size: 24px;">
                  <th scope="col" style="font-size: Default;">*</th>
                  <th scope="col"> New Locations </th>
                  <th scope="col"> Modify </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include('dbcon.php');
                  $db=new dbcon;

                  $s="select * from servavlloc";

                  $rs=$db->selectData($s);
                  $i=1;
                  while($row=mysqli_fetch_array($rs))
                  {
                  ?>
                    <tr class="data shadow-lg">
                    <td scope="row"><?php echo "$i";?></td>
                    <td><?php echo $row['avlStation']; ?></td>
                    <td><a href="actionPages/deleteAddLocs.php?id=<?php echo $row['servavllocId']; ?>">Delete</a></td>
                    </tr>
                  <?php $i++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </di[v>
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

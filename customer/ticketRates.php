<?php 
  session_start();
  include('dbcon.php');
  $db=new dbcon();
  if(!isset($_SESSION['cust'])){
    header('location: login.php');
  }
  $srcName="null";
  $destName="null";
  if(isset($_POST['src'])){
    $srcName=$_POST['src'];
  }
  $_SESSION['srcName']=$srcName;
  if(isset($_POST['dest'])){
    $destName=$_POST['dest'];
  }
  $_SESSION['destName']=$destName;
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

   <link href="css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- Favicon icon -->
    <link type="image/png" sizes="96x96" rel="icon" href="img/icons8-subway-96.png">

    <title>Ticket Rates | MBV</title>

    <script src="js/commonJs.js"></script>
    
  </head>
  <body id="gototop">

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="mySidenav" class="sidenav bg-dark shadow-lg" style="height: 130vh;">
    <div class="closebtn-div">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <a href="customerHome.php" >Home</a>
    <a class="active-page" href="ticketRates.php">Ticket Rates</a>
    <a href="ticketBooking.php">Booking</a>
    <a href="bookingdetails.php">Booking details</a>
    <a href="printTicket.php">E-Ticket</a>
    <a href="cancel.php">Cancel ticket</a>
    <a href="complaint.php">Complaint</a>
    <a href="../logout.php">logout</a>
  </div>
  <div id="dropMenu" class="dropMenu bg-dark text-light">
    <div class="dropHeader-div">
      <a href=""></a>
      <a class="active-page" href="ticketRates.php">Ticket Rates</a>
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
  <div class="content-containers">
    <div class="aln-horz">
      <div class="sec">
        <div class="card text-dark bg-transparent mb-3 shadow-lg" style="width: 550px;">
          <div class="card-header shadow-lg">Ticket Rates</div>
          <div class="card-body">
            <form action="" method="post">
              <div class="input1" style="margin-top: 30px;">
                <select class="form-select shadow-lg" aria-label="Default select example" name="src" autofocus>
                  <option value=" " selected disabled required>select arrival station</option>
                  <?php

                  $s="select * from station";
                  $rs=$db->selectData($s);
                  while($row=mysqli_fetch_array($rs)) 
                  {
                  ?>
                  <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>

                  <?php echo $row['sName'];
                  }
                  ?>
                </select>
              </div><br>
              <div class="input1">
                <select class="form-select shadow-lg" aria-label="Default select example" name="dest">
                  <option value=" " selected disabled required>select destination station</option>
                  <?php

                  $s="select * from station";
                  $rs=$db->selectData($s);
                  while($row=mysqli_fetch_array($rs)) 
                  {
                  ?>
                  <option value="<?php echo $row['sName']; ?>"><?php echo $row['sName']; ?></option>

                  <?php echo $row['sName'];
                  }
                  ?>
                </select>
              </div>
              <div class="input1">
                <input type="submit" class="form-control btn shadow-lg" value="view details">
              </div>
            </form>
            <!-- Modal -->
          </div>
        </div>
      </div>
      <div class="sec">
        <div class="card text-dark bg-transparent shadow-lg rounded" style="width: 550px;">
          <div class="card-header">Ticket Rates</div>
          <div class="card-body" style="height: fit-content; max-height: 80vh; overflow-y: auto;">
            <table class="table table-borderless"  style="text-align: center;">
              <thead>
                <tr class="data shadow-lg" style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                  <th scope="col"> From Station </th>
                  <th scope="col"> To Station </th>
                  <th scope="col"> Rates </th>
                </tr>
              </thead>
              <tbody id="table-body">
                  <?php
                  $s="select * from mrate";
                  $s1="select * from mrate where srcName='$srcName' order by srcCode ASC";
                  $s2="select * from mrate where srcName='$srcName' and destName='$destName'";
                  $s3="select * from mrate where destName='$destName' order by destCode ASC";
                  $s4="select * from mrate where srcName='$destName' and destName='$srcName'";

                  $result=$db->selectData($s);
                  $result1=$db->selectData($s1);
                  $result2=$db->selectData($s2);
                  $result3=$db->selectData($s3);
                  $result4=$db->selectData($s4);
                  if(mysqli_num_rows($result2) > 0){
                    while($row=mysqli_fetch_array($result2))
                    {          
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['srcName']; ?></td>
                      <td><?php echo $row['destName']; ?></td>
                      <td><?php echo $row['rate']; ?></td>
                      </tr>
                    <?php } }
                  else if(mysqli_num_rows($result4) > 0){
                    while($row=mysqli_fetch_array($result4))
                    {          
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['destName']; ?></td>
                      <td><?php echo $row['srcName']; ?></td>
                      <td><?php echo $row['rate']; ?></td>
                      </tr>
                    <?php } }
                  else if ($srcName != 'null' and $destName = 'null'){
                    while($row=mysqli_fetch_array($result1))
                    {
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['srcName']; ?></td>
                      <td><?php echo $row['destName']; ?></td>
                      <td><?php echo $row['rate']; ?></td>
                      </tr>
                    <?php } }
                  else if ($destName != 'null' and $srcName = 'null'){
                    while($row=mysqli_fetch_array($result3))
                    {
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['srcName']; ?></td>
                      <td><?php echo $row['destName']; ?></td>
                      <td><?php echo $row['rate']; ?></td>
                      </tr>
                    <?php } }
                  else if ($srcName = "null" and $destName = "null") {
                    while($row=mysqli_fetch_array($result))
                    {          
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['srcName']; ?></td>
                      <td><?php echo $row['destName']; ?></td>
                      <td><?php echo $row['rate']; ?></td>
                      </tr>
                    <?php } }
                  ?>
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

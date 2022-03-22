<?php 
  session_start();
  include('dbcon.php');
  $db=new DbCon();
  if(!isset($_SESSION['staff'])){
    header('location: login.php');
  }
  date_default_timezone_set('Asia/Kolkata');
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
      <a href="mop.php">Payments</a>
      <a href="vcomp.php">Complaint</a>
      <!-- <a href="../logout.php">logout</a> -->
    </div>
  </div>
  <nav id="navbar" class="navbar text-white bg-dark">
    <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="1x/baseline_menu_white_24dp.png"></a>
    <span class="nav-divider"></span>
    <span class="header"><h3>Metro By Vehicles</h3></span>
    <span class="flex-class"></span>
    <div class="header-right">
      <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="icons8/icons8-name-tag-48"></button>
    </div>
  </nav>
  <div class="content-containers">
    <div class="aln-horz">
      <div class="sec">
        <div class="sec-container">
          <div class="card text-dark bg-transparent mb-3" style="width: 550px;">
            <div class="card-header">Add Transport.</div>
            <div class="card-body">
              <form action="" method="post">
                <div class="input1">
                  <input type="text" class="form-control shadow-lg" placeholder=" Booking Id " aria-label="Bookin Id" name="bookingid">
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Bstation">
                    <option selected disabled>Boarding Station</option>
                    <?php
                    $selstation="select * from station";
                    $selquery=$db->selectData($selstation);
                    while($row=mysqli_fetch_array($selquery)) 
                    {
                    ?>
                    <option value="<?php echo $row['sCode']; ?>"><?php echo $row['sName']; ?></option>

                    <?php 
                    }
                    ?>
                  </select>
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Astation">
                    <option selected disabled>Arrival Station</option>
                    <?php
                    while($row=mysqli_fetch_array($selquery)) 
                    {
                    ?>
                    <option value="<?php echo $row['sCode']; ?>"><?php echo $row['sName']; ?></option>

                    <?php 
                    }
                    ?>
                  </select>
                </div>
                <div class="input1">
                  <select class="form-select" aria-label="Default select example" name="Atime">
                    <option selected disabled>Mode of Transport</option>
                    <?php
                    $seltransport="select * from transport";
                    $selquery=$db->selectData($seltransport);
                    while($row=mysqli_fetch_array($selquery)) 
                    {
                    ?>
                    <option value="<?php echo $row['transMode']; ?>"><?php echo $row['transMode']; ?></option>

                    <?php 
                    }
                    ?>
                  </select>
                </div>
                <div class="input1">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Destination" name="destination">
                </div>
                <div class="input1">
                  <input type="submit" class="form-control btn shadow-lg" value=" Search ">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="sec-container">
          <div class="card text-dark bg-transparent mb-3 shadow-lg">
            <div class="card-header"> Available mode of transports.</div>
            <div class="card-body" style="width: inherit;">
              <table class="table table-borderless shadow-lg">
                <thead style="text-align: center;">
                  <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                    <th scope="col"> Cabs </th>
                    <th scope="col"> Autos </th>
                    <th scope="col"> Bi-Cycles </th>
                  </tr>
                </thead>
                <tbody style="text-align: center;">
                  <?php

                    if(isset($_POST['bookingid'])){
                      $bookingid=$_POST['bookingid'];
                    }else{                      
                      $bookingid="";
                    }
                    $selquery="select * from station where stationStaff='".$_SESSION['staff']."'";

                    $rs=$db->selectData($selquery);
                    $i=1;
                    echo $selquery;

                    while($row=mysqli_fetch_array($rs))
                    {
                    ?>
                      <tr class="data shadow-lg">
                      <td><?php echo $row['numCab']; ?></td>
                      <td><?php echo $row['numAuto']; ?></td>
                      <td><?php echo $row['numCycle']; ?></td>
                      <!-- <td><a href="assignTransport.php?id=<?php echo $row['bandaId']; ?>">Assign</a></td> -->
                      <!-- <td><a href="reassignTransport.php?id=<?php echo $row['bandaId']; ?>">Reassign</a></td> -->
                      <!-- <td><a href="deleteBooking.php?id=<?php echo $row['bandaId']; ?>">Move to history</a></td> -->
                      </tr>
                    <?php $i++;} 
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="sec">
        <div class="sec-container">
          <div class="card text-dark bg-transparent mb-3 shadow-lg" style="width: fit-content;">
            <div class="card-header"> Bookings</div>
            <div class="card-body" style="height: fit-content;">
              <form action="" method="post">
                
              <table width="100%;" style="text-align: center;">
              <tr>
                <td>
                  <div class="flex-class">
                    <div class="input1">
                      <select class="form-select shadow-lg" id="sortControl" name="sortControl" style="margin: 20px;">
                        <option value="" selected disabled>Sort By</option>
                        <option value="date">Date</option>
                        <option value="dest">destination</option>
                        <!-- <option value="availbility">Availability</option> -->
                      </select>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="flex-class">
                    <div class="input1">
                      <select class="form-select shadow-lg" id="filterControl" name="filterControl" style="margin: 20px;">
                        <option value="" selected disabled>Filter By</option>
                        <option value="bookDate">Today</option>
                        
                      </select>
                    </div>
                  </div>
                </td>
                <!-- <td>
                  <div class="flex-class">
                    <input type="text" class="form-control shadow-lg" placeholder=" Ride Number " aria-label="ride number" name="rideNumber">
                  </div>
                </td> -->
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
            </div>
          </div>
        </div>
        <div class="card text-dark bg-transparent mb-3 shadow-lg" style="width: fit-content;">
          <div class="card-header"> Bookings</div>
          <div class="card-body" style="height: fit-content; max-height: 80vh; overflow-y: auto;">
            <table class="table table-borderless shadow-lg">
              <thead>
                <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                  <th scope="col"> BOOKING ID </th>
                  <th scope="col"> DESTINATION </th>
                  <th scope="col"> TRANSMODE </th>
                  <th scope="col"> DATE </th>

                </tr>
              </thead>
              <tbody>
                <?php

                
                  if(isset($_POST['bookingid'])){
                    // echo $_POST['bookingid'];
                    $bookingid=$_POST['bookingid'];
                  }else{
                    // echo "not defined";
                    $bookingid="";
                  }

                  $selquery="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."'";
                  echo "j = ".date('j');
                  echo "d = ".date('d');
                  echo "m = ".date('m');
                  echo "y = ".date('y');
                  echo "Y = ".date('Y');
                  echo "date = ".date('d-m-Y');
                  echo "date time = ".date('d-m-Y, H:i:s');
                  echo"";

                  
                  if(isset($_POST['sortControl'])){
                    if($_POST['sortControl']=="date"){
                      $selquery="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."' ORDER BY banda.bookDate desc";
                    }
                    else if ($_POST['sortControl']=="dest") {
                      $selquery="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."' ORDER BY banda.destination";
                    }
                  }
                  // if(isset($_POST['filterControl'])){
                  //   $j=date('j');
                  //   $m=date('m');
                  //   $y=date('y');
                  //   $selquery="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."' and (DATEPART(Y, banda.bookDate) = 2021 AND DATEPART(mm, banda.bookDate) = 03 AND DATEPART(dd, banda.bookDate) = 22)";
                  // }
                  


                   echo $selquery;

                  if($bookingid !== ""){
                    $selquery=$selquery." and where banda.bookingId='".$_POST['bookingid']."'";
                  }
                  // $s="select * from banda inner join station on banda.Astation=station.sName where station.stationStaff='".$_SESSION['staff']."'";

                  $rs=$db->selectData($selquery);
                  $i=1;
                  // echo $selquery;
                  if($rs){

                  while($row=mysqli_fetch_array($rs))
                  {
                  ?>
                    <tr class="data shadow-lg">
                    <!-- <td><?php echo $row['bandaId']; ?></td> -->
                    <td><?php echo $row['bookingId']; ?></td>
                    <!-- <td><?php echo $row['Astation']; ?></td> -->
                    <td><?php echo $row['destination']; ?></td>
                    <!-- <td><?php echo $row['ticketFare']; ?></td> -->
                    <!-- <td><?php echo $row['randCode']; ?></td> -->
                    <td><?php echo $row['transMode']; ?></td>
                    <td><?php echo $row['bookDate']; ?></td>
                    <!-- <td><?php echo $row['numCab']; ?></td> -->
                    <!-- <td><?php echo $row['numAuto']; ?></td> -->
                    <td>
                      <select class="form-select shadow-lg" id="filterControl" name="filterControl" style="margin: 20px;">
                        <option value="" selected disabled>select an option</option>
                        <?php

                          $selquery1="SELECT * FROM driverdetails where transMode='".$row['transMode']."' and sName='".$row['Astation']."' and availbility='available'";
                          $result1=$db->selectData($selquery1);
                          while ($row1=mysqli_fetch_array($result1)) {
                            
                        ?>
                          <option value="<?php echo $row1['rideNumber']; ?>"><?php echo $row1['driverName']; ?></option>
                        <?php 
                          }
                        ?>
                      </select>
                    </td>
                    <td><a href="actionPages/assignTransport.php?id=<?php echo $row['bandaId']; ?>">Assign</a></td>
                    <td><a href="actionPages/reassignTransport.php?id=<?php echo $row['bandaId']; ?>">Reassign</a></td>
                    <td><a href="actionPages/deleteBooking.php?id=<?php echo $row['bandaId']; ?>">Move to history</a></td>
                    </tr>
                  <?php $i++;} 
                  }
                  else{
                    echo "<script>alert('No records to display!');</script>";
                  }
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

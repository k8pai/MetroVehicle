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
</head>
<body>
	<div class="abc-3" style="background: transparent;">
    <div id="mySidenav" class="sidenav bg-dark text-light">
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
        <span style="height: 100%; width: 1px; border: 1px solid white; margin: 0px 20px;"></span>
        <span class="header" style="flex:1;"><h3>Metro By Vehicles</h3></span>
        <div class="header-right" style=" right: 20px;">
          <input type="checkbox" name="" id="drop-Menu" hidden>
          <label class="dropmenu-div" for="drop-Menu" onclick="dropMenu()">Stations and more 
          <img id="img-div" src="icons8/icons8-sort-down-24.png">
          </label>
          <!-- <button type="button" class="modal-btn bg-transparent" style="border: none; font-size: 32px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="icons8/icons8-name-tag-48"></button> -->
          <a href="profile.php"><img src="icons8/icons8-user-48.png"></a>
        </div>
      </nav>
    </div>

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
					  <div class="card text-dark bg-transparent mb-3 shadow-lg">
              <div class="card-header shadow-lg">
              	<div class="ft-right">
              		<label onclick="focedit()">edit</label>
              		<label onclick="focedit()">&times;</label>
              	</div>
              </div>
                <div class="card-body">
                  <form action="" method="post">
                  <input type="hidden" class="form-control" id="rno" name="rno" value="<?php echo $rno; ?>" readonly>
            <div class="mb-5" style="margin-top: 20px;">
              <label for="fname" class="col-form-label" style="padding: 0px 0px 10px 45px;">First name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="lname" class="col-form-label" style="padding: 0px 0px 10px 45px;">Last name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="phone" class="col-form-label" style="padding: 0px 0px 10px 45px;">Phone number :</label>
              <div class="input1">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="mail" class="col-form-label" style="padding: 0px 0px 10px 45px;">mail</label>
              <div class="input1">
                <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>" readonly>
              </div>
            </div>
            <div class="input1">
              <input type="button" class="form-control btn shadow-lg" onclick="focedit()" value=" Edit ">
              <input type="submit" class="form-control btn shadow-lg" value=" Save " id="save-btn" disabled>
            </div>
                  </form>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          hey there
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="fname" class="col-form-label" style="padding: 0px 0px 10px 45px;">First name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="lname" class="col-form-label" style="padding: 0px 0px 10px 45px;">Last name :</label>
              <div class="input1">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="phone" class="col-form-label" style="padding: 0px 0px 10px 45px;">Phone number :</label>
              <div class="input1">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" readonly>
              </div>
            </div>
            <div class="mb-5">
              <label for="mail" class="col-form-label" style="padding: 0px 0px 10px 45px;">mail</label>
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

</body>
</html>
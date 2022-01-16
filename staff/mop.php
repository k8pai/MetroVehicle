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

   <link rel="stylesheet" type="text/css" href="../css/commonStyles.css">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Transport Updation</title>
    
    <script>
      function goBack() {
        window.history.back();
      }
      function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </head>
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="abc-1" style="height: 100%; width: 100%;">
    <div class="abc-2"style="min-height: 100%; width: 100%; border: 1px solid black;">
        <div class="abc-3">
          <div id="mySidenav" class="sidenav shadow-lg">
            <div class="closebtn-div">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <a href="/staff/staffhome.php">Home</a>
            <!-- <a href="/staff/mot.php">Transport</a> -->
            <a href="/staff/vreg.php">User Details</a>
            <a href="/staff/ticketBooking.php">Booking</a>
            <a href="/staff/mop.php">Payment management</a>
            <!-- <a href="/staff/cancellation.php">Complaint</a> -->
            <a href="/../logout.php">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; text-align: center;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
          <div class="container">
            <div class="card text-dark bg-transparent mb-3 shadow-lg">
              <div class="card-header">Payment.</div>
              <div class="card-body" style="width: 550px;">
                <form action="" method="post">
                <div class="input1">
                  <input type="text" class="form-control shadow-lg" placeholder=" Payment Code " aria-label="Payment code" name="bookingid">
                </div>
                <div class="input1">
                  <div class="form-check" name="flagval">
                    <input class="form-check-input" type="hidden" value="" id="flagval-all" name="flagval">
                    <input class="form-check-input" type="radio" value="all" id="flagval-all" name="flagval" checked>
                    <label class="form-check-label" for="flagval-all">
                      show all payment
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="suc" id="flagval-suc" name="flagval">
                    <label class="form-check-label" for="flagval-suc">
                      show successful payment
                    </label>
                  </div>
                  <div class="form-check" name="flagval">
                    <input class="form-check-input" type="radio" value="pen" id="flagval-pen" name="flagval">
                    <label class="form-check-label" for="flagval-pen">
                      show pending payment
                    </label>
                  </div>
                </div>
                <!-- <div class="input1">
                  <select class="form-select shadow-lg" aria-label="form-select-example" name="paymode" required>
                  <option selected disabled>select payment mode</option>
                  <option> UPI </option>
                  <option> CREDIT/DEBIT CARD </option>
                  <option> POST PAYMENT </option>
                  <option> OTHER </option>
                </select>
                </div> -->
                <div class="input1">
                  <input type="submit" class="form-control btn shadow-lg"  value=" submit ">
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="container">
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
          <footer>
            <div>
              <span>Copyright @ 2021 Team KGZ. All rights reserved</span>
              <span>Designed by KGZ.</span>
            </div>
          </footer>
        </div>
    </div>
</div>
</body>
</html>
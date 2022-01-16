<?php 
  session_start();
  if(!isset($_SESSION['staff'])){
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

   <link rel="stylesheet" type="text/css" href="../css/commonStyles.css">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>View Registration Details</title>
    
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
          <div id="mySidenav" class="sidenav">
            <div class="closebtn-div">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <a href="/staff/staffhome.php">Home</a>
            <a href="/staff/vreg.php">User Details</a>
            <a href="/staff/ticketBooking.php">Booking</a>
            <a href="/staff/mop.php">Payment management</a>
            <!-- <a href="/staff/cancellation.php">Complaint</a> -->
            <a href="/../logout.php">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="box-shadow: 0px 7px 10px #141414; height: 60px;">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; text-align: center;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
          <div class="container">
            <div class="card text-dark bg-transparent mb-3 shadow-lg">
              <div class="card-header"> User Details </div>
              <div class="card-body" style="width: fit-content;">
                <table class="table table-borderless shadow-lg"  style="width: 100%;">
                  <thead>
                    <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                      <th scope="col"> RCODE </th>
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

                      $s="select * from reg";

                      $rs=$db->selectData($s);
                      while($row=mysqli_fetch_array($rs))
                      {
                      ?>
                        <tr class="data shadow-lg">
                        <td><?php echo $row['regId']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
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





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
   
   <link rel="stylesheet" type="text/css" href="css/commonStyles.css">

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Station Modification</title>
    
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
            <a href="adminhome.php" >Home</a>
            <a href="transport.php">Transport</a>
            <a href="bookingPrice.php">booking price</a>
            <a href="addLocs.php">add locations</a>
            <a href="Vreg.php">User Information</a>
            <a href="station.php">Station</a>
            <a href="mtrate.php">Metro Ticket Rates</a>
            <a href="logout.php">logout</a>
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
              <div class="card-header"> Add Station. </div>
              <div class="card-body" style="width: 550px;">
                <form action="addLocsaction.php" method="post">
                <div class="input1">
                  <input type="text" class="form-control" placeholder=" available locations " aria-label="Station name" name="avlstation" required autofocus>
                </div>
                <div class="input1">
                  <input type="submit" class="form-control btn shadow-lg"  value=" Add Station " style=" transition: 0.4s; margin: 20px; width: 30%; border-radius: 7px; border: 1px solid;">
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container">
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
                        <td><a href="deleteAddLocs.php?id=<?php echo $row['servavllocId']; ?>">Delete</a></td>
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
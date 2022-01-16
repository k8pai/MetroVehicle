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

   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/svg" href="C:\Users\thek8\Downloads\map-marked-alt-solid.svg">
    <title>Home page</title>
    <style type="text/css">
    body{
      background-image: url('wall-img2.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .sidenav{
      display: block;
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #04a0b9;
      transition: 0.5s;
      overflow-x: hidden;
    }

    .sidenav a{
      padding: 7px 7px 7px 27px;
      text-decoration: none;
      text-shadow: 2px 3px 4px #818181;
      font-size: 25px;
      color: #222;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover{
      color: #f1f1f1;
    }

    .closebtn-div{
      height: 70px;
      display: flex;
      justify-content: flex-end;
      margin-right: 20px;
    }

    .sidenav .closebtn{
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      font-size: 40px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    nav.navbar{
      display: flex;
      justify-content: space-between;
      align-content: baseline;
      font-family: 'monospace;', cursive;
      height: 70px;
      padding: 25px;
      border-radius: 0px 0px 5px 5px;
      background: #21211f;
    }

    nav a{
      cursor: pointer;
    }


    li.nav-item{
      padding: 0px 10px; 
      margin: 0px 25px;
      display: flex;
      justify-items: left;
      font-family: 'Dancing Script', cursive;
      font-size: 20px;
      border: 1px solid gray;
      border-radius: 5px;
    }

    li.nav-item a{
      margin: 0px 15px;
    }

    div.section{
      min-height: 96vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    div.container{
      width: fit-content;
      display: flex;
      margin: auto;
      margin-top: 100px;
      margin-bottom: 100px;
    }

    div.card-header{
      text-align: center;
      border: 1px solid #576765;
      border-bottom: none;
    }

    div.card-body{
      padding: 15px;
      border: 1px solid #576765;
    }

    button.btn{
      display: flex;
      margin: auto;
      margin-top: 25px;
      margin-bottom: 15px;
      border-color: whitesmoke;
      color: whitesmoke;
    }

    div.input1{
      padding: 10px 20px;
      display: flex;
      justify-content: space-around;
    }

    select.form-select, input.form-control{
      border-radius: 7px;
      width: 75%;
      /*background-color: #cbf0e9;*/
      border: 1px solid #141414;
    }

    input.form-control.shadow-lg:hover{
      transition: 0.4s;
      background-color: #04a0b9;
      border: 2px solid #04a0b9;
    }

    footer{
      width: 100%;
      text-shadow: 5px 3px 10px #141414;
      /*background: #141414;*/
      color: #141414;
    }

    footer div{
      width: 100%;
      padding: 45px 0px;
    }

    footer div span{
      padding: 8px;
      margin: 0px 20px;
      display: flex;
      justify-content: center;
    }


    </style>
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
  </head>
    <body>


   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <div class="abc-1" style="height: 100%; width: 100%;">
          <div class="abc-2"style="min-height: 100%; width: 100%; border: none;">
              <div class="abc-3" style="background: transparent;">
                <div id="mySidenav" class="sidenav">
                  <div class="closebtn-div">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  </div>
                  <a href="/staff/staffhome.php">Home</a>
                  <a href="/staff/mot.php">Transport</a>
                  <a href="/staff/ticketBooking.php">Booking</a>
                  <a href="/staff/vreg.php">User Details</a>
                  <a href="/staff/mop.php">Payment management</a>
                  <a href="/staff/cancellation.php">Complaint</a>
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
                  <form action="motaction.php" method="post">
                  <div class="card text-dark bg-transparent mb-3 shadow-lg">
                    <div class="card-header">Mode Of Transport</div>
                    <div class="card-body" style="width: 550px;">
                      <div class="input1">
                        <input class="form-control shadow-lg" id="floatingInput" type="text" placeholder="Transcode">
                      </div>
                      <div class="input1">
                        <input class="form-control" list="datalistOptions" id="TransportListItems" placeholder="Transport">
                      </div>
                      <div class="input1">
                        <select class="form-select" aria-label="Default select example" name="Atime">
                          <option selected disabled>Mode of Transport</option>
                          <?php
                          include('dbcon.php');
                          $db=new dbcon;

                          $s="select * from transport";
                          $rs=$db->selectData($s);
                          while($row=mysqli_fetch_array($rs)) 
                          {
                          ?>
                          <option value="<?php echo $row['transMode']; ?>"><?php echo $row['transMode']; ?></option>

                          <?php 
                          }
                          ?>
                        </select>
                      </div>
                      <div class="input1">
                        <input type="submit" class="form-control shadow-lg" value=" Submit " style="letter-spacing: 5px; transition: 0.4s; margin: 20px; width: fit-content; border-radius: 7px; border: 1px solid;">
                      </div>                
                    </div>
                  </div>
                </div>
                <!-- <div class="container">
                  <div class="card text-dark bg-light mb-3" style="max-width: 75%;">
                    <div class="card-header">Transport Info</div>
                    <div class="card-body">
                      <h5 class="card-title">nokaam</h5>
                      <table class="table table-borderless"  style=" text-align: center;">
                        <thead>
                          <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
                            <th scope="col" style="font-size: Default;">*</th>
                            <th scope="col">Tansport code</th>
                            <th scope="col">Mode of Transport</th>
                            <th scope="col">Time</th>
                            <th scope="col" style="font-size: Default;">*</th>
                            <th scope="col" style="font-size: Default;">*</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $s="select * from mot";

                            $rs=$db->selectData($s);
                            $i=1;
                            while($row=mysqli_fetch_array($rs))
                            {
                            ?>
                              <tr class="data">
                              <th scope="row"><?php echo "$i";?></th>
                              <th><?php echo $row['transcode']; ?></th>
                              <th><?php echo $row['transport']; ?></th>
                              <th><?php echo $row['time']; ?></th>
                              <th><a href="deltrans.php?id=<?php echo $row['transport']?>">Delete</a></th>
                              <th><a href="uptrans.php?id=<?php echo $row['transport']?>">Update</a></th>
                              </tr>
                            <?php $i++;} ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> -->
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
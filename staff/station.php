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
    <title>Station Modification</title>
    <style type="text/css">
    body{
      background: #0a0a09;
    }

    .sidenav{
      display: block;
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      transition: 0.5s;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .sidenav a{
      padding: 7px 7px 7px 27px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover{
      color: #f1f1f1;
    }

    .sidenav .closebtn{
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    a.menu-btn{
      cursor: pointer;
      margin-left: 15px;
    }

    a.menu-btn:focus{
      content: '';
      width: 20%;
      height: 100%;
      background: #0a0a09;
      border: 1px solid #0297ad;
    }

    span.header{
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Dancing Script', cursive;
      text-align: middle;
      letter-spacing: 3px;
      color: #111;
      font-style: bold;
    }

    a.back-btn{
      position: absolute;
      right: 15px;
      top: 10px;
      cursor: pointer;
    }
    div.nav-bar{
      position: sticky;
      padding: 15px;
      border: 1px solid gray;
      border-radius: 0px 0px 5px 5px;
      background: #21211f;
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
    	display: flex;
    	flex-direction: column;
    	position: absolute;
      left: 50%;
      top: 20%;
      transform: translateX(-50%);
    }

    input.form-control{
      margin: 25px 5%;
      width: 90%;
      letter-spacing: 2px;
      margin-top: 20px;
    }

    div.input1{
      display: flex; 
      justify-content: center; 
      padding: 0px, 10px; 
      margin-bottom: 13px;
    }

    input.form-control1{
      width: 85%; height: 38px; border-radius: 5px; border: 1px solid lightgray; letter-spacing: 3px; display: flex; margin: auto; margin-top: 20px;
    }

    div.input-group-prepend{
      display: inline-flex;
      justify-content: end;
      margin: 0px 20px;
    }

    div.input-group-text{
      display: block;
      padding: 4px;
      margin: 0px 7px;
    }
    div.input-group-text label{
      letter-spacing: 3px;
      padding: 0px 37px;
    }

    div.right-box{
    	margin-top:  110px;
    	margin-bottom: 130px;
    }

    div.card.text-white.bg-dark.mb-3.right{
    }

    div.footer{
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background: #141414;
      color: ghostwhite;
    }

    div.footer div{
      padding: 8px;
      margin: 20px;
    }

    div.footer div span{
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
    <body>

   <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="abc-1" style="height: 100%; width: 100%;">
    <div class="abc-2"style="min-height: 100%; width: 100%; border: 1px solid black;">
        <div class="abc-3">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="adminhome.php" >Home</a>
            <a href="transport.php">Transport</a>
            <a href="Vreg.php">User Information</a>
            <a href="station.php">Station</a>
            <a href="mtrate.php">Metro Ticket Rates</a>
            <a href="login.php" onclick="preventBack()">logout</a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
            <span class="header" style="justify-content: center; color: #111;"><h3>Metro By Vehicles</h3></span>
            <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
          </nav>
        </div> 
        <div class="section">
        	<div class="card text-white bg-dark mb-3" style="width: 600px; display: flex; margin: auto;">
					  <div class="card-header" style="text-align: center;">Add Transport.</div>
					  <div class="card-body" style="padding: 35px; ">
					  	<form action="stationaction.php" method="post">
					  	<div class="input1">
                <input type="text" class="form-control1" placeholder=" Station Code " aria-label="Station code" name="scode" pattern="[a-z A-z 0-9]+"
                required>
              </div>
              <div class="input1">
                <input type="text" class="form-control1" placeholder=" Station Name " aria-label="Station name" name="sname" pattern="[a-z A-z]+" required>
              </div>
            	<div class="input1">
                <input type="submit" class="btn btn-outline-dark"  value=" Add Station " style="letter-spacing: 5px; color: ghostwhite; border: 1px solid ghostwhite; border-radius: 7px; margin-top: 30px;">
	            </div>
            	</form>
            </div>
					</div>
          <div class="right-box" style="margin-bottom: 130px;">
	          <div class="card text-white bg-dark mb-3 right">
	            <div class="card-header" style="text-align: center;"> Available mode of transports.</div>
	            <div class="card-body" style="padding: 35px; ">
	              <table class="table table-borderless"  style="color: whitesmoke; text-align: center; width: 600px;">

	                <thead>
	                  <tr style="font-family: 'Dancing Script', cursive; font-size: 24px;">
	                    <th scope="col" style="font-size: Default;">*</th>
	                    <th scope="col"> Station Code </th>
	                    <th scope="col"> Station Name </th>
	                    <th scope="col"> #*#*# </th>
	                    <th scope="col"> #*#*# </th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <?php
	                    include('dbcon.php');
	                    $db=new dbcon;

	                    $s="select * from station";

	                    $rs=$db->selectData($s);
	                    $i=1;
	                    while($row=mysqli_fetch_array($rs))
	                    {
	                    ?>
	                      <tr class="data">
	                      <td scope="row"><?php echo "$i";?></td>
	                      <td><?php echo $row['scode']; ?></td>
	                      <td><?php echo $row['station']; ?></td>
	                      <td><a href="delst.php?id=<?php echo $row['scode'];?>">Delete</a></td>
	                      <td><a href="mtime.php?id=<?php echo $row['scode'];?>">Metro Timing</a></td>
	                      </tr>
	                    <?php $i++;} ?>
	                </tbody>
	              </table>
	            </div>
	          </div>
	        </div>
        </div>
        
        <div class="footer">
          <div>
            <span>Copyright @ 2021 Team KGZ. All rights reserved</span>
            <span>Designed by KGZ.</span>
          </div>
        </div>
    </div>
</div>
    </body>
</html>
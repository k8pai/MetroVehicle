<?php 
  session_start();
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

  // echo $_SESSION['srcName'];
  // echo $_SESSION['destName'];
  // echo $srcName;
  // echo $destName;

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
    <title>Ticket Rates</title>
    <style type="text/css">
    *{
    	margin: 0;
    	padding: 0;
    }

    body{
    	display: flex;
    	flex-direction: column;
      background-image: url('wall-img2.png');
      background-attachment: fixed;
      background-repeat: no-repeat;
    }

    body{
      display: flex;
      flex-direction: column;
      background-image: url('wall-img2.png');
      background-attachment: fixed;
      background-repeat: no-repeat;
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
      padding: 10px 7px 7px 27px;
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
      /*font-family: 'Dancinc Script', cursive;*/
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
      justify-content: space-around;
    }

    div.container{
      width: fit-content;
      display: flex;
      margin: auto;
      margin-top: 110px;
      margin-bottom: 100px;
    }

    div.card-header{
      text-align: center;
      border: 1px solid #576765;
      border-bottom: none;
    }

    div.card-body{
      min-width: fit-content;
      padding: 15px;
      border: 1px solid #576765;
    }

    tr{
      border-radius: 9px;
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
    /*@media print{
      .header, footer{
        position: fixed;
      }

      footer{
        position: fixed;
        bottom: 0;
      }
    }*/

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
      
      function clearndview() {
        document.getElementById("table-body").style.display = "none";
        // document.getElementById("table-body").style.content = " ";
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
            <div class="abc-3">
              <div id="mySidenav" class="sidenav shadow-lg">
                <div class="closebtn-div">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
                <a href="index.php" >Home</a>
                <a href="viewticketRates.php">View Ticket Rates</a>
                <!-- <a href="viewStationsAndTiming.php">View Stations & Timings</a> -->
                <a href="invalid.php">Contact Us</a>
                <a href="invalid.php">Help</a>
                <a href="invalid.php">About Us</a>
              </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-lg">
                  <a class="menu-btn" id="Menu-open" onclick="openNav()"><img src="baseline_menu_black_24dp.png"></a>
                  <span class="header" style="justify-content: center;"><h3>Metro By Vehicles</h3></span>
                  <a class="back-btn" onclick="goBack()"><img src="baseline_arrow_back_ios_black_24dp.png"></a>
                </nav>
            </div>     
            <div class="section">
            	<div class="container">
	              <div class="card text-dark bg-transparent mb-3 shadow-lg">
	                <div class="card-header">Ticket Rates</div>
	                <div class="card-body">
	                  <table class="table table-borderless"  style="color: #141414; text-align: center; width: 600px;">
	                    <thead>
	                      <tr class="data shadow-lg" style="font-family: 'Dancing Script', cursive; font-size: 24px;">
	                        <th scope="col"> From Station </th>
	                        <th scope="col"> To Station </th>
	                        <th scope="col"> Rates </th>
	                      </tr>
	                    </thead>
	                    <tbody id="table-body">
	                        <?php
		                      include('dbcon.php');
		                      $db=new dbcon();
		                      $s="select * from mrate";
	                        $s1="select * from mrate where srcName='$srcName'";
	                        $s2="select * from mrate where srcName='$srcName' and destName='$destName'";
	                        $s3="select * from mrate where destName='$destName'";
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
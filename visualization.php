<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Expense Manager</title>
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/untitled.css">
<link rel="stylesheet" href="css/visual.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
 </head> 
<section id="sidebar"> 
  <div class="white-label">
  <img src = "images/logo.jpg" height="50px" width="100px">
  </div> 
  <div id="sidebar-nav">   
    <ul>
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#"><i class="fa fa-desktop"></i>Profile</a></li>
      <li><a href="dashboard.php"><i class="fa fa-usd"></i>Expense Manager</a></li>
      <li class="active"><a href="visualization.php"><i class="fa fa-line-chart"></i>Visualization</a></li>  
      
      <li><a href="reservation.php"><i class="fa fa-calendar-o"></i> Reservations</a></li>
      <li><a href="calender.php"><i class="fa fa-calendar"></i> Calendar</a></li>
    </ul>
  </div>
</section>
<section id="content">
  <div id="header">
    <div class="header-nav">
      <div class="menu-button">
        <!--<i class="fa fa-navicon"></i>-->
      </div>
      <div class="nav">
        <ul>
          <li class="nav-settings">
            <div class="font-icon"><i class="fa fa-tasks"></i></div>
          </li>
          <li class="nav-mail">
            <div class="font-icon"><i class="fa fa-envelope-o"></i></div>
          </li>
          <li class="nav-calendar">
            <div class="font-icon"><i class="fa fa-calendar"></i></div>
          </li>
          <li class="nav-chat">
            <div class="font-icon"><i class="fa fa-comments-o"></i></div>
          </li>
          <li class="nav-profile">
            <div class="nav-profile-image">
              <img src="images/in.jpg" alt="profile-img" alt="profile image">
              <div class="nav-profile-name">Prabhat Tripathi<i class="fa fa-caret-down"></i></div>
              
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <h1>Graph to input your data categorize wise with amount to Visualize the data</h1>
<div id="chartdiv" style="width: 100%; height: 355px;"></div>
<div id="data-table">
    <div class="data-row">
        <input class="data-cell data-category" value="Food" />
        <input class="data-cell data-value" value="1200" type="number" step="10" />
        <input class="data-button delete-button" type="button" value="X" />
    </div>
</div>
<br />
<input type="button" value="click to add another cathegory and amount" onclick="addRow()" class="data-button" id="add-row" style="position: relative;left:60%;font-weight: bold;top:-30px;" />

</section>
<script type="text/javascript" src="js/visual.js"></script>
</html>
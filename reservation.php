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
<link rel="stylesheet" href="css/reservation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.timekit.io/booking-js/v1/booking.min.js" defer></script> </head> 
<section id="sidebar"> 
  <div class="white-label">
  <img src = "images/logo.jpg" height="50px" width="100px">
  </div> 
  <div id="sidebar-nav">   
    <ul>
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#"><i class="fa fa-desktop"></i>Profile</a></li>
      <li><a href="dashboard.php"><i class="fa fa-usd"></i> Expense Manager</a></li>
      <li><a href="visualization.php"><i class="fa fa-line-chart"></i>Visualization</a></li>  
      
      <li class="active"><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
      <li><a href="calender.php"><i class="fa fa-calendar"></i> Calendar</a></li>
       <li><a href="login.php"><i class="fa fa-user"></i>Log Out</a></li>
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
  
<div id="page">
  <div class="page-header">
    <h1>Reservation Schedule So that you can make plans about your expenses</h1>
  </div>
  <div id="calendar"></div>
</div>


</section>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/reservation.js"></script>
</html>

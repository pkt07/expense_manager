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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 </head> 
<section id="sidebar"> 
  <div class="white-label">
  <img src = "images/logo.jpg" height="50px" width="100px">
  </div> 
  <div id="sidebar-nav">   
    <ul>
      <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#"><i class="fa fa-desktop"></i>Profile</a></li>
      <li><a href="#"><i class="fa fa-usd"></i> Expense Manager</a></li>
      <li><a href="#"><i class="fa fa-line-chart"></i>Visualization</a></li>  
      <li><a href="#"><i class="fa fa-users"></i>List_details</a></li>
      <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
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
  <div class="content">
    <div class="content-header">
      <h1 class="heading">Expense Manager</h1>
      <p>Simple way to avoid overspending and manage Expenses</p>
    </div>
    <div class="box">
    <h1 class="box-header"><center>Simple way to Keep the Expense Record is to maintain here</center></h1>

    <div id="form-box">
	<form>
	  <div class="money">
	      <select name="type" class="type">
	          <option value="cash">Cash</option>
	          <option value="cryptocoin">Paytm</option>
	          <option value="card">Card</option>
	          <option value="other">Other Wallet</option>
	      </select>
	  </div>
	  
	  <div class="category">
	    <select name="item-name" class="item-name">
	          <option>Grocery</option>
	          <option>Entertainment</option>
	          <option>Vehicle</option>
	          <option>Food</option>
	          <option>Miscellaneous</option>
	    </select>
	  </div>
	  
	  <div class="cal">
	     <input type="date" name="date" class="date">
	  </div>
	  
	  <div class="amnt">
	    <input type="number" name="amount" placeholder="Amount Spent" class="data-sent">
	  </div>
	  
	</form>
	</div>

	<div id="button"><span>Add expense</span></div>

	<table>
	  <tr>
	    <th id="type" class="center">Type</th>
	    <th><center>Name</center></th>
	    <th id="date">Date</th>
	    <th style="text-align: right" id="amount">Amount</th>
	  </tr>
	  <tr id="if-empty">
	    <td colspan="4"><span>Your added items will show up here!</span></td>
	  </tr>

	</table>

	</div>
  </div>
</section>
<script type="text/javascript" src="js/index.js"></script>
</html>

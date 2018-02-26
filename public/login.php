<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Expense Manager</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  
</head>
<body>
  <div class="nav">
<h1 style="color: #fff;font-family:'Ubuntu"><center>Expense Manager App</center></h1>
</div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="para">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <div class="footer">
<p class="text">Terms and Conditions</p>
<p class="text1">Privacy</p>
<p class="text2">Copyright and Designed By ~ Prabhat Tripathi</p>
</div>
</body>
</html>

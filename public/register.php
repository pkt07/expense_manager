<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="nav">
<h1 style="color: #fff;font-family:'Ubuntu"><center>Expense Manager App</center></h1>
</div>	
  <form class="singup" method="post" action="register.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="para">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
   <div class="footer1">
<p class="text">Terms and Conditions</p>
<p class="text1">Privacy</p>
<p class="text2">Copyright and Designed By ~ Prabhat Tripathi</p>
</div>
</body>
</html>

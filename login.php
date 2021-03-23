<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>Login to | Pharma-Mart</title>
  <link rel = "icon" href = "images/FP/Icon1.jpg" type = "image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/body.css">
<link rel="stylesheet" type="text/css" href="css/log_style.css">

</head>
<body>
	 
	<!--Login page-->
	<div style="background:url('images/FP/14.jpg');background-repeat:no-repeat;background-size:cover;margin-top:-30px">
		  <div style="background-color:rgba(0,0,0,.5);position:relative">
	<div class="login-container d-flex align-items-center justify-content-cent" style="margin-top:60px">
		<form class="login-form text-center" action="userdb.php" method="post">
			<h2 class="mb-5 font-weight-light text-uppercase text-white"> Login Here</h2>
			<div class="form-group">
				<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Email" name='user_email'>
			</div>
			<div class="form-group">
				<input type="password" class="form-control rounded-pill form-control-lg" placeholder="password" name="user_password">
			</div>

			<div class="forget-link d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input type="checkbox" class="form-check-input " id="remember">
					<label for="remember" class="text-white">Remember password</label>
				</div>
				<a href="forgot.php">Forgot Password?</a>
			</div>
			<input type="submit" class="btn btn-success mb-5 btn-block rounded-pill form-control-lg" value="Login" name="login">
			<p class="mt-3 font-weight-normal text-white">Don't have an account?<a href="register.php"> &nbsp;Create an account</a></p>
		</form>
	</div>
</div></div>
	
</body>
</html>
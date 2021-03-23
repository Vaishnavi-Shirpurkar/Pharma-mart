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
		<form class="login-form text-center" action="forgotdb.php" method="post">
			<h2 class="mb-5 font-weight-light text-white"> Recovery Password</h2>
			<div class="form-group">
				<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Email" name='user_email' required="">
			</div>
			<div class="form-group">
				<input type="number" class="form-control rounded-pill form-control-lg" placeholder="Enter captcha" name="cap" required="">
			</div>
            <?php
            $x=rand(1000,5000);
            ?>
			<div class="form-group">
				<input type="number" readonly="" name="cpt" value="<?php echo"$x"?>">
			</div>

			<div class="forget-link d-flex align-items-center justify-content-between">
				<div class="form-check">
					
				</div>
				
			</div>
			<input type="submit" class="btn btn-success mb-5 btn-block rounded-pill form-control-lg" value="Recover" name="reset">
			
		</form>
	</div>
</div></div>
	
</body>
</html>


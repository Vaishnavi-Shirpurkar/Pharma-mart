<?php
 include("db_conection.php");
?>
<?php
 if(isset($_POST['register']))
 {
	if(!isset($_POST['c']))
	{
	 echo "<script>alert('Please agree to our Terms and Conditions!')</script>";
	 echo "<script>window.open('register.php','_self')</script>";
	}
	
    $user_email = $_POST['ruser_email'];
    $user_password = $_POST['ruser_password'];
    $user_firstname = $_POST['ruser_firstname'];
    $user_lastname = $_POST['ruser_lastname'];
    $user_address = $_POST['ruser_address'];
    $user_phone=$_POST['ruser_phone'];



    $check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
      echo "<script>alert('Email already exist, Please try another one!')</script>";
      echo"<script>window.open('register.php','_self')</script>";
    }
    $saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address,user_phone) VALUES ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address','$user_phone')";
    mysqli_query($dbcon,$saveaccount);
    echo "<script>alert('Data successfully saved, You may now login!')</script>";				
    echo "<script>window.open('login.php','_self')</script>";	

 }

?>
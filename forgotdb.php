<?php
include("db_conection.php");

if(isset($_POST['reset']))
{
   $x1=$_POST['cpt'];
    if($_POST['cap']==$x1)
    {
    	$user_email=$_POST['user_email'];
    
       $check_user="select user_email from users WHERE user_email='$user_email' ";

       $run=mysqli_query($dbcon,$check_user);
      
      if(mysqli_num_rows($run))
      {
    	 $pass="select user_password from users where user_email='$user_email' ";
    	 $run1=mysqli_query($dbcon,$pass);
       $row = mysqli_fetch_assoc($run1);
       
         require_once ('PHPMailer/PHPMailerAutoload.php');
         $mail = new PHPMailer();
         $mail ->isSMTP();
         $mail ->SMTPAuth = true;
         $mail ->SMTPSecure = 'ssl';
         $mail ->Host = "smtp.gmail.com";
         $mail ->Port = 465; // or 587
         $mail ->isHTML();
         $mail ->Username = "shivtradingcompanynoreply@gmail.com";
         $mail ->Password = "SH@iv#$%12dd45";
         $mail ->SetFrom('shivtradingcompanynoreply@gmail.com');
         $mail ->Subject = 'PASSWORD RECOVERY';
         $mail ->Body = "Your password is ".$row['user_password']." .";
         $mail ->AddAddress($user_email);
         $mail->Send();
         echo "<script>alert('Password successfully send to your mail check it!')</script>";
         echo "<script>window.open('login.php','_self')</script>";
        }
       else
       {
          echo "<script>alert('Email is incorrect!')</script>";
		  echo "<script>window.open('forgot.php','_self')</script>";	
        }
    }
    else
    {
       echo "<script>alert('Re-enter Captcha!')</script>";
      echo "<script>window.open('forgot.php','_self')</script>"; 
    }
}
?>
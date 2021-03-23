<?php
if(isset($_POST['Submit']))
    $user_name2= $_POST['element_2'];
    $user_name1=$_POST['element_3'];
    $user_email=$_POST['element_7'];
    $user_phone=$_POST['element_9'];
    $user_message=$_POST['element_11']; 

   echo "<script>alert('Message Received')</script>";
   echo "<script>window.open('contact.php','_self')</script>";
  
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
   $mail ->Subject = 'WEBSITE USER MESSAGE';
   $mail ->Body = 
   "<table>
   <tr><td>
   <th>User Data    </th></td></tr>
   <tr>
   <th>Name</th>
    <td>$user_name1</td></tr>
    <tr>
   <th>Email</th>
   <td>$user_email</td>
   </tr>
   <tr>
   <th>message</th>
  <td>$user_message</td>
   </tr>
   </table>";
   $mail ->AddAddress('shivtradingcompanynoreply@gmail.com');
   $mail->Send() 
?>
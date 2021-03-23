<?php
session_start();
if(!$_SESSION['user_email'])
{
    header("Location: ../index.php");
}
?>

<?php;
 include("db_conection.php");
 ?>
 <?php
include("db_conection.php");
     $ee=$_SESSION['user_email'];
  $s1="select user_id from users where user_email='$ee'";
    $result = mysqli_query($dbcon,$s1);
    $row = mysqli_fetch_assoc($result);
    $idd=$row['user_id'];

    $s2="select order_date from orderdetails where user_id='$idd'";
    $result1 = mysqli_query($dbcon,$s2);
    $row1 = mysqli_fetch_assoc($result1);
    $date1=(int)$row1['order_date'];

    ?>
<html>
<head>
<title>Order Tracking Details</title>
</head>
<body style="text-align: left; font-size: 25px; ">
 
    <?php 
    error_reporting(0);
ini_set('display_errors', 0);
$date2=(int)date('yy-m-d');
$diff=$date1-$date2;
echo "<br><br><b>Order Tracking Details !</b><br><br>";
    
if($diff>=0 && $diff<2)
{
      echo "<br><b>Status:</b>";
      echo "<br>Order Not Process Yet";
      echo "<br><b>Payment Method:</b>";
      echo "<br>COD";

} 

elseif($diff>=2 && $diff<4)
{
      echo "<br><b>Remark:</b>";
      echo "<br>In Process";
      echo "<br><b>Status:</b>";
      echo "<br>Product ready for Shipping";
      echo "<br><b>Payment Method:</b>";
      echo "<br>COD"; 
}
elseif($diff>=4 && $diff<6)
{
      echo "<br><b>Remark:</b>";
      echo "<br>In Process";
      echo "<br><b>Status:</b>";
      echo "<br>Order has been Shipped"; 
      echo "<br><b>Payment Method:</b>";
      echo "<br>COD";
}

elseif($diff>=6 && $diff<8)
{
      echo "<br><b>Remark:</b>";
      echo "<br>Delivered";
      echo "<br><b>Status:</b>";
      echo "<br>Order Has been delivered"; 
      echo "<br><b>Payment Method:</b>";
      echo "<br>COD";
}
elseif($diff>=8)
{
      echo "<br><b>Remark:</b>";
      echo "<br>Delivered";
      echo "<br><b>Status:</b>";
      echo "<br>Product delivered successfully";
      echo "<br><b>Payment Method:</b>";
      echo "<br>COD"; 
}
?>
</table>
 </form>
</div>

</body>
</html>

     
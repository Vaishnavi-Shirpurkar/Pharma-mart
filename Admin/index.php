<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHARMA-MART</title>
    <link rel="shortcut icon" href="../images/FP/ICON1.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >Admin Account</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #073530">
                <ul class="nav navbar-nav side-nav" style="background-color: #073530">
                    <li class="active"><a href="index.php"style="background-color: #128c7e"> &nbsp; &nbsp; &nbsp; Home</a></li>
          <li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
          <li><a href="items.php"> &nbsp; &nbsp; &nbsp; Item Management</a></li>
          <li><a href="customers.php"> &nbsp; &nbsp; &nbsp; Customer Management</a></li>
          <li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
          <li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Logout</a></li>
        </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                      
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
      
      
      
      
      
      <div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    

    
  
  <!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#128c7e" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
              </div>
              <div class="modal-body">
         
        
      
        
         <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
          
            
                            <p>Name of Item:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
               
              </div>
              
              
              
              <p>Description:</p>
                            <div class="form-group">
                            
                                <input class="form-control" placeholder="Description" name="item_des" type="text" required>
                           
                             
                            </div>
              
              
              
              
              <p>Price:</p>
                            <div class="form-group">
              
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
               
              </div>

              <p>Quantity:</p>
                            <div class="form-group">
                            
                                <input id="qtyinput" class="form-control" placeholder="Quantity" name="item_qty" type="text" required>
                           
                             
                            </div>
                            
              <p>Choose Image:</p>
              <div class="form-group">         
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
              </div>      
           </fieldset>             
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
        
         <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
        
        
           </form>
              </div>
            </div>
          </div>
        </div>
        <img style="width: 65%" height="80%" src="../images/FP/adminlogo.jpg">
        <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>

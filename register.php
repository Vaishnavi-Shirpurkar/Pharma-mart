
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register| Pharma-Mart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel = "icon" href = "images/FP/ICON1.jpg" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">

    <link rel="stylesheet" type="text/css" href="css/Sign_style.css">
    <link rel="stylesheet" href="css/body.css">
 </head>

 <body>
   

    <div style="background:url('images/FP/14.jpg');background-repeat:no-repeat;background-size:cover;position:relative;">
      <div style="background-color:rgba(0,0,0,.6);position:relative">
        <div class="container-fluid mt-5" class="login-container d-flex align-items-center justify-content-cent" style="margin-top:60px">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form class="login-form text-center" method="post" action="regdb.php" enctype="multipart/form-data">
                                <h2 class="mb-5 mt-3 text-uppercase text-white" style="font-family: 'Kaushan Script',cursive;color:#ff0867">
                                  Sign Up Here
                                </h2>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control rounded-pill form-control-lg" placeholder="First Name"  name="ruser_firstname" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Last Name" name="ruser_lastname" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="password" id="txtNewPassword" placeholder="Enter password" name="ruser_password"class="form-control rounded-pill form-control-lg" required>
                                    </div>

                                      
                                      <div class="form-group col-6">
                                        <input type="textarea" class="form-control rounded-pill form-control-lg"placeholder="Address" name="ruser_address" required>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="email" class="form-control rounded-pill form-control-lg"placeholder="Email" name="ruser_email" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="number" class="form-control rounded-pill form-control-lg"placeholder=" Phone" name="ruser_phone" required>
                                    </div>
                                </div>

                                <div class="row">
                                                                     
                                </div>
                                  

                                  <div class="text-center">
                                        <label>
                                          <input type="checkbox"  name="c" checked="checked"><label for="" class="text-white">By creating a account you agree to our</label>
                                            <a >Terms & Privacy.</a>
                                        </label>
                                  </div>

                                 <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block form-control rounded-pill form-control-lg" value="REGISTER ACCOUNT" name="register">
                                 </div>

                                 <div class="col-12 text-right text-small text-white" >
                              Already have an account? <a href="login.php" >Login</a>
                                 </div>
                          </form>
                    </div>
               </div>
           </div>
</div>
</div>
</body>
</html>


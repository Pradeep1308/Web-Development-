<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="signup.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
     <div class="signup-form">
                    <form action="signup_script.php" method="POST">
		             <h2>Sign Up</h2>
                        <div class="form-group">
         	            <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                            </div>
		               <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
		                <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                               
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                            </div>
                        <div class="form-group">
                        <input type="city" class="form-control" name="city" placeholder="City" required="required">
                        </div>
                        <div class="form-group">
                        <input type="Address" class="form-control" name="address" placeholder="Address" required="required">
                        </div>  
                        <center>     
       
		                <div class="form-group">
                       <button type="submit" name="submit" class="btn btn-primary">SignUp</button>
                        
                       </div>
                        </center>
                       <center>
                       <p style="font-size: larger;">OR</p>
                       </center>
                
                       <div class="row">
                        <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#" style="color: white;"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a> </div>
                    </div>
    </form>
    
 </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>

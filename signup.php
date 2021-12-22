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
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="container">
         <div class="container-fluid">
        <div class="col-md-6 col-sm-6">
         <div class="caption">  
           <img src="img/yess.jpg" class="thumbnails" alt="" >
         </div>
       </div>
                         <div class="row">
                        <div class="col-md-6 col-sm-6">
                     <div class="panel panel-default">
                     <div class="panel-heading"> <h2>SIGN UP</h2></div></div>
                           
                    <form action="signup_script.php" method="POST">
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Enter Name..." name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email"  class="form-control" placeholder="Enter email..." name="e-mail" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><!--<?php echo $_GET['m1']; ?>-->
                    </div>
                   <div class="form-group">
                        <input type="phone"  class="form-control" placeholder="Enter phone no..." name="contact" maxlength="10" size="10" required="true"><!--<?php echo $_GET['m2']; ?>-->
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Enter city..." name="city" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Enter address..." name="address" required="true">
                    </div>
                    <div class="form-group">
                  <input type="password"  class="form-control" placeholder="Enter password..." name="password" required="true" pattern=".{6,}">
                <small class="font-text text-muted"> We'll never share your password with anyone else.</small>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Singup </button>
                  </form>
                </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/footer.php"; ?>
    </body>
</html>
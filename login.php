<?php
require("includes/connect.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title> Tech-World </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
         <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        
            
            
    </head>
    <body>
  
        
        <?php
        require 'includes/header.php';
        ?> 
        
        <div class="container panel-margin">
            <div class="col-sm-7">
            <div class="panel panel-primary">
                
                <div class="panel-heading">
                    <h2>Login</h2>
                </div>
                <div class="panel-body">
                     <p class="text-warning">Login to make a purchase</p>
							<?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                            ?>
                <form action="login_submit.php" method="POST">
                    
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                        </div>
                    <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                        </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                        </div>

                </form>      
                 </div>
                <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
            </div>
                
            </div>
        </div>
         <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>

<?php
require 'includes/connect.php';
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
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1>Settings</h1>
                </div>
                <form action="settings_script.php" method="POST">
                    <div class="form-group">
                            <input type="password" name="oldpassword" class="form-control" placeholder="OLD Password" required="required">
                        </div>
                    <div class="form-group">
                            <input type="password" name="newpassword" class="form-control" placeholder="New Password" required="required">
                        </div>
                    <div class="form-group">
                            <input type="password" name="renewpassword" class="form-control" placeholder=" Confirm New Password" required="required">
                        </div>
                    <button class="btn btn-primary">Change</button>
                </form>
                
            </div>
        </div>  
        
        
   <?php
        require 'includes/footer.php';
       ?>
    </body>
</html>
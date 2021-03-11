<?php
  require("includes/connect.php");
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
                <div class="col-sm-9">
                    <h1>LIVE SUPPORT</h1>
                    <h4> 10am-10pm | 7 Days | 365 days a Year Support from Us</h4>
                    <p class="text-justify">We provide the best support. Whenever  you need help in buying,placing order or any assistance for login, and we also help you in tracking your order and In case You money is deducted and and order is not placed , We got you covered  just call and We will be hapy to help </p>
                </div>
                <div class="col-sm-3">
                    <img  align="right" src="img/contact.png" alt="Contact Us">
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-8">
                    <h2>Contact Us</h2>
                    <form action="contact_script.php" method="POST">
                        <div class="form-group">
                            <input type="text" value="name" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" value="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form> 
                </div> 
                <div class="col-sm-4">
                    <h2>Company Information</h2>
                    <p> A/102 Atta Market</p>
                    <p>Noida, Uttar Pradesh</p>
                    <p>India</p>
                    <p> Contact: +917854130</p>
                    <p>Fax: 123056</p>
                    <p>Email: Tech-world@world.org</p>
                </div>
                
            </div>
        </div>  
             
         <?php
        require 'includes/footer.php';
        ?>
       
    </body>
</html>   
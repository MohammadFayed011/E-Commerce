<?php
include "includes/connect.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
        require 'includes/check-if-added.php';
        ?>
        
        <div class="container-fluid panel-margin ">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 1</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="img/1.jpg" height="200px" width="200px">
                            <div class="caption">
                                <p>Microsoft Surface Laptop 13. Rs.85,000</p>
                                	<?php 
                                        if (check_if_added_to_cart(1)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 2</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="img/2.jpg" height="200px" width="200px">
                            <div class="caption">
                                <p>Hp i7 Laptop 13. Rs.75,000</p>
                                <?php 
                                        if (check_if_added_to_cart(2)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                    
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 3</h4>
                        </div>
                        <div class="thumbnail" >
                            <img src="img/3.jpg" height="200px" width="300px">
                            <div class="caption">
                                <p>Dell Pro Laptop 15. Rs.55,000</p>
                               <?php 
                                        if (check_if_added_to_cart(3)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                
            </div>
            <div class="row">
      
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 4</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="img/4.jpg"height="200px" width="220px">
                            <div class="caption">
                                <p>Lenovo Laptop 14. Rs.65,000</p>
                              <?php 
                                        if (check_if_added_to_cart(4)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 5</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="img/5.jpg"height="200px" width="220px">
                            <div class="caption">
                                <p>Acer Ultimate Laptop 13. Rs.69,000</p>
                              <?php 
                                        if (check_if_added_to_cart(5)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                   
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h4>Laptop 6</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="img/6.jpg" height="200px" width="200px">
                            <div class="caption">
                                <p>MSi Gaming Pro Laptop 13. Rs.95,000</p>
                           <?php 
                                        if (check_if_added_to_cart(6)) {
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
				?>
				<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
				<?php
				}
				?>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
                
            </div>
            
        </div>
      <?php
        require 'includes/footer.php';
       ?>
    </body>
</html>


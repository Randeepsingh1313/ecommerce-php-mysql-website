<?php
require "db.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="index.css">
		<style></style>
	</head>
    
<body>
 
     <!-- Responsive Header -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
            
            <!-- Responsive Header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Ecommerce Site</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Ecommerce Site</a>
			</div>
            
            <!-- Navbar-->
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
    
    <div class="container-fluid">
     <div class="jumbotron" id="Product-desc">
            <div class="display-4">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="head-area">Ready to unfold your world</h1>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
     
	<div class="container-fluid">
	
				<div class="panel">
					<div class="heading">Latest Products</div>
					<div class="content-body">
						<div id="get_product">
							
						</div>						
					</div>			
			   </div>

	</div>
    <footer class="bg-dark text-center text-white">© 2020 Copyright</footer>
</body>
</html>
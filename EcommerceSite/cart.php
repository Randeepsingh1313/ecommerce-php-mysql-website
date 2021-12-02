<?php

require "db.php";

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
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
<body>
    
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
		
				<div class="panel2">
					 <h1 class="head-area">Your Cart</h1>
                    
                   
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2"><b>Product Image</b></div>
							<div class="col-md-2"><b>Product Name</b></div>
							<div class="col-md-2"><b>Quantity</b></div>
							<div class="col-md-2"><b>Product Price</b></div>
						</div>	
                        
                    
                        <!-- Render data from cart table-->
                        <div id="cart_checkout"></div>							
			   </div>
		  </div>
        
	
    </div>
   
     <footer class="bg-dark text-center text-white">© 2020 Copyright</footer>
</body>	
</html>









		
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
			<header class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Ecommerce Site</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Ecommerce Site</a>
                
                <ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php">Contact</a></li>
			</ul>
			</header>
	</div>
</div>	
    
     <!-- Rest of the Page-->
    <div class="container-fluid">    
         <div class="jumbotron">
            <div class="display-4">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="head-area">Ecommerce Site.</h1>
                  <p>Hook up a hot new phone for $0 down with Sweet Pay on eligible 2-year plans. Taxes extra.</p>
                  <button class="CheckBtn" type="button">Explore More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar">
            <div class="sidebar-one">             
                <h3>Explore Canada’s most popular cities</h3>
                <p>Vancouver,BC     Toronto,ON      Ottawa,ON     Calgary,AB      Winnibeg,WB     Surrey,BC</p>
            </div>
        </div>
        
          <div class="heading">Useful information. For buyers. For sellers. For fun.</div>

          <div class="box-area">
            <div class="single-box"> 
              <img class="img-area1">    
                      <h3 class="head-area">Investment Products and Solutions</h3>
                      <p class="para-area">Industry-leading investment expertise that delivers long-term results to investors.</p>
                      <button type="button" class="CheckBtn" >Learn More</button>      
            </div>
            <div class="single-box"> 
                <img class="img-area2">      
                        <h3 class="head-area">Our Story</h3>
                        <p class="para-area">From our humble beginnings in 1913 to present day, read all about the milestones that have defined Royal LePage.</p>
                        <button type="button" class="CheckBtn" >Learn More</button>
            </div>
            <div class="single-box"> 
              <img class="img-area3">      
                      <h3 class="head-area">Shelter Foundation</h3>
                      <p class="para-area">HomeMavens has its own charitable foundation dedicated to funding women’s shelters.</p>
                      <button type="button" class="CheckBtn" >Learn More</button>
            </div>
          </div>
          
    </div>
    <footer class="bg-dark text-center text-white">© 2020 Copyright</footer>

</body>
</html>















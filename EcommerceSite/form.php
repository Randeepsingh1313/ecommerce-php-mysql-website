<?php

if (isset($_SESSION["uid"])) {
	header("location:index.php");
}
    
$fnameErr = $lnameErr= $emailErr = $passErr = $mobileErr = $addErr="";
$cardNameErr = $cardErr= $monthErr = $yearErr = $cvvErr ="";

$fname = $lname = $email = $password = $mobile = $address = "";
$cardName = $cardNum = $month = $year = $cvv = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["f_name"])) {
    $fnameErr = "Firstname is required";
  } else {
    $fname = ($_POST["f_name"]);
  }
    
  if (empty($_POST["l_name"])) {
    $lnameErr = "Lastname is required";
  } else {
    $lname = ($_POST["f_name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = ($_POST["password"]);
  }
    
  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile is required";
  } else {
    $mobile = ($_POST["mobile"]);
  }

  if (empty($_POST["address"])) {
    $addErr = "Address is required";
  } else {
    $address = ($_POST["address"]);
  }

  if (empty($_POST["cname"])) {
    $cardNameErr = "Please enter card holder name";
  } else {
    $cardName = ($_POST["cname"]);
  }
    
  if (empty($_POST["ccnum"])) {
    $cardErr = "Please enter card holder name";
  } else {
    $cardNum = ($_POST["ccnum"]);
  }
    
  if (empty($_POST["expmonth"])) {
    $monthErr = "Please enter card holder name";
  } else {
    $month = ($_POST["expmonth"]);
  }
    
  if (empty($_POST["expyear"])) {
    $yearErr = "Please enter card holder name";
  } else {
    $year = ($_POST["expyear"]);
  }
    
  if (empty($_POST["cvv"])) {
    $cvvErr = "Please enter card holder name";
  } else {
    $cvv = ($_POST["cvv"]);
  }
   
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
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
    
	<div class="container-fluid">	
	
				<div class="panel2">
                       
					 <h1 class="head-area">Billing Address Information</h1>		
					<form method="POST" action="index.php">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" required>
                                <span class="error">* <?php echo $fnameErr;?></span>
							</div>
							<div class="col-md-6">
								<label for="_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" required>
                                <span class="error">* <?php echo $lnameErr;?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
                                <span class="error">* <?php echo $emailErr;?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
                                <span class="error">* <?php echo $passErr;?></span>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Contact Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
                                <span class="error">* <?php echo $mobileErr;?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address</label>
								<input type="text" id="address" name="address1"class="form-control" required>
                                <span class="error">* <?php echo $addErr;?></span>
							</div>
						</div>

                        
                        
						<p><br/></p>
                        
    
            <h1 class="head-area">Payment Option</h1>
            
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            
            
            <div class="row">
				<div class="col-md-12">
                    <label for="cname">Name on Card</label>
                    <input type="text" id="cname" class="form-control" name="cardname" placeholder="John More Doe">
                    <span class="error">* <?php echo $cardNameErr;?></span>
                </div>
            </div>
            
                            
            <div class="row">
				<div class="col-md-12">
                    <label for="ccnum">Credit card number</label>
                    <input type="text" id="ccnum" class="form-control" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <span class="error">* <?php echo $cardErr;?></span>
                </div>
            </div>
                 
            <div class="row">
				<div class="col-md-12">    
                    <label for="expmonth">Exp Month</label>
                    <input type="text" id="expmonth" class="form-control" name="expmonth" placeholder="September">
                    <span class="error">* <?php echo $monthErr;?></span>
                </div>
            </div>
                            
            <div class="row">
                    <div class="col-md-12">
                        <label for="expyear">Exp Year</label>
                        <input type="text" id="expyear" class="form-control" name="expyear" placeholder="2021">
                        <span class="error">* <?php echo $yearErr;?></span>
                    </div>
                    <div class="col-md-12">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" class="form-control" name="cvv" placeholder="352">
                        <span class="error">* <?php echo $cvvErr;?></span>
                      </div>
            </div>
            <div class="row">
				<div class="col-md-12">
				    <input style="width:100%;" value="Click To Pay" type="submit" name="submit" class="PayBtn">
				</div>
            </div>                     
        </form>      
        </div>
    </div>
    
     <footer class="bg-dark text-center text-white">© 2021 Copyright</footer>
    </body>
</html>
            
    












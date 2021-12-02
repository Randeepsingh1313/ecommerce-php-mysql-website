<?php

session_start();
include "db.php";

// Get Products on product page
if(isset($_POST["getProduct"])){
	
	$product_query = "SELECT * FROM products LIMIT 10";
	$result = mysqli_query($con,$product_query);
    
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
            
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel'>
								<div class='panel-body'>
                                <div class='sub-heading'>$pro_title</div>
									<img src='product_images/$pro_image' style='width:240px; height:280px;'/>
								</div>
								<div class='price-desc'>Rs $pro_price/-</div>
                                    <button pid='$pro_id' style='float:right;' id='product' class='AddToCartBtn' id='addToCart'>Add To Cart</button>
							    </div>
						  </div>	
			";
		}
	}
}

// Add selected products to cart

	if(isset($_POST["addToCart"])){
		
		$p_id = $_POST["proId"];
		
        // User's session is created when product is added
		if(isset($_SESSION["uid"])){
            
		$user_id = $_SESSION["uid"];
            
		$sql = "SELECT * 
                FROM cart 
                WHERE p_id = '$p_id' AND user_id = '$user_id'";
            
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
            
		if($count > 0){
			echo "<div><b>Product is already added into the cart</b></div>";
		} 
            else {
			$sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `user_id`, `qty`) 
			        VALUES ('$p_id','$ip_add','$user_id','1')";
                
			if(mysqli_query($con,$sql)){
				echo "<div><b>Product is Added</b></div>";
			}
		}
		}else{
			$sql = "SELECT id 
                    FROM cart 
                    WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
            
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
                
				echo "<div><b>Product is already added into the cart Continue Shopping</b</div>";
				exit();
			}
			$sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `user_id`, `qty`) 
			        VALUES ('$p_id','$ip_add','-1','1')";
            
			if (mysqli_query($con,$sql)) {
				echo "<div><b>Your product has been added to cart!</b></div>";
				exit();
			}
			
		}	
	}


//Get Cart products from database with a session

	if (isset($_SESSION["uid"])) {
		
		$sql = "
        SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty 
        FROM products a,cart b 
        WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		
		$sql = "
        SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b 
        WHERE a.product_id=b.p_id AND b.user_id =-1";
	}

	$query = mysqli_query($con,$sql);
	
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
            
			echo "<form method='post' action='form.php'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];

					$qty = $row["qty"];

					echo 
						'<div class="row">
								<div class="content-body">
                                
								<div class="col-md-2"><img class="img-responsive" src="product_images/'.$product_image.'"></div>
                                
								<div class="col-md-2">'.$product_title.'</div>
                                
								<div class="col-md-2">'.$qty.'</div>
                                
								<div class="col-md-2">Rs '.$product_price.'</div>
                                
								<div class="col-md-2">
									
										<input remove_id="'.$product_id.'" class="RemoveBtn remove" value="Remove">
									</div>
								</div>
                                                                               
                            </div>                                       
                            </div>';
				}	
        }
        
        // Checkout button for form completion
        if (!isset($_SESSION["uid"])) {
					echo '<input class="PayBtn" type="submit" style="float:right;" name="user_with_product" value="Checkout" >';
    }
        
    }

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
    
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id'";
	}
    
	if(mysqli_query($con,$sql)){
		echo "<div>
				<b>Product is removed from cart</b>
              </div>";
		exit();
	}
}

?>




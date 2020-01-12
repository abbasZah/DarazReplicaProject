<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>

	<?php require_once "header_libs.html"; ?>

</head>
<body>

	<?php require_once "mysqli_connect.php"; ?>
	<?php require_once "top_bar.php"; ?>
	<?php require_once "header.php"; ?>


<div style="background: #f5f5f5;">

<?php



		if($_SERVER["REQUEST_METHOD"]=="POST")

		  {

		  	$user_id = $_SESSION['user_id'];
		  	$pro_id = $_POST["add_to_cart"];
		  	
		  	$sql = "

		  		INSERT INTO cart(user_id,pro_id)
		  		VALUES ('$user_id',$pro_id);

		  	";

		  	$conn->query($sql);

		  	echo " <div class='alert alert-success'>
				<strong>Success!</strong> Product added to your cart.
				</div>";
						  					
			}

		
?>			

	



<?php
	
		$value = $_GET['pro_id'];

		$sql = "SELECT * FROM product WHERE id=$value";
			$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {

?>


	<div class="container-fluid"  style="padding: 0px 80px;">
		<div style="font-size: 14px; color: #1aa5c9; float: left; height: 50px; line-height: 50px;">
			
<?php 
		$category = $row["category"];
		$sql2 = "SELECT name FROM category WHERE id=$category;";
							
		$result2 = $conn->query($sql2);								
		if($result2->num_rows>0)
		{
			while($row2 = $result2->fetch_assoc()) {					
			echo $row2["name"]." > &nbsp;";		
			}
		}					
							
?>
		</div>
		<div style="font-size: 14px; color: #000000;  height: 50px; line-height: 50px;">
			<?php echo $row["name"] ; ?>
		</div>

		<div class="row" style="background: #ffffff;">
			<div class="col-sm-4" style="padding: 15px;">						
				<img src="<?php echo $row["image_path"] ?>" width="330px" height="330px">
			</div>
			<div class="col-sm-6" style="padding: 15px;">
				<h5><?php echo $row["name"] ?></h5>	

				<hr style="color: grey;"><br>
				<span style="color: #f57224; font-size: 30px; ">Rs. <?php echo $row["price"] ?> /-</span>	<br>
				

				<br><br>




				<!-- Bug but working ------>

				<form method="POST" action="order_now.php">					
					<button id="order_now" style="float: left; margin-right: 5px; width: 223px; height: 43px; border: none; background: #2abbe8; color: #ffffff;" type="submit" name="order_now" value="<?php echo $row["id"]?>" 
						onclick="orderNow()"
					>
						
						Order Now
					</button>
				</form>

				<script type="text/javascript">
						document.getElementById("order_now").addEventListener("click", orderNow);
						function orderNow() {
							window.location.replace('index.php');
						}
				</script>


				<form method="POST">		
					<button id="add_to_cart" style="width: 223px; height: 43px; border: none; background: #f57224; color: #ffffff;" type="submit" name="add_to_cart" value="<?php echo $row["id"]?>" onclick="addToCart()" >Add to Cart
					</button>
				</form>
<!--
				<script type="text/javascript">
						document.getElementById("add_to_cart").addEventListener("click", addToCart);
						function addToCart() {
							
							alert('Login First');
						}
				</script>
-->
			</div>
			<div class="col-sm-2" style="padding: 15px; background: #fafafa;">
			</div>

		</div>
	</div>


<?php

		}
		} else {
		    echo "0 results";
		}

?>


<br>
<br>
</div>    

		<?php require_once "show_products.php"; ?>
		<?php require_once "footer.php"; ?>

</body>
</html>
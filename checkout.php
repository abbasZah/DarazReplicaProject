<?php

		session_start();

		if(!isset($_SESSION["user_id"]) || !isset($_SESSION["user_password"]))
		{
			echo "<script> window.location.replace('login.php'); </script>";
		}
		else
		{
			

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


	<div class="container-fluid py-3">			
			<div class="clearfix">
				<span class="float-left" style="color: #f57224; padding-left: 30px;">
					<h3>Pay now</h3></span>
					<span class="float-right" style="padding: 11px 30px;">				    	
						
					</span>
			</div>		
	</div>



<?php

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

		echo "<script type='text/javascript'>alert('Sucessful');</script>";
		echo "<script> window.location.replace('index.php'); </script>";


	}



?>



<div class="container-fluid">
	<div class="row" style="padding: 11px 30px; ">
		<div class="col-sm-6" style="background: #ffffff; padding: 30px;">


<form method="POST">
				<img src="images/payment_method.png"><br>

				<span class="sign-up-span">Card Number</span>
					<input type="Number" name="user_id" class="sign-up-input" placeholder="Card Number" />
								
					<span class="sign-up-span">Name on card</span>
					<input type="text" name="user_password" class="sign-up-input" placeholder="Name on card" />
				
					<div class="row">
						<div class="col-sm-8">
							<span class="sign-up-span">Expiration date</span>
							<input type="date" name="user_birthday" class="sign-up-input"/>
						</div>
						<div class="col-sm-4">
							<span class="sign-up-span">CVV</span>
							<input type="Number" name="user_id" class="sign-up-input" placeholder="CVV" />			
						</div>


					</div>

					<button type="submit" id="sign_up_button" style="width: 200px;">PLACE ORDER</button>

</form>


		</div>
		<div class="col-sm-2" style="background: #ffffff;">
		</div>
		<div class="col-sm-4">
			
			<div  style="background: #ffffff; padding: 10px; ">
				<h4>Order Summary</h4><br>
				<div style="float: left;">			
					<span style="display: table-cell;
					font-size: 14px;color:#757575;letter-spacing: 0;line-height: 16px;vertical-align: middle;width: 50%;">Subtotal</span>
				</div>
				<div style="float: right;">			<span id="sub_total" style="font-weight: bold; color: #f57224;">Rs. 999999 /-</span>			
				</div>

				<h4></h4><br>

				
			</div>


		</div>
	</div>
</div>


<script type="text/javascript">
	

var sub_total = document.getElementById("sub_total");
sub_total.innerHTML = "<?php echo "Rs. ".$_SESSION["checkout_price"]." /-"; ?>";



</script>	


</div>


	<?php require_once "footer.php"; ?>


</body>
</html>




<?php
}
?>
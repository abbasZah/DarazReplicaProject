<?php


		if(isset($_SESSION["admin_id"]) && isset($_SESSION["admin_password"]))
		{

?>

			<div class="container-fluid" id="top_bar">
					<div class="row">
						<div class="col-sm-12" style="height:25px;">
						<ul>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="admin_panel.php">ADMIN PANEL</a></li>
						</ul>
						</div>			
					</div>
			</div>

<?php
		}

		else if(isset($_SESSION["user_id"]) && isset($_SESSION["user_password"]))
		{

?>

			<div class="container-fluid" id="top_bar">
					<div class="row">
						<div class="col-sm-12" style="height:25px;">
						<ul>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="my_cart.php">MY CART</a></li>
						</ul>
						</div>			
					</div>
			</div>


<?php
		}
		else 
		{	
?>
			
				<div class="container-fluid" id="top_bar">
					<div class="row">
						<div class="col-sm-12" style="height:25px;">
						<ul>
							<li><a href="login.php">LOGIN</a></li>
							<li><a href="sign_up.php">SIGN UP</a></li>
						</ul>
						</div>			
					</div>
				</div>

<?php
		}

?>





<?php

		session_start();

		if(!isset($_SESSION["admin_id"]) || !isset($_SESSION["admin_password"]))
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
					<h3>Manage Products</h3></span>
					<span class="float-right" style="padding: 11px 30px;">				    	
						<a href="admin_add_product.php" style="color: #2e2e54;  text-decoration: underline; "><i class="fa fa-plus-circle fa" style="color: #2e2e54;"></i> Add Product</a>
					</span>
			</div>		
	</div>
</div>
		
			<?php require_once "admin_manage_products.php"; ?>
			<?php require_once "footer.php"; ?>
			
</body>
</html>


<?php
}
?>
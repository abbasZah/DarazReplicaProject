<div style="background: #f5f5f5;">
<div class="container py-3">
	<div class="row py-4" style="background: #2e2e54; color: #ffffff;">
		<div class="col-sm-1">ID</div>
		<div class="col-sm-1">Image</div>
		<div class="col-sm-6">Name</div>
		<div class="col-sm-2">Price</div>
		<div class="col-sm-1">Quantity</div>
		<div class="col-sm-1">Actions</div>
	</div><br>


<?php

		$sql = "SELECT * FROM product";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {

?>
		
		<div class="row my-2 py-2" id="pro_<?php echo $row["id"] ?>" style="background: #ffffff;" >			
				<div class="col-sm-1" style="color: #2e2e54; font-size: 20px;"><?php echo $row["id"] ?></div>		 
				<div class="col-sm-1">
							<img src="<?php echo $row["image_path"] ?>" style="width: 50px; height: 50px; line-height: 50px;"/>
				</div>					
				<div class="col-sm-6"><?php echo $row["name"] ?></div>

				<div class="col-sm-2" style="color: #f57224; font-weight: bold;">Rs. <?php echo $row["price"] ?> /-</div>
				<div class="col-sm-1"><?php echo $row["quantity"] ?></div>
				<div class="col-sm-1" style="">
					<form method="get" action="admin_update_product.php">								
						<button type="submit" name="update" value="<?php echo $row["id"]?>" style="border:none; margin-right: 5px;background: #ffffff;">
						    <i class="fa fa-pencil" style="color:#007bff;"></i> 						    		
						</button>
					</form>					
					

					<form method="post"> 
					    <button type="submit" name="remove" value="<?php echo $row["id"]?>" style="border:none;background: #ffffff;">
					    <i class="fa fa-trash" style="color:#dc3545;"></i>
					    </button>
					</form> 
				</div>
		</div>
			

<?php

		}
		} else {
		   echo "0 results";
		}

?>

	


<?php

		if($_SERVER["REQUEST_METHOD"]=="POST")
  		{
  			$remove = $_POST["remove"];

			$sql = "  DELETE FROM product
				     WHERE id = $remove ;";

			$conn->query($sql );

			echo "<script> window.location.replace('admin_panel.php'); </script>";
		}
?>			

</div>
</div>
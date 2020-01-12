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
<body >
     
    <?php require_once "mysqli_connect.php"; ?>
    <?php require_once "top_bar.php"; ?>
    <?php require_once "header.php"; ?>

	<div style="background: #f5f5f5;">

    

			<div class="container-fluid py-3">
			        
			      <div class="clearfix">
			        <span class="float-left" style="color: #f57224; padding-left: 30px;"><h3>Update Product</h3></span>
			          <span class="float-right">              
			           
			          </span>
			      </div>
			    
			  </div>

<?php
    

    $flag = true;
    $fileUploadErr = "";


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $pro_name = $_POST["pro_name"];
        $pro_price = $_POST["pro_price"];
        $pro_quantity = $_POST["pro_quantity"];
        $pro_category = $_POST["pro_category"];

        if(empty($pro_name)){
                $flag = false;
            }
        if(empty($pro_price)){
                $flag = false;
            }
        if(empty($pro_quantity)){
                $flag = false;
            }
             
            if($flag == true)
            {
                                  
            $update_id = $_SESSION['update_pro_id'];

                    $sql = "
                            UPDATE product SET name = '$pro_name', price = $pro_price, quantity = $pro_quantity, category = $pro_category
                            WHERE id = $update_id;
                      ";                          

                    if ($conn->query($sql) === TRUE) {

                            echo "<script type='text/javascript'>alert('Success! Product updated. ');</script>";

                            echo "<script> window.location.replace('admin_panel.php'); </script>";

                    } 
                    else {

                        echo "Error during insertion" . $conn->error;
                    }
                         
                          

            }
            else {

                            echo " <div class='alert alert-danger'>
                            <strong>Failed!</strong> Invalid Entries.
                            </div>";

                  }

    }
    
?>



<?php

		if($_SERVER["REQUEST_METHOD"] == "GET"){

			$update_id = $_GET["update"];

      //session_start();
      $_SESSION['update_pro_id']= $update_id;

		$sql = "SELECT * FROM product WHERE id = $update_id";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

?>

<div id="wrapper" >
  <h3 class="text-center">Product Details</h3><br>
    <form action="admin_update_product.php" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php echo $row["name"] ?>">
          </div>

          <div class="form-group">
              <label>Price:</label>
              <input type="number" class="form-control" id="pro_price" name="pro_price" value="<?php echo $row["price"] ?>">
          </div>

          <div class="form-group">
              <label>Quantity: (max. 1000)</label>
              <input type="number" min="1" max="1000" class="form-control" id="pro_quantity" name="pro_quantity" value="<?php echo $row["quantity"] ?>">
          </div>

          <div class="form-group">
              <label>Category:</label> 


              <?php 
							$category = $row["category"];
							$sql2 = "SELECT name FROM category WHERE id=$category;";
							
							$result2 = $conn->query($sql2);								
							if($result2->num_rows>0)
							{
								while($row2 = $result2->fetch_assoc()) {

				?>

                  <select name="pro_category" class="custom-select mb-3">
                      
                      	  <option selected><?php echo $row2["name"];?></option>
                          <option value="1001">Electronic Devices</option>
                          <option value="1002">Electronic Accessories</option>
                          <option value="1003">TV & Home Appliances</option>
                          <option value="1004">Health & Beauty</option>
                          <option value="1005">Babies & Toys</option>
                          <option value="1006">Groceries & Pets</option>
                          <option value="1007">Home & Lifestyle</option>
                          <option value="1008">Womens Fashion</option>
                          <option value="1009">Mens Fashion</option>
                          <option value="1010">Watches, Bags & Jewelery</option>
                          <option value="1011">Sports & Outdoor</option>
                          <option value="1012">Automotive & Motorbike</option>

                  </select>



                  <?php 

								}

							}					
							
				?>
          </div>
                          
                        
        <button type="submit" class="btn btn-primary">Update</button>

  </form>

               
</div>


<?php

}
} 

else {
echo "0 results";
}

}

?>



<br>
<br>
</div>    
    <?php require_once "footer.php"; ?>
			
           
    </body>
</html>


<?php
}
?>
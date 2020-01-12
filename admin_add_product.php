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

    
 
<?php
    

    $flag = true;
    $fileUploadErr = "";


		if($_SERVER["REQUEST_METHOD"] == "POST"){

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
        
        
        if (empty($_FILES['fileToUpload']['name'])) {
            $fileUploadErr = " *Choose an image. !";
            $flag = false;
        }

        if($flag == true)
        {
                $target_dir = "images/pro_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


          			$sql = "
          			INSERT INTO product(name,price,quantity,image_path,category)
          			VALUES ('$pro_name' ,$pro_price ,$pro_quantity ,'$target_file',$pro_category);
          				";		

          			if ($conn->query($sql) === TRUE) {
          			} else {
          			    echo "Error during insertion" . $conn->error;
          			}
                     
                      echo " <div class='alert alert-success'>
                              <strong>Success!</strong> Product added.
                              </div>";

        }
        else {

                        echo " <div class='alert alert-danger'>
                        <strong>Failed!</strong> Invalid Entries.
                        </div>";

              }

        		}
		
?>
    

<div class="container-fluid py-3">        
      <div class="clearfix">
        <span class="float-left" style="color: #f57224; padding-left: 30px;"><h3>Add Product</h3></span>
          <span class="float-right">                         
          </span>
      </div>   
</div>


<div id="wrapper">
  <h3 class="text-center">Product Details</h3><br>
    <form action="admin_add_product.php" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" id="pro_name" name="pro_name">
          </div>

          <div class="form-group">
              <label>Price:</label>
              <input type="number" class="form-control" id="pro_price" name="pro_price">
          </div>

          <div class="form-group">
              <label>Quantity: (max. 1000)</label>
              <input type="number" min="1" max="1000" class="form-control" id="pro_quantity" name="pro_quantity">
          </div>

          <div class="form-group">
              <label>Category:</label>        
                  <select name="pro_category" class="custom-select mb-3">
                      
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
          </div>
                                                  
         <div class="form-group">
                  <label>Image:</label><span id="errorSpan" style=""><?php echo $fileUploadErr; ?></span><br>
                        <div class="custom-file">
                            <input type="file" accept="image/png,image/jpeg" class="custom-file-input" name="fileToUpload">
                             <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>        
</div>
<br>
<br>
</div> 




    <?php require_once "footer.php"; ?>
			           
    </body>
</html>



<?php

    }

?>
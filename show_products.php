<div style="background: #f5f5f5;">
<div id="clear" style="clear: both;"></div>
<div class="container-fluid py-3" id="show-products" style="min-height: 700px;">
    
    <span style="font-size: 20px; float: left;">Just For You</span>
    <br><br><br>
    

<?php

        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

?>


<div class="card" style="width:189px; min-height: 189px; float: left; margin: 5px; border: none;">
    
    <img class="card-img-top" src="<?php echo $row["image_path"] ?>" alt="Card image" style="width:100%; height:190px;">
    <div class="card-body">        
        
        <a href="product_info.php?pro_id=<?php echo $row["id"] ?>" class="card-title stretched-link" 
        style="font-size: 14px;text-decoration: none;line-height: 20px;color: #212121;white-space: normal;
          display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;text-overflow: ellipsis;overflow: hidden;height: 60px;"><?php echo $row["name"] ?></a>

      <span class="card-text" style="color: #f57224; font-size: 16px; font-weight: bold; ">Rs. <?php echo $row["price"] ?> /-</span>
      
  </div>
</div>


<?php

          }
          } else {
          echo "0 results";
          }

?>


</div>

<div id="clear" style="clear: both;"></div>
</div>
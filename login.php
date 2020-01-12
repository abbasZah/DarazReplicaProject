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


<div class="container-fluid"  style="width: 810px; height: 450px; margin-left: auto;margin-right: auto; padding-top: 50px;">


			<div class="clearfix">
				<span class="float-left" style="color: #424242; "><h5>Welcome to Daraz! Please login.</h5></span>
					<span class="float-right" style="color: #757575; font-size: 12px;">	New member? 
						<a href="sign_up.php" style="color: #1a9cb7; font-size: 12px;" > Register</a> here.
					</span>
			</div>

<?php  

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$user_id = $_POST["user_id"];
			$user_password = $_POST["user_password"];

			$sql = "SELECT * FROM admin WHERE id='$user_id' AND password='$user_password';";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {

						echo " <div class='alert alert-success'>
						    <strong>Success!</strong> Logged in.
						  </div>";

						$_SESSION['admin_id']= $user_id;
						$_SESSION['admin_password']= $user_password;

						echo "<script> window.location.replace('admin_panel.php'); </script>";

				}
				} 
				else {

							$sql = "SELECT * FROM user WHERE id='$user_id' AND password='$user_password';";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {

							while($row = $result->fetch_assoc()) {

								echo " <div class='alert alert-success'>
										   <strong>Success!</strong> Logged in.
										  </div>";

								$_SESSION['user_id']= $user_id;
								$_SESSION['user_password']= $user_password;

								echo "<script> window.location.replace('index.php'); </script>";


								}
								} else {

								echo " <div class='alert alert-danger'>
								<strong>Failed!</strong> Invalid attempt.
								</div>";

								}
					}

		}

?>



<form action="login.php" method="post">
		<div class="row" style="background: #ffffff; height: 450px;">
			<div class="col-sm-7"  style="padding: 25px;" >	
					
					<span class="sign-up-span">Phone Number/Username*</span>
					<input type="text" name="user_id" class="sign-up-input" placeholder="Please enter your phone number or username" />
								
					<span class="sign-up-span">Password*</span>
					<input type="Password" name="user_password" class="sign-up-input" placeholder="Minimum 6 characters with a number and a letter" />
				
			</div>
			<div class="col-sm-5"  style="padding: 25px;">
					
				<button id="login_button" type="submit">Login</button>
			</div>
</form>			


		</div>
	</div>
<br>
<br>
</div>    

		<?php require_once "footer.php"; ?>

</body>
</html>
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
				<span class="float-left" style="color: #424242; "><h5>Create your Daraz Account</h5></span>
					<span class="float-right" style="color: #757575; font-size: 12px;">	Already member? 
						<a href="login.php" style="color: #1a9cb7; font-size: 12px;" > Login</a> here.
					</span>
			</div>

<?php  

$flag = true;

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$user_id = $_POST["user_id"];
			$user_password = $_POST["user_password"];
			$user_birthday = $_POST["user_birthday"];
			$user_gender = $_POST["user_gender"];
			$user_name = $_POST["user_name"];
			$user_email = $_POST["user_email"];


		if(empty($user_id)){
                $flag = false;
            }
        if(empty($user_password)){
                $flag = false;
            }
        if(empty($user_name)){
                $flag = false;
            }
        if(empty($user_email)){
                $flag = false;
            }
        if(! (isset( $_POST['user_gender'])) ){                
                $flag = false;
         	}
        if(empty($user_birthday)) {                
                $flag = false;
          	}


if($flag == true)
{
			$sql = "
		  			INSERT INTO user
		  			VALUES ('$user_id' ,'$user_password' ,'$user_name' ,'$user_gender' ,'$user_email','$user_birthday');
		  			";		

		  			if ($conn->query($sql) === TRUE) {
		  			} else {
		  			    echo "Error during insertion" . $conn->error;
		  			}
		             
		    echo " <div class='alert alert-success'>
		    <strong>Success!</strong> You are registered.
		  </div>";

}
else {

								echo " <div class='alert alert-danger'>
								<strong>Failed!</strong> Invalid Entries.
								</div>";

								}
	
		}



?>

<form action="sign_up.php" method="post">
		<div class="row" style="background: #ffffff; height: 450px;">
			<div class="col-sm-7"  style="padding: 25px;">	
					
					<span class="sign-up-span">Phone Number/Username*</span>
					<input type="text" name="user_id" class="sign-up-input" placeholder="Please enter your phone number or username" />
								
					<span class="sign-up-span">Password*</span>
					<input type="Password" name="user_password" class="sign-up-input" placeholder="Minimum 6 characters with a number and a letter" />
				
					<div class="row">
						<div class="col-sm-8">
							<span class="sign-up-span">Birthday*</span>
							<input type="date" name="user_birthday" class="sign-up-input"/>
						</div>
						<div class="col-sm-4">
							<span class="sign-up-span">Gender*</span>
								<select name="user_gender" class="sign-up-input">
									
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>					
						</div>
					</div>
												
			</div>
			<div class="col-sm-5" style="padding: 25px;">
					
				<span class="sign-up-span">Full Name*</span>
					<input type="text" name="user_name" class="sign-up-input" placeholder="Enter your first and last name." />	
					
				<span class="sign-up-span">Email Address*</span>
					<input type="email" name="user_email" class="sign-up-input" placeholder="Please enter your email" />	


				<button id="sign_up_button" type="submit">Sign Up</button>
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
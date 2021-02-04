<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave1.png">
	<div class="container">
		<div class="img">
			<img src="—Pngtree—mbe weather cartoon icon element_4049972.png">
		</div>
		<div class="login-content">
			<form method="post">
				<h2 class="title">Register</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input id="text" type="text" class="input" placeholder="Username" name="user_name">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i"> 
           		    	<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="email" class="input" placeholder="Email">
				   </div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<input id="text" type="password" class="input" placeholder="Password" name="password">
					</div>
				</div>
				<input type="submit" class="btn" value="Register">
				<a class="register" href="login.php">Exsisting User?Login.</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

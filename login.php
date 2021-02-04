<?php 

session_start();

	include("connection.php");
	include("functions.php");
	$error="";


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password && $user_data['user_name'] === $user_name)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: indexweb.php");
						die;
					}
					else
					{
						$error = "<p align='center'><font color=red> wrong username or password! </font></p>";
					}
				}else
				{
					$error = "<p align='center'><font color=red> wrong username or password! </font></p>";
				}
			}else{
				$error = "<p align='center'><font color=red> wrong username or password! </font></p>";
			}
		}else
		{
			$error = "<p align='center'><font color=red> wrong username or password! </font></p>";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input id="text" type="text" class="input" placeholder="Username" name="user_name">
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
				<?php echo $error; ?>
				<input type="submit" class="btn" value="Login">
				<a class="register" href="register.php">New User?Register.</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="javascript.js"></script>
</body>
</html>

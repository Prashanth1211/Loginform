<?php 
session_start();

	include("connection.php");
    include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Homepage</title>
</head>
<body>
    <div class="navbar">
        <li class="nav_link"><a href="index.php">Home</a></li>
        <li class="nav_link"><a href="login.php">login</a></li>
        <li class="nav_link"><a href="register.php">register</a></li>
    </div>
    <div class="hero_section">
        <div class="hero_section_content">
            <h1>Welcome</h1>
            <h3>Weather of the world</h3>
            <hr>
            <p>Weather is the day-to-day state of atmosphere and pertains to short term changes in conditions of heat, moisture and air movement. Weather results from processes that attempt to equalise the differences in the distribution of net radiant energy from sun. In other words, the instantaneous state of atmosphere can be called as weather. It is usually expressed as fine, fair, foggy, cloudy, rainy, sunny or windy weather.</p>
            <button class="btn btn1" onclick="myfunction1()">Register</button>
            <button class="btn btn2" onclick="myfunction2()">Login</button>
        </div>
        <div class="hero_section_img">
            <img src="logo_white_cropped.png" alt="">
        </div>
    </div>
    <script>
        function myfunction1(){
            window.location.href="register.php";
        }
        function myfunction2(){
            window.location.href="login.php";
        }
    </script>
</body>
</html>
<?php 
session_start();

	include("connection.php");
  include("functions.php");
  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather App</title>
  <link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>" />
</head>
<body>
  <div class="app-wrap">
    <div class="navigation">
      <li class="nav_link"><a href="logout.php">Logout</a></li>
      <li class="nav_link">Hello,<?php echo $user_data['user_name']; ?></li>
    </div>
    <header>
      <input type="text" autocomplete="off" class="search-box" placeholder="Search for a city..." />
    </header>
    <main>
      <section class="location">
        <div class="city">New York, US</div>
        <div class="date">Monday 31 August 2020</div>
      </section>
      <div class="current">
        <div class="temp">15<span>°c</span></div>
        <div class="weather">Sunny</div>
        <div class="hi-low">13°c / 16°c</div>
      </div>
    </main>
  </div>
  <script src="main.js"></script>
</body>
</html>
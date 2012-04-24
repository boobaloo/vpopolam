<!DOCTYPE html>
<html>
<head>
<?php include ('../includes/en/head.php'); ?>
"); ?>
Ссылки</title>
</head>
<body class="bodystyle">
<?php include_once("../includes/ganalytics.php") ?>
<div id="container">
<!-- Навигация -->
 <div id="header">
  <a href="index.php" id="logo"><span>На главную</span></a>
<?php include("../includes/en/navigation.php"); ?>
  </div>
<!-- Навигация -->
  
<div id="content">
<p class="default">
</br></br><?php echo str_repeat("-",60); ?></br>Unfortunately, we have nothing at this URL. Please, use the navigation bar at the top of the page to reach existed destinations.
</br><?php echo str_repeat("-",60); ?></br>
<a href="/index.php">Go to the mainpage</a></br><?php echo str_repeat("-",60); ?></p>
</div>
  
<?php include("../includes/en/footer.php"); ?>
</div>
</body>
</html>

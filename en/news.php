<!DOCTYPE html>
<html>
<head>
<?php include('../includes/en/head.php'); ?>
News</title>
</head>

<body class="bodystyle">
<?php include_once("../includes/ganalytics.php") ?>
    
<div id="container">
<!-- Navigation -->
 <div id="header">
  <a href="index.php" id="logo"><span>To mainpage</span></a>
<?php include('../includes/en/navigation.php'); ?>
  </div>
<!-- Navigation -->
  
  <div id="content">
  <h1>Fresh news from our band:</h1>
<p class="news"><?php echo str_repeat("-",60); ?></br>
There are no news at the moment. But soon this will change!</br>
<?php echo str_repeat("-",60); ?> 

</p>
  </div>

<?php include("../includes/en/footer.php"); ?>
</div>
</body>
</html>

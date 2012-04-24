<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Ссылки</title>
</head>
<body class="bodystyle">
<?php include_once("includes/ganalytics.php") ?>
<div id="container">
<!-- Навигация -->
 <div id="header">
  <a href="index.php" id="logo"><span>На главную</span></a>
<?php include("includes/navigation.php"); ?>
  </div>
<!-- Навигация -->
  
<div id="content">
<p class="default">
</br></br><?php echo str_repeat("-",60); ?></br>К сожалению, по такому адресу ничего нет. Используйте ссылки вверху страницы, чтобы попасть в интересующий вас раздел.
</br><?php echo str_repeat("-",60); ?></br>
<a href="/index.php">Перейти на главную страницу</a></br><?php echo str_repeat("-",60); ?></p>
</div>
  
<?php include("includes/footer.php"); ?>
</div>
</body>
</html>

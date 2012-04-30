<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Новости</title>
</head>

<body class="bodystyle">
<?php include_once("includes/ganalytics.php") ?>

<div id="container">
<!-- Навигация -->
 <div id="header">
  <a href="index.php" id="logo"><span>На главную</span></a>
<?php $b = 'active'; ?>
<?php include("includes/navigation.php"); ?>
  </div>
<!-- Навигация -->
  
  <div id="content">
  <h1>Свежие новости от нашей группы:</h1>
<p class="news"><?php echo str_repeat("-",60); ?></br>
    8 мая наш мини-альбом выходит на нетлейбле <a href="http://blocsonic.com" title="blocSonic" />blocSonic</a> - отличном ресурсе с великолепными релизами, расположенным в штате Мэн, США. Мы рады, что наша музыка нравится людям не только в России!</br>
<?php echo str_repeat("-",60); ?>

</p>
  </div>

<?php include("includes/footer.php"); ?>
</div>
</body>
</html>

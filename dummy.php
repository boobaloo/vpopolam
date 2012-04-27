<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
<title>Впополам &mdash; антигламурный шансон-кор ансамбль &mdash; Новости</title>
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

<?php
$total_articles_number = 79;   //общее количество статей
$articles_per_page=10; // количество статей на странице
//получаем количество страниц
$total_pages = ceil($total_articles_number/$articles_per_page);

// запускаем цикл - количество итераций равно количеству страниц
for ($i=0; $i<$total_pages; $i++){
// получаем значение $from (как $page_number) 
//для использования в формировании ссылки
$page_number=$i*$articles_per_page;
// если $page_number (фактически это проверка того является ли $from текущим) 
//не соответствует текущей странице,
// выводим ссылку на страницу со значением $from равным $page_number
if ($page_number!=$from) echo 
"<a href='".$PHP_SELF."?from=".$page_number."'> ".($i+1)." </a>";
// иначе просто выводим номер страницы - данная строка необязательна,
// пропустив ее вы просто получите линк на текущую страницу
else echo $i+1; 
// если page_number - текущая страница - ничего не выводим (ссылку не делаем)
}
?>

  </div>



</div>
</body>
</html>

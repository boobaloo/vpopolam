<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Dummy</title>
</head>

<body class="bodystyle">
<?php include_once("includes/ganalytics.php") ?>

<div id="container">
<!-- Навигация -->
 <div id="header">
  <a href="index.php" id="logo"><span>На главную</span></a>
<?php $page= basename(__FILE__); include("includes/navigation.php"); ?>
  </div>
<!-- Навигация -->
  
  <div id="content">


<?php
// Чтение и вывод новостей из файла news.txt
$fp = fopen('news.txt','r');
if (!$fp) {echo 'ERROR: Unable to open file.'; exit;}
$loop = 0;
while (!feof($fp)) {
$loop++;
$line = fgets($fp, 1024); //use 2048 if very long lines
$field[$loop] = explode ('<->', $line); // Delimeter is <->

if ($field[$loop][0]!=='') {
echo  
    '<p class="news">'.$field[$loop][0].'<br>'.str_repeat("-",60).'</p>';
    $total_articles_number++; //общее количество статей  

$fp++;}
}
fclose($fp);
// Разбивка на страницы

echo $total_articles_number;
$articles_per_page=5; // количество статей на странице
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

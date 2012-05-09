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

<h1>Новости от "Впополам":</h1>
<?php

//Read the news.txt

$fp = fopen('news.txt','r');
if (!$fp) {echo 'Ошибка: Не могу открыть файл.'; exit;}
$loop = 0;
while (!feof($fp)) {
$loop++;
$line = fgets($fp, 1024); //use 2048 if very long lines
$field[$loop] = explode ('<->', $line); // Delimiter is <->
$fp++;}
fclose($fp);

//Begin pagination and output

        // Include the pagination class
        include 'includes/pagination.php';
        
        // If we have an array with items
        if (count($field)) {
          // Create the pagination object
          $pagination = new pagination($field, (isset($_GET['page']) ? $_GET['page'] : 1), 9);
          // Decide if the first and last links should show
          $pagination->setShowFirstAndLast(true);
          // You can overwrite the default seperator
          $pagination->setMainSeperator(' | ');
          // Parse through the pagination class
          $productPages = $pagination->getResults();
          // If we have items 
          if (count($productPages) != 0) {
            // Create the page numbers
            $pageNumbers = '<div class="numbers">'.$pagination->getLinks($_GET).'</div>';
            // Loop through all the items in the array
            foreach ($productPages as $productArray) {
              // Show the information about the item
                 if ($productArray[0] !== '') {
              echo '<div class="news_wrapper"><p class="news">'.$productArray[0].'<br></p></div>';
                  }
            }
            // print out the page numbers beneath the results
            echo $pageNumbers;
          }
        }

?>

</div>
</div>
</body>
</html>
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
<?php $page=basename(__FILE__); include("../includes/en/navigation.php"); ?>
  </div>
<!-- Navigation -->
  
  <div id="content">
  <h1><a href="http://www.feed43.com/vpopolam.xml"><img src="http://dl.dropbox.com/u/939165/rss.png" alt="RSS Icon" title="Vpopolam's News Channel" /></a>Some news from "Vpopolam":</h1>
<?php

//Read the news.txt

$fp = fopen('news_en.txt','r');
if (!$fp) {echo 'Error: Couldn\'t open file!'; exit;}
$loop = 0;
while (!feof($fp)) {
$loop++;
$line = fgets($fp, 1024); //use 2048 if very long lines
$field[$loop] = explode ('<->', $line); // Delimiter is <->
$fp++;}
fclose($fp);

//Begin pagination and output

        // Include the pagination class
        include '../includes/pagination.php';
        
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

<?php include("../includes/en/footer.php"); ?>
</div>
</body>
</html>

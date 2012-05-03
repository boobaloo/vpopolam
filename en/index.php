<!DOCTYPE html>
<html>
<head>
<?php include('../includes/en/head.php'); ?>
Mainpage</title>
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
    <h1>"Vpopolam" is:</h1>
    
    <div class="avatars">
    
        <div id="description1">
        	<div class="avatar"><img src="../image/batman.jpg" title="Oleg" alt="Oleg Koptev" /></div>
        		<div class="descr1" id="descr1">
<span class="quit">&nbsp;</span>
<p>Oleg Koptev - bassist, sometime-vocalist.</p>
     			</div>
     	  </div>
        
        <div id="description2">
          <div class="avatar"><img src="../image/valuev.jpg" title="Misha" alt="Misha Leonov" /></div>
            <div class="descr2" id="descr2">
<span class="quit">&nbsp;</span>
<p>Mihail Leonov - leader of the band. Guitarist and vocalist.</p>
            </div>
        </div> 
             
        <div id="description3">
          <div class="avatar"><img src="../image/rambo.jpg" title="Vova" alt="Vova Kozlovski" /></div>
             <div class="descr3" id="descr3">
<span class="quit">&nbsp;</span>
<p>Vladimir Kozlovski - our great drummer.</p>
             </div>
        </div>
        
    </div>
</div>
  
<?php include("../includes/en/footer.php"); ?>
</div>
<div id="nojs">For comfort viewing of vpopolam.ru JavaScript is highly recommended. Please, turn it on, and <a href="">refresh the page</a>. &nbsp; <a href="#nojs" title="Hide">&lt;X&gt;</a></div>
<script>
//if script enabled warning message hidden.
document.getElementById('nojs').style.display="none";
</script>
</body>
</html>

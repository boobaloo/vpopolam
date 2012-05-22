<!DOCTYPE html>
<html>
<head>
<?php include('../includes/en/head.php'); ?>
Contacts</title>
</head>

<body class="bodystyle">
<?php include_once("../includes/ganalytics.php") ?>
<div id="container">

<!-- Navigation -->
 <div id="header">
  <a href="index.php" id="logo"><span>To main page</span></a>
<?php $page=basename(__FILE__); include("../includes/en/navigation.php"); ?>
  </div>
<!-- Navigation -->
  
  <div id="content">
<h1>You can contact us in many ways:</h1>
<p class="default">Through feedback form <a id="displayText" href="javascript:toggle();">&lt;show&gt;</a></p> 
<div id="toggleText" style="display: none"><?php include("../includes/en/feedback.php"); ?></div>


<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "&lt;show&gt;";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "&lt;hide&gt;";
	}
} 
</script>
<ul class="contacts">
<li><a href="http://vk.com/club31846712" title="Вконтакте">* We are in "Vkontakte"</a></li>
<li><a href="https://www.facebook.com/vpopolam" title="Facebook">* We are on Facebook</a></li>
<li><a href="https://plus.google.com/u/0/b/108117631350330418130/" title="Google+">* We are on Google+</a></li>
<li><a href="https://twitter.com/#!/vpopolam" title="Twitter">* We are on Twitter</a></li>
</br>
<li>By phone: +7 &lt;952&gt; 965-31-98 &lt;Oleg&gt;</li>
</ul>
</div>
  
<?php include("../includes/en/footer.php"); ?>
</div>
</body>
</html>

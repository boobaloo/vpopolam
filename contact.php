<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Контакты</title>
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
<h1>Связаться с нами можно разными способами:</h1>
<p class="default">Через форму связи <a id="displayText" href="javascript:toggle();">&lt;показать&gt;</a></p> 
<div id="toggleText" style="display: none"><?php include("includes/feedback.php"); ?></div>


<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "&lt;показать&gt;";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "&lt;скрыть&gt;";
	}
} 
</script>
<ul class="contacts">
<li><a href="http://vk.com/vpopolamband" title="Вконтакте">* Наша группа "Вконтакте"</a></li>
<li><a href="https://www.facebook.com/vpopolam" title="Facebook">* Мы в Facebook</a></li>
<li><a href="https://plus.google.com/u/0/b/108117631350330418130/" title="Google+">* Мы в Google+</a></li>
<li><a href="https://twitter.com/#!/vpopolam" title="Twitter">* Мы в Twitter</a></li>
<li><a href="http://reverbnation.com/vpopolam" title="Reverbnation">* Мы на Reverbnation</a></li>
<li><a href="http://youtube.com/vpopolam" title="Youtube">* Наш канал на Youtube</a></li>
</br>
<li>По телефону: +7 <952> 965-31-98 <Олег></li>
</ul>
</div>
  
<?php include("includes/footer.php"); ?>
</div>
</body>
</html>

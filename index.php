<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Главная</title>
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
    <h1>"ВПОПОЛАМ" это:</h1>
    
    <div class="avatars">
    
        <div id="description1">
        	<div class="avatar"><img src="image/batman.jpg" title="Олег" alt="Олег Коптев" /></div>
        		<div class="descr1" id="descr1">
<span class="quit">&nbsp;</span>
<p>Олег Коптев - басит на басу, гундосит в микрофон на заднем плане. Характер уравновешенный.</p>
     			</div>
     	  </div>
        
        <div id="description2">
          <div class="avatar"><img src="image/valuev.jpg" title="Миша" alt="Миша Леонов" /></div>
            <div class="descr2" id="descr2">
<span class="quit">&nbsp;</span>
<p>Михаил Леонов - главный идеолог группы. Играет на шестиструнной гитаре &lt;в зависимости от обстоятельств способен исполнять на пятиструнной&gt;. Поёт ртом основные вокальные линии. Характер импульсивный.</p>
            </div>
        </div> 
             
        <div id="description3">
          <div class="avatar"><img src="image/rambo.jpg" title="Вова" alt="Вова Козловский" /></div>
             <div class="descr3" id="descr3">
<span class="quit">&nbsp;</span>
<p>Козловский Владимир - наш единственный и неповторимый барабанщик. Способен стучать сразу в несколько барабанов одновременно, что любит делать между песнями на репетициях группы. Немного обидчив, но быстроотходчив.</p>
             </div>
        </div>
        
    </div>
</div>
  
<?php include("includes/footer.php"); ?>
</div>
<div id="nojs">Для комфортного просмотра сайта vpopolam.ru рекомендуется включить JavaScript. Пожалуйста, включите JavaScript, затем <a href="">обновите страницу</a>. &nbsp; <a href="#nojs" title="Скрыть">&lt;X&gt;</a></div>
<script>
//if script enabled warning message hidden.
document.getElementById('nojs').style.display="none";
</script>
</body>
</html>
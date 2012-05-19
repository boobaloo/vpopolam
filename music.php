<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>
Музыка</title>
</head>
<body class="bodystyle">
<?php include_once("includes/ganalytics.php") ?>
<style type="text/css">
div#footer {margin-left: -13px;}
div.ywp-common-tooltip {display:none;}
</style>

<div id="container">

<!-- Навигация -->
 <div id="header">
  <a href="index.php" id="logo"><span>На главную</span></a>
<?php $page= basename(__FILE__); include("includes/navigation.php"); ?>
  </div>
<!-- Навигация -->

  <div id="content">
  <div id="music">
      <div class="cover"><a href="photo/cover_ru.jpg" rel="prettyPhoto[pp_gal]" title="Обложка"><img src="./image/cover_ru.png" alt="Обложка" /></a></div>
  <h1>Музыка</h1>
         <ul class="music_content">
            <li><a href="./audio/ne_parish.mp3" title="Не паришь">Не паришь</a></li>
	    <li><a href="./audio/natasha.mp3" title="Наташа">Наташа</a></li>
	    <li><a href="./audio/gop_stop.mp3" title="Гоп-стоп">Гоп-стоп</a></li>
            <li><a href="./audio/bespontovy.mp3" title="Беспонтовы">Беспонтовы</a></li>
            <li><a href="./audio/nishtyaki.mp3" title="Ништяки">Ништяки</a></li>
            <li><a href="./audio/dovesok.mp3" title="Довесок">Довесок</a></li>
            <li><a href="./audio/bespontovy_remix.mp3" title="Беспонтовы (ремикс) - спасибо Лексеичу!">Беспонтовы &lt;дискотека-ремикс&gt;</a></li>
            </br>
            <li><a href="http://blocsonic.com/releases/archiveclick/slug/blocsonic-maxbloc-bsmx0032--all-tracks-320kbs-mp3-includes-pdf-booklet" title="Альбом в формате MP3">Скачать альбом в MP3 &lt;320kbps&gt;+обложка+буклет</a><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0; margin-left: 10px;" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a></li>
            <li><a href="http://blocsonic.com/releases/archiveclick/slug/blocsonic-maxbloc-bsmx0032--all-tracks-ogg-includes-pdf-booklet" title="Альбом в формате OGG">Скачать альбом в OGG+обложка+буклет</a><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0; margin-left: 10px;" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a></li> 
            <li><a href="http://blocsonic.com/releases/archiveclick/slug/blocsonic-maxbloc-bsmx0032--all-tracks-flac-includes-pdf-booklet" title="Альбом в lossless-формате FLAC (около 170 Мб)">Скачать альбом в FLAC+обложка+буклет</a><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0; margin-left: 10px;" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a></li> 
         </ul>
<div id="photo">
    <h1>Фотографии</h1>
    <a href="photo/photo_1.jpg" rel="prettyPhoto[pp_gal]" title="Рука и бас"><img src="photo/thumbs/thumb_1.jpg" width="64" height="64" alt="Олег" /></a>
    <a href="photo/photo_2.jpg" rel="prettyPhoto[pp_gal]" title="Запись бэк-вокала"><img src="photo/thumbs/thumb_2.jpg" width="64" height="64" alt="Олтугеза" /></a>
    <a href="photo/photo_3.jpg" rel="prettyPhoto[pp_gal]" title="В перерывах между записью"><img src="photo/thumbs/thumb_3.jpg" width="64" height="64" alt="Изгиб гитары жопой" /></a>
    <a href="photo/photo_4.jpg" rel="prettyPhoto[pp_gal]" title="That's OK"><img src="photo/thumbs/thumb_4.jpg" width="64" height="64" alt="Миша доволен материалом" /></a>
    <a href="photo/photo_5.jpg" rel="prettyPhoto[pp_gal]" title="Студийная собака"><img src="photo/thumbs/thumb_5.jpg" width="64" height="64" alt="Большеголовый" /></a>
    <a href="photo/photo_6.jpg" rel="prettyPhoto[pp_gal]" title="Юра следит за процессом"><img src="photo/thumbs/thumb_6.jpg" width="64" height="64" alt="Юра Плетнёв - звукореж" /></a>
</div>

<div id="video">
<h1>Видеозаписи</h1>
<a href="https://www.youtube.com/watch?v=lv0QlKiBCGE" rel="prettyPhoto" title="Песня про Наташу"><img src="photo/thumbs/youtube_natasha.jpg" alt="Из архивов группы" width="128" /></a>

</div>
  
<?php include("includes/footer.php"); ?>
</div>

<!-- Yahoo webplayer -->
<script type="text/javascript">
    var YWPParams = 
    {
        autoplay: false,
        displaystate: 1,
        volume: 0.5,
    };
</script>
<script type="text/javascript" src="http://webplayer.yahooapis.com/player.js"></script> 
<!-- Yahoo webplayer -->
<!-- JQuery Pretty Photo -->
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
<!-- JQuery Pretty Photo -->
</body>
</html>

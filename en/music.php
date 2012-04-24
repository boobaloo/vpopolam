<!DOCTYPE html>
<html>
<head>
<?php include("../includes/en/head.php"); ?>
Музыка</title>
</head>
<body class="bodystyle">
<?php include_once("../includes/ganalytics.php") ?>
<style type="text/css">
div#footer {margin-left: -13px;}
div.ywp-common-tooltip {display:none;}
</style>

<div id="container">

<!-- Navigation -->
 <div id="header">
  <a href="index.php" id="logo"><span>To the mainpage</span></a>
<?php include("../includes/en/navigation.php"); ?>
  </div>
<!-- Navigation -->

  <div id="content">
  <div id="music">
  <h1>Music</h1>
         <ul class="music_content">
            <li><a href="../audio/ne_parish.mp3" title="Ne parish">Ne parish</a></li>
				<li><a href="../audio/natasha.mp3" title="Natasha">Natasha</a></li>
				<li><a href="../audio/gop_stop.mp3" title="Gop-Stop">Gop-Stop</a></li>
            <li><a href="../audio/bespontovy.mp3" title="Bespontovy">Bespontovy</a></li>
            <li><a href="../audio/nishtyaki.mp3" title="Nishtyaki">Nishtyaki</a></li>
            <li><a href="../audio/dovesok.mp3" title="Dovesok(outro)">Dovesok &lt;outro&gt;</a></li>
            <li><a href="../audio/bespontovy_remix.mp3" title="Bespontovy(remix)">Bespontovy &lt;dance-remix&gt;</a></li>
            </br>
            <li><a href="../audio/vpopolam_gryaznyj_albom.zip" title="Full album in MP3 (about 30 Mb)">Download full album in MP3</a></li>
            <li><a href="http://depositfiles.com/files/71sskpvhd" title="Full album in lossless-format FLAC (about 130 Mb)">Download full album in FLAC &lt;depositfiles&gt;</a></li>          
         </ul>
<div id="photo">
<h1>Photos</h1>
<a href="../photo/photo_1.jpg" rel="prettyPhoto[pp_gal]" title="Hand on bass"><img src="../photo/thumbs/thumb_1.jpg" width="64" height="64" alt="Oleg" /></a>
<a href="../photo/photo_2.jpg" rel="prettyPhoto[pp_gal]" title="Back vocal recording"><img src="../photo/thumbs/thumb_2.jpg" width="64" height="64" alt="All together" /></a>
<a href="../photo/photo_3.jpg" rel="prettyPhoto[pp_gal]" title="Between recordings"><img src="../photo/thumbs/thumb_3.jpg" width="64" height="64" alt="Relaxing" /></a>
<a href="../photo/photo_4.jpg" rel="prettyPhoto[pp_gal]" title="That's OK"><img src="../photo/thumbs/thumb_4.jpg" width="64" height="64" alt="Misha is glad" /></a>
<a href="../photo/photo_5.jpg" rel="prettyPhoto[pp_gal]" title="Studio dog"><img src="../photo/thumbs/thumb_5.jpg" width="64" height="64" alt="Bighead" /></a>
<a href="../photo/photo_6.jpg" rel="prettyPhoto[pp_gal]" title="Yura watches the process"><img src="../photo/thumbs/thumb_6.jpg" width="64" height="64" alt="Yuriy Pletnev - sound man" /></a>

</div>

<div id="video">
<h1>Videos</h1>
<a href="https://www.youtube.com/watch?v=lv0QlKiBCGE" rel="prettyPhoto" title="Natasha"><img src="../photo/thumbs/youtube_natasha.jpg" alt="From old recordings" width="128" /></a>

</div>
  
<?php include("../includes/en/footer.php"); ?>
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

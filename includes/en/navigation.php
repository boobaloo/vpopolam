<span class="lang"><a href="../<?php echo basename ( $_SERVER['PHP_SELF']); ?>" title="Русская версия"><?php echo str_repeat('&gt;', 32); ?>ПО-РУССКИ<?php echo str_repeat('&lt;', 32); ?></a></span>

<div id="main_nav">
      <ul class="navigation">
        <li <?php if($page=="index.php"){echo "class=\"active\"";} ?> ><a href="index" title="Main page">Main</a></li>
        <li <?php if($page=="news.php"){echo "class=\"active\"";} ?> ><a href="news" title="News">News</a></li>
        <li <?php if($page=="music.php"){echo "class=\"active\"";} ?> ><a href="music" title="Music/photo/video">Media</a></li>
        <li <?php if($page=="contact.php"){echo "class=\"active\"";} ?> ><a href="contact" title="Contacts">Contacts</a></li>
        <li <?php if($page=="links.php"){echo "class=\"active\"";} ?> ><a href="links" title="Links">Links</a></li>
      </ul>
</div>
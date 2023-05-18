<aside class="site__aside">
<h3>Menu secondaire</h3>
<?php

$menu = "note-4w4";
if(in_category('cours')){$menu = "cours";}

// $menu peut prendre les veleurd de 4W4 ou cours.
echo $menu;
wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav"
)) ?>

<div class="sidebar">
    <?php dynamic_sidebar( 'sidebar1' ); ?>
</div>
</aside>

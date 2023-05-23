<aside class="site__aside">
<h3>Nos ateliers en 2023</h3>
<?php

$menu = "note-4w4";
if(in_category('cours')){$menu = "cours";}

// $menu peut prendre les veleurd de 4W4 ou cours.

wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav"
)) ?>

<div class="sidebar">

</div>
</aside>

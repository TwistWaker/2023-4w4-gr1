<footer class="site__footer">


<section class="footer_col">
<div class="sidebar">
    <?php dynamic_sidebar( 'footer1' ); ?>
</div>


<div class="sidebar">
    <?php dynamic_sidebar( 'footer2' ); ?>
</div>


<div class="sidebar">
    <?php dynamic_sidebar( 'footer3' ); ?>
</div>
</section>


<div>
    <?php //afficher le logo en fond de page. ?>
<section class="site_footer_logo">
 <?php the_custom_logo(); ?>
 <nav class="footer1">
<h5>Plus ici!</h5>
 <?php wp_nav_menu(array(
    "menu" => "footer1",
    "container" => "nav",
    "container_class" => "menu__footer", )); ?>
</nav>
 </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>

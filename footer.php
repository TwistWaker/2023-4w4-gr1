<footer class="site__footer">


<section class="site_footer_logo">
 <?php the_custom_logo(); ?>
 <nav class="footer1">
<h5>Plus ici!</h5>
 <?php wp_nav_menu(array(
    "menu" => "footer1",
    "container" => "nav",
    "container_class" => "menu__footer", )); ?>
</nav>
<nav class="footer2">
</nav>
</section>  

</footer>
<?php wp_footer(); ?>
</body>
</html>

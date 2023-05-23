<?php  
/*
template name: evenement

*/
?>

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('small') ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<section class="tableau">
<section class="tableau"><p>Date </section>  <section class = "fintableau"><?php the_field('date_de_latelier'); ?></section></p>
<section class="tableau"><p>heure </section>  <section class = "fintableau"><?php the_field('heure'); ?></section></p>     
<section class="tableau"><p>Durée </section>  <section class = "fintableau"><?php the_field('duree'); ?> Heures</section></p>     
<section class="tableau"><p>Local </section>  <section class = "fintableau"><?php the_field('local'); ?></section></p>     
<section class="tableau"><p>formateur </section>  <section class = "fintableau"><?php the_field('formateur'); ?></section></p>
</section>  
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
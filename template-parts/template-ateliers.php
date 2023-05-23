<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('small') ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Date <?php the_field('date_de_latelier'); ?></p>
<p>heure <?php the_field('heure'); ?></p>     
<p>Durée <?php the_field('duree'); ?> Heures</p>     
<p>Local <?php the_field('local'); ?></p>     
<p>formateur <?php the_field('formateur'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
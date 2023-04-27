<?php /**
 *  single.php est le model par défaut qui affiche un article
 * ne pas oublier les ; a la fin
 *  */ ?>

<?php get_header(); ?>

<main class="site__main">
    <pre>single.php</pre>
    <h1>bienvenue sur 4w4</h1>

<?php if(have_posts()):
        while(have_posts()): the_post(); ?>
        <article class = "article__single">
        
  <h3> <?php the_post_thumbnail('thumbnail'); ?> <?php the_title(); ?></h3></a>
    <?php the_content(); ?>
 

        </article>
        <?php endwhile; ?>
       <?php endif;?>

</main>
    <?php get_footer(); ?>
</body>
</html>
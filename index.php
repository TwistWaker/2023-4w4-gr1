<?php /**
 *  index.php est le model par défaut deu thème 4w4
 * ne pas oublier les ; a la fin
 *  */ ?>

<?php get_header(); ?>

<main class="site__main">
    <h1>bienvenue au TIM 2023</h1>


    <?php 
    // ajouter des post.
    if(have_posts()):
        while(have_posts()):
            the_post(); // extrait un objet <<post>>?>
            <article>
           <h3> <?php the_title();// affiche le titre du post. ?></h3>
           <h6> Extrait : </h6> <?php the_excerpt(); ?> 
           <h6> Le contenu : </h6> <?php the_content(); ?>
           </article>
        <?php endwhile; ?>
        <?php endif; ?>

</main>
    <?php get_footer(); ?>
</body>
</html>
<?php /**
 *  category.php est le model par défaut pour afficher une archive d'articles
 * ne pas oublier les ; a la fin
 * 
 * htps:localhost:8000/4w4gr1/category/cours/
 * htps:localhost:8000/4w4gr1/category/notes-4w4/
 *  */ ?>

<?php get_header(); ?>



<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      // creation d'une nouvelle requete
      $query = new WP_Query( $args );
      // toute le reste de l'extraction de données est basée sur la nouvelle
      //requete de contenue dans le $query
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); 
         get_template_part("template-parts/categorie", $category->slug);
 ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
    <?php get_footer(); ?>
</body>
</html>
<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */

?>

<?php get_header(); ?>
    <main class="error" >
    
        <h1>Erreur 404</h1>
        <h3>Désoler, nous ne pouvons pas trouvé la page que vous chercher.
            essayer une recherche?</h3>
            
    <?php get_search_form()?>

    <h3>voici nos choix de cours</h3>
  <article> <h4><?php  $menu = "cours";
if(in_category('cours')){$menu = "note-4w4";}

wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav" 
)) ?></h4>
</article>
    <h3>voici les notes de cours</h3>
  <article> <h4><?php 

    
  
$menu = "note-4w4";
if(in_category('cours')){$menu = "cours";}

wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav" 
)) ?></h4>
  </article>

    </main>
    </body>
    <?php get_footer(); ?>
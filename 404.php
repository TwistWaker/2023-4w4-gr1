<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */

?>

<?php get_header(); ?>
<body class="site <?php echo(is_category() ? "no-aside" : "")?>">
    <main class="error" >
    
        <h1>Erreur 404</h1>
        <h3>Désoler, nous ne pouvons pas trouvé la page que vous chercher.
            essayer une recherche?</h3>
            
    <?php get_search_form()?>

    <h3>voici nos choix de cours</h3>
   <h5><?php  $menu = "cours";
if(in_category('cours')){$menu = "note-4w4";}

wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav" 
)) ?></h5>

    <h3>voici les notes de cours</h3>
  <h5><?php 
$menu = "note-4w4";
if(in_category('cours')){$menu = "cours";}

wp_nav_menu(array(
    "menu" => $menu,
    "container" => "nav" 
)) ?></h5>
  </article>

    </main>
    </body>
    <?php get_footer(); ?>


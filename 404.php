<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main" >
        <h1>Erreur 404</h1>
        <h3>Désoler, nous ne pouvons pas trouvé la page que vous chercher. voulez vous
            essayer une recherche?</h3>
            
                <?php get_search_form()?>
           
    </main>
    <?php get_footer(); ?>
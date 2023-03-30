<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
<body class="site <?php echo(is_404() ? "no-aside" : "")?>">
    <main class="site__main" >
    
        <h1>Erreur 404</h1>
        <h3>Désoler, nous ne pouvons pas trouvé la page que vous chercher. voulez vous
            essayer une recherche?</h3>
            
    <?php get_search_form()?>

    <h3>voici nos choix de cours</h3>
    <?php get_template_part("template-parts/categorie", "note-4w4"); ?>
    <h3>voici les notes de cours</h3>
    <?php get_template_part("template-parts/categorie", "cours"); ?>
    
    </main>
    </body>
    <?php get_footer(); ?>
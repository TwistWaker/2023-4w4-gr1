<?php 




?>

<?php 
wp_enqueue_style('4w4-gr1-principal', // identificateur
                    get_template_directory_uri() . '/styles.css', // adresse url de style.css
                    array(), //defenir les dépendances
                    filemtime(get_template_directory(). '/style.css'), // le calcul de la version du fichier
                    'all'); //meida
?>
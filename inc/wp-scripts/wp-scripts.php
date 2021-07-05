<?php

// <!-- Registro de: Hojas CSS, librerias y scripts  -->
function prefix_styles_scripts(){
    
    // Registro de Hoja de estilos CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array(  ), '1.0.0');

    // Habilitando iconos
    wp_enqueue_style( 'dashicons' );
    
    // Registro de fuentes
    wp_enqueue_style( 'f-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', array(), '1.0.0');
    wp_enqueue_style( 'f-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap', array(), '1.0.0');

    // Registro de archivo JS
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true);

}
add_action('wp_enqueue_scripts',  'prefix_styles_scripts');
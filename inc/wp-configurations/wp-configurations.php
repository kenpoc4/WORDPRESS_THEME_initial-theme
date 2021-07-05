<?php

// <!-- Configuraciones adicionales del theme  -->
function configuraciones_adicionales(){
    // habilitar imagen destacada
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // Estableciendo tamaño de images

}
add_action( 'after_setup_theme', 'configuraciones_adicionales');
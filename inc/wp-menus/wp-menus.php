<?php

// <!-- Registro de Menús  -->
function prefix_registro_menus(){
    register_nav_menus( array(
        'menu-principal'    =>  __('Menú Principal'),
    ) );
}
add_action( 'init', 'prefix_registro_menus');
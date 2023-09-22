<?php 

#link css

wp_enqueue_style('style', get_stylesheet_uri());

#habilitar menu do template

function createMenu(){
    register_nav_menu('menuSite',__('menu do Site'));
}

add_action('init','createMenu');

?>
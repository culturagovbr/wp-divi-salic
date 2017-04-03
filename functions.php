<?php
// adicionando css que faz a função do divi custom css (Carrega por último)
function divi_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom.css');
    wp_enqueue_style( 'alto-contraste', get_stylesheet_directory_uri() . '/alto-contraste.css');
    wp_enqueue_script( 'alto-contraste', get_stylesheet_directory_uri() . '/js/alto-contraste.js');
}

add_action( 'wp_head', 'divi_child_enqueue_styles' );

?>
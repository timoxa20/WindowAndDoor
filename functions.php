<?php
add_action('wp_enqueue_scripts', 'vitra_styles');
add_action('wp_enqueue_scripts', 'vitra_scripts');

function vitra_styles() {
    wp_enqueue_style( 'vitra-style', get_stylesheet_uri() );
};

function vitra_scripts() {
    wp_enqueue_script( 'vitra_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );


?>
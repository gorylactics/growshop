<?php
// css
    function fg_enqueue_style() { 
    $theme_data = wp_get_theme();

wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, null);

wp_enqueue_style( 'main' ); }
add_action( 'wp_enqueue_scripts', 'fg_enqueue_style' ); 

// js
    function fg_enqueue_scripts() {

    wp_register_script('scripts', get_parent_theme_file_uri('/js/script.js'), null,'1.0', true);
    wp_enqueue_script('scripts');
} 
    add_action('wp_enqueue_scripts', 'fg_enqueue_scripts');
?>
<?php
// css
    function fg_enqueue_style() { 
    $theme_data = wp_get_theme();

wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get('3.3.7'));
wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, null);

wp_enqueue_style( 'bootstrap_css' );
wp_enqueue_style( 'main' ); }
add_action( 'wp_enqueue_scripts', 'fg_enqueue_style' ); 

// js
    function fg_enqueue_scripts() {
    
    wp_register_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'),'3.3.7', true);
    wp_register_script('scripts', get_parent_theme_file_uri('/js/script.js'), null,'4.0', true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('scripts');
} 
    add_action('wp_enqueue_scripts', 'fg_enqueue_scripts');
?>


<?php
    function agregar_css_js(){
        
        wp_register_style('style' ,get_stylesheet_uri());
        wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', null, null);
        wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, null);

        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'bootstrap_css' );
        wp_enqueue_style( 'main' );

        wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'),'4.2', true);

    };
    add_action('wp_enqueue_scripts', 'agregar_css_js');

    ?>

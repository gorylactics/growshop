<?php
    function themeFoka_agregar_css_js(){
        
        wp_register_style('style' ,get_stylesheet_uri());
        wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', null, null);
        wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, null);

        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'bootstrap_css' );
        wp_enqueue_style( 'main' );

        wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'),'4.2', true);

    };
    add_action('wp_enqueue_scripts', 'themeFoka_agregar_css_js');

    // soporte de imagenes destacadas
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
       
     }

    function themeFoka_widgets(){

        register_sidebar(array(
            'id' => 'widgets-derecha',
            'name' => __('widget derecha'),
            'description' => __('arma el widget'),
            'before_widget' => '<div class="card-body">',
            'after_widget' => '</div>',
            'before_title' => '<h4>publicidad</h4>',
            'after_title' => '</h4><hr>'
        ));
    } 
        add_action('widgets_init', 'themeFoka_widgets');
    ?>

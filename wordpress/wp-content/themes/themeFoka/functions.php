<?php

    // Register Custom Navigation Walker
    require_once get_template_directory() . '/template-parts/navbar.php';

    function themeFoka_agregar_css_js(){
        
        wp_register_style('style' ,get_stylesheet_uri());
        wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', null, null);
        wp_register_style('main', get_parent_theme_file_uri('/assets/css/main.css'), null, null);

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
            'before_title' => '<h4>',
            'after_title' => '</h4><hr>'
        ));
    } 
        add_action('widgets_init', 'themeFoka_widgets');
    
    


        function themeFoka_register_my_menus() {
            register_nav_menus(
              array(
                'menu-principal' => __( 'Menu Principal GROW' ),
                
               )
             );
           }
           add_action( 'init', 'themeFoka_register_my_menus' );
    

           function ejr_limite_extracto ($longitud) {
            return 13;
        }
        add_filter ('excerpt_length', 'ejr_limite_extracto', 999);


        if ( ! function_exists('automaticas_post_type') ) {

// CPT feminizadas

if ( ! function_exists('feminizadas_post_type') ) {

    // Register Custom Post Type
    function feminizadas_post_type() {
    
        $labels = array(
            'name'                  => _x( 'feminizadas', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'feminizada', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'feminizadas', 'text_domain' ),
            'name_admin_bar'        => __( 'feminizadas', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'feminizada', 'text_domain' ),
            'description'           => __( 'general de feminizadas', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-aside',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'feminizadas', $args );
    
    }
    add_action( 'init', 'feminizadas_post_type', 0 );
    
    }

// CPT automaticas
            // Register Custom Post Type
            function automaticas_post_type() {
            
                $labels = array(
                    'name'                  => _x( 'automaticas', 'Post Type General Name', 'text_domain' ),
                    'singular_name'         => _x( 'automatica', 'Post Type Singular Name', 'text_domain' ),
                    'menu_name'             => __( 'automaticas', 'text_domain' ),
                    'name_admin_bar'        => __( 'automaticas', 'text_domain' ),
                    'archives'              => __( 'Item Archives', 'text_domain' ),
                    'attributes'            => __( 'Item Attributes', 'text_domain' ),
                    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                    'all_items'             => __( 'All Items', 'text_domain' ),
                    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                    'add_new'               => __( 'Add New', 'text_domain' ),
                    'new_item'              => __( 'New Item', 'text_domain' ),
                    'edit_item'             => __( 'Edit Item', 'text_domain' ),
                    'update_item'           => __( 'Update Item', 'text_domain' ),
                    'view_item'             => __( 'View Item', 'text_domain' ),
                    'view_items'            => __( 'View Items', 'text_domain' ),
                    'search_items'          => __( 'Search Item', 'text_domain' ),
                    'not_found'             => __( 'Not found', 'text_domain' ),
                    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                    'featured_image'        => __( 'Featured Image', 'text_domain' ),
                    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                    'items_list'            => __( 'Items list', 'text_domain' ),
                    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                );
                $args = array(
                    'label'                 => __( 'automatica', 'text_domain' ),
                    'description'           => __( 'semillas automaticas', 'text_domain' ),
                    'labels'                => $labels,
                    'supports'              => array( 'title', 'editor', 'thumbnail' ),
                    'taxonomies'            => array( 'category', 'post_tag' ),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-format-aside',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'page',
                );
                register_post_type( 'automaticas', $args );
            
            }
            add_action( 'init', 'automaticas_post_type', 0 );
            
            }
// CPT CBD

if ( ! function_exists('cbd_post_type') ) {

            // Register Custom Post Type
            function cbd_post_type() {
            
                $labels = array(
                    'name'                  => _x( 'cbds', 'Post Type General Name', 'text_domain' ),
                    'singular_name'         => _x( 'cbd', 'Post Type Singular Name', 'text_domain' ),
                    'menu_name'             => __( 'cbd', 'text_domain' ),
                    'name_admin_bar'        => __( 'cbd', 'text_domain' ),
                    'archives'              => __( 'Item Archives', 'text_domain' ),
                    'attributes'            => __( 'Item Attributes', 'text_domain' ),
                    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                    'all_items'             => __( 'All Items', 'text_domain' ),
                    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                    'add_new'               => __( 'Add New', 'text_domain' ),
                    'new_item'              => __( 'New Item', 'text_domain' ),
                    'edit_item'             => __( 'Edit Item', 'text_domain' ),
                    'update_item'           => __( 'Update Item', 'text_domain' ),
                    'view_item'             => __( 'View Item', 'text_domain' ),
                    'view_items'            => __( 'View Items', 'text_domain' ),
                    'search_items'          => __( 'Search Item', 'text_domain' ),
                    'not_found'             => __( 'Not found', 'text_domain' ),
                    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                    'featured_image'        => __( 'Featured Image', 'text_domain' ),
                    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                    'items_list'            => __( 'Items list', 'text_domain' ),
                    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                );
                $args = array(
                    'label'                 => __( 'cbd', 'text_domain' ),
                    'description'           => __( 'general de cbd', 'text_domain' ),
                    'labels'                => $labels,
                    'supports'              => array( 'title', 'editor', 'thumbnail' ),
                    'taxonomies'            => array( 'category', 'post_tag' ),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-format-aside',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'page',
                );
                register_post_type( 'cbd', $args );
            
            }
            add_action( 'init', 'cbd_post_type', 0 );
            
            }

?>

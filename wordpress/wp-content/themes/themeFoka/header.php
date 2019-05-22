<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>foca growshop</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> class="col-lg-4">
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <section class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php bloginfo('template_url')?>/assets/images/foca_sin_fondo.png" alt="logo" class="tamanodelogo" ></a>
	
            </a>
            <h2 class="col-lg-4" style="margin-left: 15%;">foca growshop</h2>  
            <button 
                class="navbar-toggler col-lg-4" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
            </button>
         
            <?php
		wp_nav_menu( array(
			'theme_location'    => 'menu-principal',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'navbarSupportedContent',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
        </section>
    </nav>
    <!--  /navbar -->



    <section class="container">
        <h2 class="my-5 text-center">MI BLOG PERSONAL</h2>
    </section>
  
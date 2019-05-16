<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>foca growshop</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <section class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php bloginfo('template_url')?>/foca_sin_fondo.png" alt="logo" class="tamanodelogo" ></a>
	
            </a>
            <h2>foca growshop</h2>  
            <button 
                class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
            </button>
                
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">           
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">SEMILLAS</a>
                    <a class="nav-item nav-link" href="#">CULTIVO</a>
                    <a class="nav-item nav-link" href="#">PARAFERNALIA</a>
                </div>
            </div> -->
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

    <!-- contenido -->
    
    <!-- galeria de destacados -->
    <!-- <div class="container" style="margin-top: 3rem; margin-button:5rem;"> 
            <div class="row">
                <div class="col-lg-6" style="background-color: red; width: 100% ; height: 50vh; padding: 0; margin:0;"></div>
                <div class="col-lg-3" style="background-color: purple; width: 100% ; height: 50vh; padding: 0; margin:0;">
                    <div class="col-lg-12 card" style="background-color: pink; height: 50%;"></div>
                    <div class="col-lg-12 card" style="background-color: orange; height: 50%;"></div>
                </div>
                    <div class="col-lg-3" style="background-color: purple; width: 100% ; height: 50vh; padding: 0; margin:0;">
                    <div class="col-lg-12 card" style="background-color: pink; height: 50%;"></div>
                    <div class="col-lg-12 card" style="background-color: orange; height: 50%;"></div>
                </div>
            </div>
        </div> 
    </div> -->
    <!-- /galeria de destacados -->

    <section class="container">
        <h2 class="my-5 text-center">MI BLOG PERSONAL</h2>
    </section>
  
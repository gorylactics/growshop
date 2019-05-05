<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-none barra">
	<a class="navbar-brand" href="#">
	<img src="<?php bloginfo('template_url')?>/assets/images/logos/foca_sin_fondo.png" alt="logo" class="logo"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SEMILLAS</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="semillas">FEMINIZADAS</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">AUTOMATICAS</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">ALGUN OTRO DATO</a>
				</div>
			</li>
		</ul>
	</div>

	<?php wp_nav_menu(array(
		'theme_location' => 'menuSuperior',
		'container' => 'div',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'navbarSupportedContent',
		'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>',
		'menu_class' => 'nav-item'
	)); ?>


</nav>


<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>
<?php get_header() ?>

<div class="row">
    <div class="col-lg-9">
<!-- entradas -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card-body">
        <a href="<?php the_permalink() ?>">
            <h2><?php the_title()?></h2>
        </a>
            <p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
            <p class="small mb-0">autor: <?php the_author(); ?></p>
            <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?>
            <p class="small mb-0">categoria: <?php the_category('/'); ?> 
        
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));}?>

                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>" class="btn btn-primary">ir al articulo</a>
    </div>
              
        
<?php endwhile; endif; ?>
<!-- /entradas -->

<!-- paginacion -->
    
        <div class="card-body">
            <?php get_template_part('template-parts/content', 'paginacion'); ?>
        </div>
    
<!-- /paginacion -->

             
</div>

<?php get_sidebar() ?>
<?php get_footer() ?>
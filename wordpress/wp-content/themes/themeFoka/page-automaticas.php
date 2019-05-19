<?php get_header() ?>

<div class="row">
    <div class="col-lg-12">
<!-- entradas -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="card-body entradas col-lg-4">
                <a href="<?php the_permalink() ?>">
                    <h2>
                        <?php the_title()?>
                    </h2>
                </a>
                <h6><p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                <p class="small mb-0">autor: <?php the_author(); ?></p>
                <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?>
                <p class="small mb-0">categoria: <?php the_category('/'); ?> </h6>
        
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));}?>
            <?php the_excerpt()?>
            <a href="<?php the_permalink()?>" class="btn btn-primary btn-block">ir al articulo
            </a>
        </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
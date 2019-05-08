<?php get_header() ?>

<div class="row">
    <div class="col-lg-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="row">
            <div class="col-lg-9">
                <div class="card-body">
                    <h2>
                        <?php the_title() ?>
                    </h2>
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));
                    }?>
                <p>
                    <?php the_content() ?>
                </p>
                    <p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-0">autor: adrian</p>
                    <p class="small mb-0">categoria: <?php the_category('/'); ?>    
                    <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?><br>
                </div>
            </div>
        </div>
    
<?php endwhile; endif; ?>
</div>

<?php get_sidebar() ?>
<?php get_footer() ?>
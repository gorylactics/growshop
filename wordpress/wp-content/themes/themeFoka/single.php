<?php get_header() ?>

<div class="row">
    <div class="col-lg-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div class="row">
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
                    <p class="small mb-0">autor: <?php the_author()?></p>
                    <p class="small mb-0">categoria: <?php the_category('/'); ?>    
                    <hr>


                    <a href="javascript:history.back()"> 
                    <input type="button" value=”Volver  onclick=”history.back(-1)” class="btn btn-primary btn-block"/></a>

            


                </div>
            </div>
       <?php endwhile; endif; ?>
    </div>
</div>


<?php get_footer() ?>
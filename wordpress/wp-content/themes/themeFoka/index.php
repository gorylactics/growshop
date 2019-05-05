<?php get_header() ?>

    <!-- entradas -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card-body">
                    <a href="<?php the_permalink() ?>">
                    <h2><?php the_title() ?></h2>
                    </a>
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));
                        }?>
                    <!-- <img src="ejemplo.jpeg" alt="" class="img-fluid mb-3"> -->
                    <p><?php the_excerpt() ?></p>
                    <p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-0">autor: adrian</p>
                    <p class="small mb-0">categoria: <?php the_category('/'); ?>
                        
                    <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?><br>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">ir al articulo</a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

    
    <!-- /entradas -->
    <!-- paginacion -->
    <div class="container">
    <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">siguiente</a></li>
                        </ul>
                    </nav>
                </div>
                </div>
                <!-- /paginacion -->
    <!-- / contenido -->

   <?php get_footer() ?>
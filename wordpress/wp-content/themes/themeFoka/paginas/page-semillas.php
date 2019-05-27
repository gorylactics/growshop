<?php get_header() ?>


<div class="row">
    <div class="col-lg-9">
        <h1>holaaaa
        </h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php endwhile; endif; ?>


<?php

// The Query
$the_query = new WP_Query( array( 'posts_per_page' => 2, 'offset' => 3 , 'category_name' => 'automaticas') ); 

// The Loop
if ( $the_query->have_posts() ) : ?>
	<ul>
	<?php while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>
        
            <div class="card-body entradas">
                <hr>
                <ul>
                    <h2>
                    <p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-0">autor: <?php the_author()?></p>
                    <p class="small mb-0">categoria: <?php the_category('/'); ?>    
                    <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?><br>
                </div>
	    <?php endwhile ?>
	</ul>
	
    <?php wp_reset_postdata();
        else : ?>
	        <p>no posts found </p> 
    <?php endif; ?>

    <div></div>
</div>



<?php get_sidebar() ?>
<?php get_footer() ?>
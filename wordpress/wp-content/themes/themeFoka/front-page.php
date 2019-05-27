<?php get_header() ?>


<div class="row">
    <div class="col-lg-9">
        <h1>holaaaa
        </h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php endwhile; endif; ?>


<?php

// The Query
$the_query = new WP_Query( array( 'posts_per_page' => 10, 'offset' => 1, 'category_name' => 'automaticas')  ); 

// The Loop
if ( $the_query->have_posts() ) : ?>
	<ul>
	<?php while ( $the_query->have_posts() ) :
		$the_query->the_post(); ?>
		
       
        <div class="card-body entradas col-lg-4">
                <a href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));}?>  
                        
                    
                </a>
                
        
        
        
            
            <hr>
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
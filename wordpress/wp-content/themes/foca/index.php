<?php get_header(); ?>
<h1>foca</h1>

<?php if ( have_posts() ) {?>
    <?php while (have_posts()){the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php }; ?>
<?php }; ?>

<?php get_footer(); ?>
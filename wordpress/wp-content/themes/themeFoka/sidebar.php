<div class="col-lg-3">
    <?php if ( is_active_sidebar( 'widgets-derecha' ) ) : ?>
                <?php dynamic_sidebar( 'widgets-derecha' ); ?>
            <?php else : ?>
                <!-- para agregar un nuevo sidebar -->
            <?php endif; ?>
</div>


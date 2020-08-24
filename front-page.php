<?php require_once get_template_directory() . '/home-header.php'; ?>

<?php require_once get_template_directory() . '/slider.php'; ?>

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile;  endif;?>
</div>
<?php get_footer(); ?>
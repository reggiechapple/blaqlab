<!-- Bootstrap 4 Carousel with WordPress Loop -->
<?php
$args = array(
    'post_type' => 'slider',
);
$slider = new WP_Query ( $args );
if($slider->have_posts()):
    $count = $slider->found_posts;

?>

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <!-- Start Carousel Indicator Loop -->
        <?php for($i = 0; $i < $count ;  $i++) { ?>
            <li data-target="#carouselId" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $i = 0; while($slider->have_posts()): $slider->the_post(); ?>
            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
                <?php the_post_thumbnail( 'slider', array(
                                            'class' => 'd-block img-fluid',
                                            'alt' => get_the_title() ) ) ; ?>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-uppercase">
                        <?php echo get_the_title(); ?>
                    </h3>
                    <p>
                        <?php echo get_the_content(); ?>
                    </p>
                </div>
            </div><!--.carousel-item-->
        <?php $i++; endwhile; ?>
    </div> <!--.carouse-inner-->

    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php endif; wp_reset_postdata(); ?>
</div>
<?php
/**
 * Seagul Theme Portfolio
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<!-- Portfolio section-->
<section id="portfolio-image" class="section-padding">
    <div class="container section-container">
        <div class="row image-block">
            <?php
                $team = new WP_Query(array(
                    'post_type' => 'portfolio'
                ));
                if($team->have_posts()){
                while ($team->have_posts()):$team->the_post();
            ?>
            <div class="col-sm-4 col-xs-6 col-mobile-12">
                <div class="portfolio-block">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('portfolio-image', array( 'class' => 'img-responsive' )); ?>
                    </a>
                </div>
            </div>
            <?php
                endwhile; } else {}
                wp_reset_query();
            ?>
        </div>
    </div>
</section><!-- End Portfolio section-->
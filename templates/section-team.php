<?php
/**
 * Seagul Theme Parallax section
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<!-- Team member section -->
<section id="portfolio-image" class="section-padding">
    <div class="container section-container">
        <div class="row image-block">
            <?php
            $team = new WP_Query(array(
                'post_type' => 'team'
            ));
            if($team->have_posts()){
                while ($team->have_posts()):$team->the_post();
                    ?>
                    <div class="col-sm-4 col-xs-6 col-mobile-12">
                        <div class="portfolio-block">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php the_post_thumbnail('team-image', array( 'class' => 'img-responsive' )); ?>
                                </figure>
                            </a>
                            <div class="member-name">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="member-position">
                                <?php echo get_post_meta(get_the_ID(), 'tmx-seagul_team_member_dg', true); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile; } else {}
            wp_reset_query();
            ?>
        </div>
    </div>
</section><!-- End Team member section-->

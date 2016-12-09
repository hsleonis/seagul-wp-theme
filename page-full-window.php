<?php
/**
 * Template name: Full Window
 * Seagul Theme Index
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php
    get_header();

    while (have_posts()):the_post();
?>

    <!--Home section-->
    <section class="home-section">
        <div class="container-fluid">
            <div class="row bg-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'full');?>')">
                <div class="middle-text">
                    <span><?php the_content(); ?></span>
                </div>
            </div>
        </div>
    </section><!-- End Home section-->

    <?php endwhile; ?>
<?php
get_footer();
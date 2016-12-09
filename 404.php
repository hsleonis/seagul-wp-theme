<?php
/**
 * Seagul Theme 404 page template
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php
get_header();
?>

    <!-- section parallax-->
    <section class="section-parallax header-parallax">
        <div class="container-fluid">
            <div class="row bg-parallax" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/404.jpg';?>')">
            </div>
        </div>
    </section><!-- End section parallax-->

    <section class="section-parallax header-parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">We couldn't find what you are looking for.</h1>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
<?php
/**
 * Template name: Connect
 * Seagul Theme Connect page
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php
get_header();

while (have_posts()):the_post();

    get_template_part('templates/section','parallax');
?>
        <!--about text section one-->
        <section class="contact-section">
            <div  class="container section-container">
                <div class="row text-box">
                    <div class="col-xs-12">
                        <h1 class="page-title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_title'); ?></h1>
                    </div>
                </div>
                <div class="row contact-info">
                    <div class="col-xs-6 col-mobile-12 bottom-margin">
                        <div class="contact-type">
                            <h2>email</h2>
                        </div>
                        <div class="contact-address">
                            <a href="mailto:<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_email'); ?>"><?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_email'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-mobile-12 bottom-margin">
                        <div class="contact-type">
                            <h2>ring</h2>
                        </div>
                        <div class="contact-address">
                            <a href="tel:<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_mobile'); ?>"><?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_mobile'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-mobile-12">
                        <div class="contact-type">
                            <h2>walk</h2>
                        </div>
                        <div class="contact-address">
                            <a href="https://www.google.com.bd/maps/place/<?php echo urlencode(TmxLibraryIncluder::getAdmin()->getOption('contact_address')); ?>?hl=en" target="_blank">
                                <?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_address'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-mobile-12">
                        <div class="contact-type">
                            <h2>social</h2>
                        </div>
                        <div class="contact-address">
                            <div class="icon"><a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_fb'); ?>"><span class="fa fa-facebook"></span></a></div>
                            <div class="icon"><a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_tw'); ?>"><span class="fa fa-twitter"></span></a></div>
                            <div class="icon"><a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_in'); ?>"><span class="fa fa-instagram"></span></a></div>
                            <div class="icon"><a href="mailto:<?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_email'); ?>"><span class="fa fa-envelope-o"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End about text section one-->

        <!--about text section one-->
        <section class="section-padding">
            <div class="container section-container">
                <div class="row text-box">
                    <div class="page-description">
                        <div class="col-sm-7">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End about text section one-->

<?php endwhile; ?>
<?php
get_footer();
<?php
/**
 * Template name: Contact
 * Seagul Theme Contact page
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

    <section class="contact-section ">
        <div  class="container section-container">
            <div class="row text-box">
                <div class="col-xs-12">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-contact">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo TmxLibraryIncluder::getAdminImage('contact_1_img'); ?>" alt="">
                        </div>
                        <div class="single-contact-info contact-address">
                            <div class="name">
                                <h3 class="contact-type"><?php echo TmxLibraryIncluder::getAdminOption('contact_1_name'); ?></h3>
                            </div>
                            <div><a href="tel:<?php echo TmxLibraryIncluder::getAdminOption('contact_1_tel'); ?>"><?php echo TmxLibraryIncluder::getAdminOption('contact_1_tel'); ?></a></div>
                            <div><a href="mailto:<?php echo TmxLibraryIncluder::getAdminOption('contact_1_email'); ?>"><?php echo TmxLibraryIncluder::getAdminOption('contact_1_email'); ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-contact">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo TmxLibraryIncluder::getAdminImage('contact_2_img'); ?>" alt="">
                        </div>
                        <div class="single-contact-info contact-address">
                            <div class="name">
                                <h3 class="contact-type"><?php echo TmxLibraryIncluder::getAdminOption('contact_2_name'); ?></h3>
                            </div>
                            <div><a href="tel:<?php echo TmxLibraryIncluder::getAdminOption('contact_2_tel'); ?>"><?php echo TmxLibraryIncluder::getAdminOption('contact_2_tel'); ?></a></div>
                            <div><a href="mailto:<?php echo TmxLibraryIncluder::getAdminOption('contact_2_email'); ?>"><?php echo TmxLibraryIncluder::getAdminOption('contact_2_email'); ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-padding">
                <div class="col-sm-4 col-xs-6 col-mobile-12">
                    <div class="contact-address">
                        <h2>Office</h2>
                        
                        <address>
                            <?php echo TmxLibraryIncluder::getAdminOption('address_text'); ?>
                        </address>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-6 col-mobile-12">
                    <div class="address-map">
                        <iframe src="<?php echo TmxLibraryIncluder::getAdminOption('address_map'); ?>" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>


        </div><!-- /.container -->
    </section>

    <?php endwhile; ?>
<?php
get_footer();

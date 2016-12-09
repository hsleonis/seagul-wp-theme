<?php
/**
 * Template name: Team
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

get_template_part('templates/section','team-parallax');
?>

        <!--team member information-->
        <section class="member-info section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-2 right-border text-right">
                        <div class="contact-type">
                            <h2>likes:</h2>
                        </div>
                        <div class="contact-address text-uppercase">
                            <h4><?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_likes'); ?></h4>
                        </div>

                        <div class="contact-type">
                            <h2>talents:</h2>
                        </div>
                        <div class="contact-address text-uppercase">
                            <h4><?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_talent'); ?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 left-padding">
                        <div class="contact-type">
                            <h2>email</h2>
                        </div>
                        <div class="contact-address">
                            <a href="mailto:<?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_email'); ?>"><?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_email'); ?></a>
                        </div>

                        <div class="contact-type">
                            <h2>call:</h2>
                        </div>
                        <div class="contact-address">
                            <a href="tel:<?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_call'); ?>"><?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_call'); ?></a>
                        </div>

                        <div class="contact-type">
                            <h2>get social:</h2>
                        </div>
                        <div class="contact-address">
                            <ul>
                                <?php if(!empty(TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_fb'))): ?>
                                    <li>
                                        <a href="<?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_fb'); ?>">facebook</a>
                                    </li>
                                <?php endif; ?>

                                <?php if(!empty(TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_tw'))): ?>
                                    <li>
                                        <a href="<?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_tw'); ?>">twitter</a>
                                    </li>
                                <?php endif; ?>

                                <?php if(!empty(TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_in'))): ?>
                                    <li>
                                        <a href="<?php echo TmxLibraryIncluder::getMeta(get_the_ID(), 'team_member_in'); ?>">instagram</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--team member information-->


<?php
    the_content();

    endwhile;

    get_footer();
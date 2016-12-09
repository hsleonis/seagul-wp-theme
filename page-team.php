<?php
/**
 * Template name: About
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
        
        get_template_part('templates/section','parallax');
?>

        <?php the_content(); ?>
    <!--about text section one-->
    <section class="section-padding">
        <div class="container section-container">
            <div class="row text-box">
                <div class="col-xs-12">
                    <h1 class="page-title">WHAT WE BELIEVE</h1>
                </div>
                <div class="page-description">
                    <div class="col-sm-7">
                        <p>
                            We exist to create authentic exchanges between brands and people. Brands are symbols of experience. They have a responsibility to deliver a brilliant product that answers consumer needs in an inspiring way. Successful brands are more than a good logo or tagline. They are an experience that delight and inspire consumers, wherever they find it.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <h2>people don't want advertising, they want authenticity. </h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End about text section one-->
    
    <!--about text section two-->
    <section class="section-padding">
        <div class="container section-container">
            <div class="row text-box">
                <div class="col-xs-12">
                    <h1 class="page-title">OUR SKILLS</h1>
                </div>
                <div class="page-description">
                    <div class="col-sm-7">
                        <p>
                            Intersection is a full-service advertising agency. But what does that really mean? You have an exceptional story worth telling and we have the means to do just that. From branding and collateral design to promotion and social media management, we've got you covered. With our partnership comes a team of headstrong advocates supporting your brand.
                        </p>
                        <a href="#">The best part? We're always looking for a new challenge to tackle. </a>
                    </div>
                    <div class="col-sm-5">
                        <h2>branding • strategy • print • digital • film • signage • social •
                            communications • media placement • photography
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End about text section two-->
    
    <!-- section parallax-->
    <section class="section-parallax section-padding">
        <div class="container-fluid">
            <div class="row bg-parallax" style="background-image: url('assets/images/parallax-middle.jpg')">
            </div>
        </div>
    </section><!-- End section parallax-->
    
    <!--about text section three-->
    <section class="section-padding">
        <div class="container section-container">
            <div class="row text-box">
                <div class="col-xs-12">
                    <h1 class="page-title">WHAT WE BELIEVE</h1>
                </div>
                <div class="page-description">
                    <div class="col-sm-7">
                        <p>
                            Our team is comprised of go-getters, collaborators and doers. We each have our own passion projects, which lead us to have diverse perspectives on each project we take on. What brings us together is the fact that, at any given time, there's a 90% chance we'll be caught with coffee in one hand and Cheez-Its in the other. Collectively, we're a tight-knit team of dinosaur lovin', enthusiastic characters.
                        </p>
                        <a href="#">THINK YOU'D BE A GOOD FIT? AWESOME. LET'S CHAT. </a>
                    </div>
                    <div class="col-sm-5">
                        <h2>our team is as bold as the brands we create. </h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End about text section three-->

    
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


<?php endwhile; ?>
<?php
get_footer();
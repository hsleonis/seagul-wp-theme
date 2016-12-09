<?php
/**
 * Seagul Theme Single Portfolio
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php
get_header();

while (have_posts()):the_post();

get_template_part('templates/section','portfolio-parallax');
?>

<!--work body section-->
        <section class="section-padding ">
            <div class="container section-container">
                <div class="row text-box">
                    <div class="col-xs-12">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="page-description">
                        <div class="col-sm-12">
                            <h2><?php $posttags = get_the_tags();
                                if ($posttags) {
                                    $i=1;
                                    foreach($posttags as $tag) {
                                        if($i!=1) echo ' • ';
                                        echo $tag->name;
                                        $i++;
                                    }
                                }; ?></h2>
                        </div>
                        <div class="col-sm-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--work body section-->

<?php

    endwhile;

    get_footer();
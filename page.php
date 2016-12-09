<?php
/**
 * Seagul Theme page template
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

        the_content();

    endwhile;

    get_footer();
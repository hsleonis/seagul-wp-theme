<?php
/**
 * Seagul Theme Nav
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>

<!--navigation section-->
<nav class="navbar navbar-default menubar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                <img src="<?php header_image(); ?>" class="img-responsive logo" alt="<?php echo bloginfo('title'); ?>" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'mobile-menu',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
        )); ?><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!--/ End navigation section-->
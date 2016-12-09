<?php
/**
 * FilmMaker Theme library includer
 * Includes all necessary library files
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxLibraryIncluder{
    /**
     * @access private
     * @var instance
     * Used to instantiate
     *
     * @since 1.0.1
     */
    private static $instance;

    /**
     * @access private
     * @var admin
     * used to store titan instance
     *
     * @since 1.0.1
     */
    private static $admin;

    /**
     * @access public
     * TmxLibraryIncluder constructor.
     * @param string $admin instance
     * @return new TmxLibraryIncluder instance
     *
     * @since 1.0.1
     */
    public static function instance($admin) {
        if ( ! self::$instance ) {
            self::$instance = new self;
            self::$admin = $admin;
            self::$instance->includes();
            self::$instance->init();
        }
        return self::$instance;
    }

    /**
     * @access private
     * Include all library files
     *
     * @since 1.0.1
     */
    private function includes(){
        require_once ( get_template_directory().'/lib/enqueue.php');
        require_once ( get_template_directory().'/lib/menu.php');
        require_once ( get_template_directory().'/lib/admin-embedder.php');
        require_once ( get_template_directory().'/lib/customizer.php');
        require_once ( get_template_directory().'/lib/metabox.php');
        require_once ( get_template_directory().'/lib/custom-post.php');
        require_once ( get_template_directory().'/lib/theme-support.php');
        require_once ( get_template_directory().'/lib/wp_bootstrap_navwalker.php');
        require_once ( get_template_directory().'/lib/sidebar.php');
        require_once ( get_template_directory().'/lib/shortcode.php');
        require_once ( get_template_directory().'/lib/tinymce.php');
    }

    /**
     * @access private
     * Initialize libraries
     *
     * @since 1.0.1
     */
    private function init(){
        new TmxEnqueue();
        new TmxCustomizerTitan(self::$admin);
        new TmxMetaBoxTitan(self::$admin);
        new TmxThemeSupport();
        new wp_bootstrap_navwalker();
        new TmxShortcode();
        new TmxTinyMCE();
        new TmxMenu(array(
            'main-menu' => __( 'Main menu', 'themeaxe' ),
        ));
        new TmxCustomPost('Team', array(
            'taxonomies' => array( ),
            'supports'  => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-businessman'
        ));
        new TmxCustomPost('Portfolio', array(
            'taxonomies' => array( 'post_tag' ),
            'supports'  => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-portfolio'
        ));
        new TmxSidebar( 3, array(
                'class'         => 'col-sm-3 col-xs-6 col-mb-12',
                'before_title'  => '<div class="title">',
                'after_title'   => '</div>',
                'before_widget' => '<div class="info-block footer-info-block">',
                'after_widget'  => '</div>',
                'name'          => __( 'Footer %d', 'themeaxe' )
            )
        );
    }

    /**
     * @access public
     * @return admin instance
     *
     * @since 1.0.1
     */
    public function getAdmin(){
        return TitanFramework::getInstance(self::$admin);
    }

    /**
     * Returns full size image from Titan framework options
     * @access public
     * @param $option 'TitanFrame work Option'
     * @return string
     */
    public function getAdminImage($option){
        return wp_get_attachment_image_src(self::getAdmin()->getOption($option), 'full')[0];
    }

    /**
     * @access public
     * @return admin instance
     *
     * @since 1.0.1
     */
    public function getMeta($id, $option){
        return get_post_meta($id, self::$admin.'_'.$option, true);
    }

    /**
     * Returns full size image from Titan framework options
     * @access public
     * @para $id post ID
     * @param $option 'TitanFrame work Option'
     * @return string
     */
    public function getMetaImage($id, $option){
        return wp_get_attachment_image_src(get_post_meta($id, self::$admin.'_'.$option, true), 'full')[0];
    }
}
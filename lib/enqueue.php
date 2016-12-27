<?php
/**
 * ThemeAxe Theme Enqueue Style & Scripts
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxEnqueue{
    /**
     * TmxEnqueue constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Enqueues style & scripts
     *
     * @since 1.0.1
     */
    public function tmx_enqueue_scripts() {
        // style
        wp_enqueue_style('bootstrap-97-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('tmx-11-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), false, 'all');
        wp_enqueue_style('fonts-76-css', 'https://fonts.googleapis.com/css?family=Arapey:400i|Roboto:400,700', array(), false, 'all');
        wp_enqueue_style('style-91-css', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
        wp_enqueue_style('responsive-97-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, 'all');
        wp_enqueue_style('main-css', get_stylesheet_uri(), array(), false, 'all');

        // script
        wp_enqueue_script('html5shiv-78-js', get_template_directory_uri() . '/assets/js/html5shiv.js', array(), false, false);
        wp_script_add_data( 'html5shiv-78-js', 'conditional', 'lt IE 9' );
        wp_enqueue_script('respond-42-js', get_template_directory_uri() . '/assets/js/respond.min.js', array(), false, false);
        wp_script_add_data( 'respond-42-js', 'conditional', 'lt IE 9' );

        // script
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('main-10-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js'), false, true);
    }
    /**
     * Enqueues style & scripts on admin
     *
     * @since 1.0.1
     */
    public function tmx_admin_scripts(){
        wp_enqueue_style('admin-style-css', get_template_directory_uri() . '/assets/css/admin-style.css', array(), false, 'all');
    }

    /**
     * Enqueues style & scripts on login
     *
     * @since 1.0.1
     */
    public function tmx_login_scripts(){
    }

    /**
     * Enqueues style to TinyMCE
     *
     * @since 1.0.1
     */
    public function tmx_editor_styles() {
        add_editor_style( get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        add_editor_style( get_template_directory_uri() . '/assets/css/style.css' );
        add_editor_style( 'https://fonts.googleapis.com/css?family=Arapey:400i|Roboto:400,700' );
        add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );
    }


    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'wp_enqueue_scripts', array($this, 'tmx_enqueue_scripts') );
        add_action( 'admin_enqueue_scripts', array($this, 'tmx_admin_scripts') );
        add_action( 'login_enqueue_scripts', array($this, 'tmx_login_scripts') );
        add_action( 'admin_init', array($this, 'tmx_editor_styles') );
    }
}
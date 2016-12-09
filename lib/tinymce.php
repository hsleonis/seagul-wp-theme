<?php
/**
 * Seagul Theme TinyMCE
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxTinyMCE{

    /**
     * TmxTinyMCE constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * @access public
     * Setup TinyMCE
     *
     * @since 1.0.1
     */
    public function tmx_setup_tinymce() {
        global $typenow;

        // Check if the logged in WordPress User can edit Posts or Pages
        // If not, don't register our TinyMCE plugin
        if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
            return;
        }

        // Check if the logged in WordPress User has the Visual Editor enabled
        // If not, don't register our TinyMCE plugin
        if ( get_user_option( 'rich_editing' ) !== 'true' ) {
            return;
        }

        // verify the post type
        /*if( ! in_array( $typenow, array( 'post', 'page' ) ) )
            return;*/

        // Setup some filters
        add_filter( 'mce_external_plugins', array( $this, 'tmx_add_tinymce_plugin' ) );
        add_filter( 'mce_buttons', array( $this, 'tmx_add_tinymce_toolbar_button' ) );
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        if ( is_admin() ) {
            add_action( 'init', array( $this, 'tmx_setup_tinymce' ) );
        }
    }

    /**
     * @access public
     * Add TinyMCE custom js file to js file array
     *
     * @var array $plugin_array
     * @return array
     * @since 1.0.1
     */
    public function tmx_add_tinymce_plugin($plugin_array) {
        $plugin_array['tmx_seagul_box'] = get_template_directory_uri().'/assets/js/tmx-seagul-box.js';
        $plugin_array['tmx_seagul_box_image'] = get_template_directory_uri().'/assets/js/tmx-seagul-box-image.js';
        return $plugin_array;
    }

    /**
     * @access public
     * Add or remove TinyMCE toolbar buttons
     *
     * @var array $buttons
     * @return array
     * @since 1.0.1
     */
    public function tmx_add_tinymce_toolbar_button($buttons) {
        array_push($buttons, "tmx_seagul_box");
        array_push($buttons, "tmx_seagul_box_image");
        return $buttons;
    }

    // https://www.gavick.com/blog/wordpress-tinymce-custom-buttons
}
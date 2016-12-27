<?php
/**
 * Seagul Theme Shortcodes
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxShortcode
{

    /**
     * TmxCustomizerTitan constructor.
     *
     * @since 1.0.1
     */
    public function __construct() {
        $this->hooks();
    }

    /**
     * Create imagebox shortcode
     *
     * @since 1.0.1
     */
    public function shortcode_image( $atts ) {
        $a = shortcode_atts( array(
            'src' => '#',
        ), $atts );

        ob_start();
        ?>
        <section class="section-parallax section-padding">
            <div class="container-fluid">
                <div class="row bg-parallax" style="background-image: url('<?php echo wp_get_attachment_url($a['src']); ?>')">
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /**
     * Create textbox shortcode
     *
     * @since 1.0.1
     */
    public function shortcode_text( $atts, $content = null ) {
        $a = shortcode_atts( array(
            'title' => '',
            'right' => '',
            'desc' => '',
            'onecol' => false
        ), $atts );

        ob_start();
        ?>
        <section class="section-padding">
            <div class="container section-container">
                <div class="row text-box">
                    <div class="col-xs-12">
                        <h1 class="page-title"><?php echo $a['title']; ?></h1>
                    </div>
                    <div class="page-description">
                        <div class="<?php echo ($a['onecol'])?'col-sm-12':'col-sm-7'; ?>">
                            <p><?php echo $a['desc']; ?></p>
                        </div>
                        <?php if(!$a['onecol']): ?>
                        <div class="col-sm-5">
                            <h2><?php echo $a['right']; ?></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_shortcode( 'image_box', array($this, 'shortcode_image' ));
        add_shortcode( 'text_box', array($this, 'shortcode_text' ));
    }
}
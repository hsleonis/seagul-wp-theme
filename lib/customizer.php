<?php
/**
 * Themeaxe customizer settings
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxCustomizerTitan
{
    /**
     * @access private
     * @var instance name
     * @since 1.0.1
     */
    private $instance_name;

    /**
     * TmxCustomizerTitan constructor.
     *
     * @since 1.0.1
     */
    public function __construct($instance_name)
    {
        $this->instance_name = (string)$instance_name;
        $this->hooks();
    }

    /**
     * Create customizer options with Titan
     *
     * @since 1.0.1
     */
    public function tmx_create_options() {
        $titan = TitanFramework::getInstance($this->instance_name);

        $home = $titan->createThemeCustomizerSection(array(
            'name' => 'Home page settings',
            'panel' => 'Home page'
        ));
        $img = $titan->createThemeCustomizerSection(array(
            'name' => 'Images',
            'panel' => 'Home page'
        ));
        $img->createOption(array(
            'name' => 'Home banner',
            'id' => 'banner_img',
            'type' => 'upload',
            'desc' => 'Home page banner image'
        ));
        $img->createOption(array(
            'name' => 'Home banner logo',
            'id' => 'banner_logo',
            'type' => 'upload',
            'desc' => 'Home page banner bottom logo'
        ));
        $img->createOption(array(
            'name' => 'Contact background',
            'id' => 'contact_img',
            'type' => 'upload',
            'desc' => 'Contact section background image'
        ));
        $img->createOption(array(
            'name' => 'Service background',
            'id' => 'service_img',
            'type' => 'upload',
            'desc' => 'Service background image'
        ));
        $img->createOption(array(
            'name' => 'Page background',
            'id' => 'page_img',
            'type' => 'upload',
            'desc' => 'Page section background image'
        ));

        $banner = $titan->createThemeCustomizerSection(array(
            'name' => 'Banner section',
            'panel' => 'Home page'
        ));
        $banner->createOption(array(
            'name' => 'Text before title',
            'id' => 'before_title',
            'type' => 'text',
            'desc' => ''
        ));
        $banner->createOption(array(
            'name' => 'Title',
            'id' => 'title',
            'type' => 'text',
            'desc' => ''
        ));
        $banner->createOption(array(
            'name' => 'Subtitle',
            'id' => 'subtitle',
            'type' => 'text',
            'desc' => ''
        ));
        $banner->createOption(array(
            'name' => 'Show link',
            'id' => 'show_link',
            'type' => 'checkbox',
            'desc' => 'Show action button',
            'default' => true
        ));
        $banner->createOption(array(
            'name' => 'Button text',
            'id' => 'link_text',
            'type' => 'text',
            'desc' => ''
        ));
        $banner->createOption(array(
            'name' => 'Link',
            'id' => 'link',
            'type' => 'text',
            'desc' => 'Action button link'
        ));

        $contact = $titan->createThemeCustomizerSection(array(
            'name' => 'Contact section',
            'panel' => 'Home page'
        ));
        for($i=1;$i<=3;$i++) {
            $contact->createOption(array(
                'name' => 'Contact Title '.$i,
                'id' => 'contact_title_'.$i,
                'type' => 'text',
                'desc' => 'Contact item title'
            ));
            $contact->createOption(array(
                'name' => 'Contact Info '.$i,
                'id' => 'contact_info_'.$i,
                'type' => 'textarea',
                'desc' => 'Contact description'
            ));
        }

        $service = $titan->createThemeCustomizerSection(array(
            'name' => 'Service section',
            'panel' => 'Home page'
        ));
        $service->createOption(array(
            'name' => 'Title',
            'id' => 'service_title',
            'type' => 'text',
            'desc' => 'Section title'
        ));
        $service->createOption(array(
            'name' => 'Subtitle',
            'id' => 'service_subtitle',
            'type' => 'text',
            'desc' => 'Section subtitle'
        ));

        $page = $titan->createThemeCustomizerSection(array(
            'name' => 'Page section',
            'panel' => 'Home page'
        ));
        $page->createOption( array(
            'name' => 'Left page title',
            'id' => 'page_left_title',
            'type' => 'text',
            'desc' => 'Page section left'
        ) );
        $page->createOption( array(
            'name' => 'Left page description',
            'id' => 'page_left_desc',
            'type' => 'text',
            'desc' => ''
        ) );
        $page->createOption( array(
            'name' => 'Link',
            'id' => 'page_left_link',
            'type' => 'text',
            'desc' => 'Left action button link'
        ) );
        $page->createOption( array(
            'name' => 'Details',
            'id' => 'page_left_detail',
            'type' => 'textarea',
            'desc' => 'Details in Popup'
        ) );
        $page->createOption( array(
            'name' => 'Right page title',
            'id' => 'page_right_title',
            'type' => 'text',
            'desc' => 'Page section right'
        ) );
        $page->createOption( array(
            'name' => 'Right page description',
            'id' => 'page_right_desc',
            'type' => 'text',
            'desc' => ''
        ) );
        $page->createOption( array(
            'name' => 'Link',
            'id' => 'page_right_link',
            'type' => 'text',
            'desc' => 'Right action button link'
        ) );
        $page->createOption( array(
            'name' => 'Details',
            'id' => 'page_right_detail',
            'type' => 'textarea',
            'desc' => 'Details in Popup'
        ) );
        $page->createOption( array(
            'name' => 'Terms page title',
            'id' => 'page_terms_title',
            'type' => 'text',
            'desc' => 'Terms page section'
        ) );
        $page->createOption( array(
            'name' => 'Terms page description',
            'id' => 'page_terms_desc',
            'type' => 'text',
            'desc' => ''
        ) );
        $page->createOption( array(
            'name' => 'Link',
            'id' => 'page_terms_link',
            'type' => 'text',
            'desc' => 'Terms action button link'
        ) );
        $page->createOption( array(
            'name' => 'Details',
            'id' => 'page_terms_detail',
            'type' => 'textarea',
            'desc' => 'Details in Popup'
        ) );

        $service_page = $titan->createThemeCustomizerSection(array(
            'name' => 'Service Page',
        ) );
        $service_page->createOption(array(
            'name' => 'Page background',
            'id' => 'service_page_img',
            'type' => 'upload',
            'desc' => 'Service page background image'
        ));
        $service_page->createOption( array(
            'name' => 'Header color',
            'id' => 'service_header_bgcolor',
            'type' => 'color',
            'desc' => 'Pick a color',
            'default' => '#143D70',
        ));

        $copyright = $titan->createThemeCustomizerSection(array(
            'name' => 'Copyright',
        ));
        $copyright->createOption(array(
            'name' => 'Copyright Information',
            'id' => 'copyright-info',
            'type' => 'text',
            'desc' => 'Copyright information shown at page bottom'
        ));
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'tf_create_options', array($this, 'tmx_create_options') );
    }
}
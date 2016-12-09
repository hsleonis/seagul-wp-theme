<?php
/**
 * Themeaxe Theme settings
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxSettingsTitan
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
     * Create metabox options with Titan
     *
     * @since 1.0.1
     */
    public function tmx_create_options()
    {
        $titan = TitanFramework::getInstance($this->instance_name);

        $admin = $titan->createAdminPanel( array(
            'name' => 'Seagul Options',
        ) );

        $contact = $admin->createTab( array(
            'name' => 'Contact',
        ) );
        $contact->createOption( array(
            'name' => 'General',
            'type' => 'heading',
        ) );
        $contact->createOption(array(
            'name' => 'Contact page title',
            'id' => 'contact_title',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Email',
            'id' => 'contact_email',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Address',
            'id' => 'contact_address',
            'type' => 'textarea',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Mobile',
            'id' => 'contact_mobile',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption( array(
            'name' => 'Social',
            'type' => 'heading',
        ) );
        $contact->createOption(array(
            'name' => 'Facebook Link',
            'id' => 'contact_fb',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Twitter Link',
            'id' => 'contact_tw',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Instagram Link',
            'id' => 'contact_in',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption( array(
            'type' => 'save',
        ) );
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
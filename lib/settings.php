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

        /**
         * CONTACT TAB
         */
        $contact = $admin->createTab( array(
            'name' => 'Contact',
        ) );
        $contact->createOption( array(
            'name' => 'Contact person 1',
            'type' => 'heading',
        ) );
        $contact->createOption( array(
            'name' => 'Image',
            'id'   => 'contact_1_img',
            'type' => 'upload',
        ) );
        $contact->createOption(array(
            'name' => 'Name',
            'id' => 'contact_1_name',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Mobile',
            'id' => 'contact_1_tel',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Email',
            'id' => 'contact_1_email',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption( array(
            'name' => 'Contact person 2',
            'type' => 'heading',
        ) );
        $contact->createOption( array(
            'name' => 'Image',
            'id'   => 'contact_2_img',
            'type' => 'upload',
        ) );
        $contact->createOption(array(
            'name' => 'Name',
            'id' => 'contact_2_name',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Mobile',
            'id' => 'contact_2_tel',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Email',
            'id' => 'contact_2_email',
            'type' => 'text',
            'desc' => ''
        ));
        $contact->createOption( array(
            'name' => 'Address',
            'type' => 'heading',
        ) );
        $contact->createOption(array(
            'name' => 'Location',
            'id' => 'address_text',
            'type' => 'textarea',
            'desc' => ''
        ));
        $contact->createOption(array(
            'name' => 'Map',
            'id' => 'address_map',
            'type' => 'textarea',
            'desc' => 'Google map location URL'
        ));
        $contact->createOption( array(
            'type' => 'save',
        ) );

        /**
         * CONNECT TAB
         */
        $connect = $admin->createTab( array(
            'name' => 'Connect',
        ) );
        $connect->createOption( array(
            'name' => 'General',
            'type' => 'heading',
        ) );
        $connect->createOption(array(
            'name' => 'Contact page title',
            'id' => 'contact_title',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption(array(
            'name' => 'Email',
            'id' => 'contact_email',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption(array(
            'name' => 'Address',
            'id' => 'contact_address',
            'type' => 'textarea',
            'desc' => ''
        ));
        $connect->createOption(array(
            'name' => 'Mobile',
            'id' => 'contact_mobile',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption( array(
            'name' => 'Social',
            'type' => 'heading',
        ) );
        $connect->createOption(array(
            'name' => 'Facebook Link',
            'id' => 'contact_fb',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption(array(
            'name' => 'Twitter Link',
            'id' => 'contact_tw',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption(array(
            'name' => 'Instagram Link',
            'id' => 'contact_in',
            'type' => 'text',
            'desc' => ''
        ));
        $connect->createOption( array(
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
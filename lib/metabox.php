<?php
/**
 * Themeaxe Metabox settings
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxMetaBoxTitan
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

        $team = $titan->createMetaBox( array(
            'name' => 'Team member information',
            'post_type' => 'team',
        ) );
        $team->createOption(array(
            'name' => 'Page banner',
            'id' => 'team_banner_img',
            'type' => 'upload',
            'desc' => 'Member page banner image'
        ));
        $team->createOption(array(
            'name' => 'Designation',
            'id' => 'team_member_dg',
            'type' => 'text',
            'desc' => 'Member designation'
        ));
        $team->createOption(array(
            'name' => 'Likes',
            'id' => 'team_member_likes',
            'type' => 'text',
            'desc' => 'What they like'
        ));
        $team->createOption(array(
            'name' => 'Talents',
            'id' => 'team_member_talent',
            'type' => 'text',
            'desc' => 'What they do'
        ));
        $team->createOption(array(
            'name' => 'Email',
            'id' => 'team_member_email',
            'type' => 'text',
            'desc' => 'Email address'
        ));
        $team->createOption(array(
            'name' => 'Mobile',
            'id' => 'team_member_call',
            'type' => 'text',
            'desc' => 'Contact number'
        ));
        $team->createOption(array(
            'name' => 'Facebook',
            'id' => 'team_member_fb',
            'type' => 'text',
            'desc' => 'Facebook link'
        ));
        $team->createOption(array(
            'name' => 'Twitter',
            'id' => 'team_member_tw',
            'type' => 'text',
            'desc' => 'Twitter link'
        ));
        $team->createOption(array(
            'name' => 'Instagram',
            'id' => 'team_member_in',
            'type' => 'text',
            'desc' => 'Instagram link'
        ));

        $portfolio = $titan->createMetaBox( array(
            'name' => 'Portfolio Banner',
            'post_type' => 'portfolio',
        ) );
        $portfolio->createOption(array(
            'name' => 'Page banner',
            'id' => 'portfolio_banner_img',
            'type' => 'upload',
            'desc' => 'Portfolio page banner image'
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
<?php
/**
 * Seagul Theme Shortcodes UI
 *
 * @package     TMXSeagul
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

shortcode_ui_register_for_shortcode(
    'image_box',
    array(
        'label' => 'Parallax Box',
        'listItemImage' => "<img src='".get_template_directory_uri()."/assets/images/image-box.png' />", //'dashicons-format-image',
        'attrs'          => array(
            array(
                'label'        => 'Parallax background',
                'attr'         => 'src',
                'type'         => 'attachment',
                'description'  => 'Image URL',
            ),
        ),
    )
);

shortcode_ui_register_for_shortcode(
    'text_box',
    array(
        'label' => 'Text Box',
        'listItemImage' => "<img src='".get_template_directory_uri()."/assets/images/text-box.png' />", //'dashicons-file',
        'attrs'          => array(
            array(
                'label'        => 'Title',
                'attr'         => 'title',
                'type'         => 'text',
                'description'  => 'Box title',
            ),
            array(
                'label'        => 'Content',
                'attr'         => 'desc',
                'type'         => 'textarea',
                'description'  => 'Description',
            ),
            array(
                'label'        => 'Right Column',
                'attr'         => 'right',
                'type'         => 'textarea',
                'description'  => 'Right column italic text',
            ),
            array(
                'label'        => 'Hide right column?',
                'attr'         => 'onecol',
                'type'         => 'checkbox',
                'description'  => 'Select to hide right column',
            ),
        ),
    )
);
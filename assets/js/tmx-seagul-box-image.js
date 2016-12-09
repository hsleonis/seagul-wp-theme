(function() {
    'use strict';
    tinymce.PluginManager.add('tmx_seagul_box_image', function( editor, url ) {
        editor.addButton( 'tmx_seagul_box_image', {
            title: 'Parallax Box',
            icon: 'icon dashicons-format-image',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Image Box',
                    width: 520,
                    height: 270,
                    body: [{
                        type: 'textbox',
                        name: 'src',
                        label: 'Image',
                        id: 'tmx-img-src',
                        placeholder: 'Image URL',
                        value: '',
                    },
                    {
                        type: 'button',
                        name: 'srcimg',
                        id: 'mce-image-uploader',
                        text: 'Select Image',
                        onclick: function() {
                            window.mb = window.mb || {};

                            window.mb.frame = wp.media({
                                library : {
                                    type : 'image'
                                },
                                multiple: false
                            });

                            window.mb.frame.on('select', function() {
                                var json = window.mb.frame.state().get('selection').first().toJSON();
                                if (0 > jQuery.trim(json.url.length)) {
                                    return;
                                }

                                jQuery('#tmx-img-src').val(json.url); // Add value to the text box
                            });

                            window.mb.frame.open();
                        }
                    }],
                    onsubmit: function( e ) {
                        var b = (e.data.border==true)?1:0;
                        editor.insertContent( '[image_box src="' + e.data.src + '"]');
                    }
                });
                // console.log(top.tinymce.activeEditor.windowManager.getParams());
            }
        });
    });
})(jQuery);
function addslashes( str ) {
    var a = str.replace(/"/g, "&quote");
    return a;
}

(function() {
    'use strict';
    tinymce.PluginManager.add('tmx_seagul_box', function( editor, url ) {
        editor.addButton( 'tmx_seagul_box', {
            title: 'Text Box',
            icon: 'icon dashicons-format-aside',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Text Box',
                    width: 520,
                    height: 225,
                    body: [{
                        type: 'textbox',
                        name: 'title',
                        label: 'Title',
                        placeholder: 'Title'
                    },
                    {
                        type: 'textbox',
                        multiline: true,
                        name: 'desc',
                        label: 'Description',
                        placeholder: 'Description ( HTML, CSS allowed )'
                    },
                    {
                        type: 'textbox',
                        multiline: true,
                        name: 'right',
                        label: 'Right column text',
                        placeholder: 'Right italic text'
                    }],
                    onsubmit: function( e ) {
                        editor.insertContent( '[text_box title="' + e.data.title + '" right="' + addslashes(e.data.right) + '"]'+ e.data.desc + '[/text_box]');
                    }
                });
                console.log(top.tinymce.activeEditor.windowManager.getParams());
            }
        });
    });
})(jQuery);
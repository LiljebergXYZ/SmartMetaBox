<?php 
$settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => true, // show insert/upload button(s)
    'textarea_name' => $id, // set the textarea name to something different, square brackets [] can be used here
    'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
    'tabindex' => '',
    'editor_css' => '', //  extra styles for both visual and HTML editors buttons, 
    'editor_class' => '', // add extra class(es) to the editor textarea
    'teeny' => false, // output the minimal editor config used in Press This
    'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
);
wp_editor($value, str_replace('-', '_', $id), $settings);

jQuery(document).ready(function($) {
    jQuery('input.smb-js-media-manager').click(function(e) {
        var self = this;
        e.preventDefault();
        var image_frame;
        if (image_frame) {
            image_frame.open();
        }
        // Define image_frame as wp.media object
        image_frame = wp.media({
            title: 'Select Media',
            multiple: false,
            library: {
                type: 'image',
            }
        });

        image_frame.on('close', function() {
            var selection = image_frame.state().get('selection');
            var gallery_ids = new Array();
            var my_index = 0;
            var url = selection.models[0].attributes.url;

            jQuery(self).siblings('.smb-media-url').first().val(url);
            jQuery(self).siblings('.smb-media-preview').attr('src', url);
        });

        image_frame.on('open', function() {
            // On open, get the id from the hidden input
            // and select the appropiate images in the media manager
            var selection = image_frame.state().get('selection');
            ids = jQuery(self).val().split(',');
            ids.forEach(function(id) {
                attachment = wp.media.attachment(id);
                attachment.fetch();
                selection.add(attachment ? [attachment] : []);
            });

        });

        image_frame.open();
    });

});

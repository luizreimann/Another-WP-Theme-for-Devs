jQuery(document).ready(function($){
    var mediaUploader;

    $('#upload_favicon_button').click(function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media({
            title: 'Choose Favicon',
            button: {
                text: 'Use this Favicon'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#awtd_favicon').val(attachment.id);
            $('#awtd-favicon-preview').attr('src', attachment.url);
        });

        mediaUploader.open();
    });

    $('#remove_favicon_button').click(function(e) {
        e.preventDefault();
        $('#awtd_favicon').val('');
        $('#awtd-favicon-preview').attr('src', '');
    });
});
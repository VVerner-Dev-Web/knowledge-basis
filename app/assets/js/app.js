(function( $ ) {
	'use strict';

	// Dark theme toggle
    // [vv-slider-recent-posts]

    $('.slider-popular-posts').lazyFlickity({
        wrapAround:true,
        freeScroll:true,
        autoplay  : 5000,
        pageDots  : false,
        prevNextButtons: false,
        cellAlign : 'right'
    })

    $('.like').on('click', function() {
        const $button = $(this);
        const data    = {
            action: 'kb/comment/insert-like',
            _wpnonce: app_data.cnonce,
            comment_id: $button.data('id')
        } 

        $.post(app_data.url, data, function(response){
            if(response.success){
                $('.likes-'+$button.data('id')).text(response.data)
            }
        })
    });
})( jQuery );


   
 

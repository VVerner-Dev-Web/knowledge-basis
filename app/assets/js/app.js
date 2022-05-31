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
})( jQuery );

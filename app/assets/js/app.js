(function( $ ) {
	'use strict';

	// Dark theme toggle
    // [vv-slider-recent-posts]

    $('.slider-recent-posts').lazyFlickity({
        wrapAround:true,
        freeScroll:true,
        autoplay  : 5000,
        pageDots  : false,
        prevNextButtons: false,
        cellAlign : 'right'
    })
})( jQuery );

$(function() {
    $('.like').on('click', function() {
    $(this).next('.likes').find('span').text(function() {
    if (parseInt($(this).text()) === 0) {
    return parseInt($(this).text() + 1);
    }
    else {
    return 0;
    }
    });
    });
    });

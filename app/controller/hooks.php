<?php defined('ABSPATH') || exit('No direct script access allowed');

add_action('template_redirect', function(){
    if (is_single()) :
        $views = (int) get_post_meta(get_the_ID(), 'post_views', true);
        $views++;
        update_post_meta(get_the_ID(), 'post_views', $views);
    endif;
});

<?php defined('ABSPATH') || exit('No direct script access allowed');

/*SLIDER POSTS RECENTES HOME*/
$sc = new VVerner\Shortcode('slider-recent-posts');


add_filter('vv_shortcode-slider-recent-posts',function($args){
    $query = new WP_Query([
        'post_type' => ['development', 'management'],
        'order_by'  => 'post_date',
        'order'     => 'DESC'
    ]);

    $args['query'] = $query;

    return $args;
});


function BlogList($postType){

    $query = new WP_Query([
        'post_type' => $postType
    ]);

    return $query;
};

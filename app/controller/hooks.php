<?php defined('ABSPATH') || exit('No direct script access allowed');



function blogList($postType){

    $query = new WP_Query([
        'post_type' => $postType
    ]);

    return $query;
};

function recentPosts(){
    $query = new WP_Query([
        'post_type'      => ['development', 'management'],
        'posts_per_page'  => 6,
        'order'          => 'DESC',
        'order_by'       => 'date'     
    ]);

    return $query;
}

function totalPosts(){
    $query = new WP_Query([
        'post_type' => ['development','management']
    ]);
    return $query->post_count;
}

<?php defined('ABSPATH') || exit('No direct script access allowed');

function getRecentPosts(): ?WP_Query
{
    return new WP_Query([
        'post_type'      => ['development', 'management'],
        'posts_per_page' => 6,
        'order'          => 'DESC',
        'orderby'        => 'date'     
    ]);
}

function getTotalPostsCount(): int
{
    $query = new WP_Query([
        'post_type' => ['development','management']
    ]);
    return $query->post_count;
}

function getMostViewedPosts(): ?WP_Query
{
    return new WP_Query([
        'post_type' => ['development','management'],
        'order'     => 'DESC',
        'meta_key'  => 'post_views',
        'orderby'   => 'meta_value_num'
    ]);
     
}



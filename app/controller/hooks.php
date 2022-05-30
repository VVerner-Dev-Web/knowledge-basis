<?php defined('ABSPATH') || exit('No direct script access allowed');



function BlogList($postType){

    $query = new WP_Query([
        'post_type' => $postType
    ]);

    return $query;
};




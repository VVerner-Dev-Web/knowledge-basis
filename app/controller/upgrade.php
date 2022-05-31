<?php defined('ABSPATH') || exit('No direct script access allowed');

add_action('init', function(){
    $updates = [
        [
            'flag'   => 'required_page',
            'version'  => 19,
            'action' => 'create_required_pages'
        ]
    ];

    foreach ($updates as $update) :
        $oldVersion = get_option($update['flag'], 0);
        if (version_compare($oldVersion, $update['version'], '<')) :
            update_option($update['flag'], $update['version']);

            do_action('kb/upgrade/' .$update['action'], $update['flag'], $update['version'], $oldVersion); 
        endif;
    endforeach;
});

add_action('kb/upgrade/create_required_pages',function(){
    global $wpdb;
    $pages = [
         'Início',
    ];
    
    foreach ($pages as $page) :
            
        $q = "SELECT post_title FROM {$wpdb->posts} WHERE post_title = %s";
        $preparado = $wpdb->prepare($q, $page);
        $r         = $wpdb->get_var($preparado);
        
        if ($r == $page) continue;
        if (!is_page($page)): 
            wp_insert_post([
                'post_type'     => 'page',
                'post_title'    => $page,
                'post_status'   => 'publish',
            ]);
        endif;
    endforeach;
      
}, 10, 3);

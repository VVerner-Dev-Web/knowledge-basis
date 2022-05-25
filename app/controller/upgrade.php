<?php defined('ABSPATH') || exit('No direct script access allowed');

add_action('init', function(){
    $updates = [
        [
            'flag'   => 'required_page',
            'version'  => 2,
            'action' => 'create_required_pages'
        ]
    ];

    foreach ($updates as $update) :
        $oldVersion = get_option($update['flag'], 0);
        if ($oldVersion < $update['version']) :
            update_option($update['flag'], $update['version']);

            do_action('kb/upgrade/' .$update['action'], $update['flag'], $update['version'], $oldVersion); 
        endif;
    endforeach;
});

add_action('kb/upgrade/create_required_pages',function(string $flag, int $version, int $oldVersion){
    global $wpdb;
    $pages = [
        '1' => ['Início'],
        '2' => ['login'],
        '3' => ['Cenoura']
    ];
    
    foreach ($pages as $page) :
            foreach ($page as $title_page):
                $q = "SELECT post_title FROM {$wpdb->posts} WHERE post_title = %s";
                $preparado = $wpdb->prepare($q, $title_page);
                $r         = $wpdb->get_var($preparado);
                
                if ($r == $title_page) continue;
                if (!is_page($title_page)): 
                    wp_insert_post([
                        'post_type'     => 'page',
                        'post_title'    => $title_page,
                        'post_status'   => 'publish',
                    ]);
                endif;
            endforeach;
    endforeach;
      
}, 10, 3);

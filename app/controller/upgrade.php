<?php defined('ABSPATH') || exit('No direct script access allowed');

add_action('init', function(){
    $updates = [
        [
            'flag'   => 'required_page',
            'value'  => '0.0.1',
            'action' => 'create_required_pages'
        ]
    ];

    foreach ($updates as $update) :
        if (!get_option($update['flag']) || version_compare(get_option($update['flag']), $update['value'],'<')) :
            do_action('kb/upgrade/' .$update['action'], $update['flag'], $update['value']);
            update_option($update['flag'], $update['value']);
           
        endif;
    endforeach;
});

add_action('kb/upgrade/create_required_pages',function(string $flag, string $version){
    /*$pages = [
        '0.0.1' => ['inicio'],
        '0.0.2' => ['Login']
    ];
    
    
    if (get_option($flag) < $version) :
       
        foreach ($pages as $key => $page) :
            if ($key > get_option($flag)) :
               
                foreach ($page as $one_page):
                       
                        wp_insert_post([
                            'post_type'     => 'page',
                            'post_title'    => $one_page,
                            'post_status'   => 'publish',
                        ]);
                endforeach;
            endif;
        endforeach;
    endif;*/
      
}, 10, 2);

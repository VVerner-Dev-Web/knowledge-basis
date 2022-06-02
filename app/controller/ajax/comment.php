<?php defined('ABSPATH') || exit('No direct script access allowed');

add_action('wp_ajax_kb/comment/insert-like', 'ajax_insertCommentLike');
function ajax_insertCommentLike(): void
{
    if (!wp_verify_nonce($_POST['_wpnonce'], 'kb/comment/insert-like')) :
        wp_send_json_error('Senha errada.');
    endif;

    $commentId = isset($_POST['comment_id']) ? (int) $_POST['comment_id'] : 0;
    
    if (!$commentId) :
        wp_send_json_error('Nenhum comentário localizado.');
    endif;

    $likes = (int) get_comment_meta($commentId, 'likes', true);
    $likes++;
    update_comment_meta($commentId, 'likes', $likes);

    wp_send_json_success($likes);        
}

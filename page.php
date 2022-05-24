<?php get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

<?php 
    global $post;

    try{
        VVerner\Views::getInstance()->getView('page/' .$post->post_name);
    }catch(Exception $e){
        the_content();
    }
?>

    
		
</div>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>

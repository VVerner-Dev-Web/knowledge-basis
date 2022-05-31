<?php defined('ABSPATH') || exit('No direct script access allowed');?>

<a class="question-glider-item glider-slide active visible" data-gslide="0" style="height: auto; width: 355px !important;">
    <!-- <div class="header">
        <span><?php /*echo get_the_date();*/ ?></span>
    </div> -->
    <div class="question">
        <h3><?php the_title(); ?></h3>
    </div>
    <p class="paragraph rem-90 mb-2">
            <?php
                $excerpt = get_the_excerpt();  
                $excerpt = substr( $excerpt, 0, 120); 
                $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                echo $result .' [...]';
            ?> 
        </p>
    <?php if (get_the_tags()) :?>
        <span class="tag is-curved category"><?php echo get_the_tags(); ?></span>
    <?php endif;?>
</a>

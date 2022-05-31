<?php defined('ABSPATH') || exit('No direct script access allowed');?>

 <div class="column is-4">
    <div class="topic-card">
        <h3 class="title is-6 is-leading">
            <?php the_title(); ?>
        </h3>
        <p class="paragraph rem-90 mb-2">
            <?php
                $excerpt = get_the_excerpt();  
                $excerpt = substr( $excerpt, 0, 120); 
                $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                echo $result .' [...]';
            ?> 
        </p>
        <a href="<?php the_permalink(); ?>"class="read-more">
            <span>Leia Mais</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:arrow-right">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"></path>
            </svg>
        </a>
    </div>
  </div>

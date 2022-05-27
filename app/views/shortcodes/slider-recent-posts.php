<?php defined('ABSPATH') || exit('No direct script access allowed'); 

if ($query->have_posts()) :?>

    <div id="row-1474111950"
                class="row slider slider-recent-posts large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-2 "
                data-packery-options="{&quot;itemSelector&quot;: &quot;.col&quot;, &quot;gutter&quot;: 0, &quot;presentageWidth&quot; : true}"
                style="position: relative; height: 350.359px;">
    <?php while ($query->have_posts()) :
                $query->the_post();?>
            <div class="col post-item" >
                <div class="col-inner">
                    <a href="<?php the_permalink();?>" class="plain">
                        <div class="box box-text-bottom box-blog-post has-hover">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:180px;">
                                    <?php echo get_the_post_thumbnail();?>    
                                </div>
                            </div>
                            <div class="box-text text-center">
                                <div class="box-text-inner blog-post-inner">
                                    <h5 class="post-title is-large "><?php the_title();?></h5>
                                    <div class="is-divider"></div>
                                    <?php 
                                        $excerpt = get_the_excerpt();  
                                        $excerpt = substr( $excerpt, 0, 160); 
                                        $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                    ?>
                                    <p class="from_the_blog_excerpt "><?php echo $result;?></p>
                                </div>
                            </div>
                            <div class="badge absolute top post-date badge-outline">
                                <div class="badge-inner">
                                    <span class="post-date-day"><?php echo get_the_date('j'); ?></span><br>
                                    <span class="post-date-month is-xsmall"><?php echo get_the_date('F');?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile;?>  
<?php endif;?>


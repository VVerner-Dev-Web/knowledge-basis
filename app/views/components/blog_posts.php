<?php defined('ABSPATH') || exit('No direct script access allowed'); 
$query = BlogList('development');
if ($query->have_posts()) :?>

    <div class="row  large-columns-1 medium-columns-1 small-columns-1 has-shadow row-box-shadow-2 ">
        <?php while ($query->have_posts()) :
                    $query->the_post();?>
                <div class="col post-item" >
                    <div class="col-inner">
                        <a href="<?php the_permalink();?>" class="plain">
                            <div class="box box-text-bottom box-vertical box-blog-post has-hover">
                                <div class="box-image" style="width:43%;">
                                    <div class="image-cover" style="padding-top:89%;">
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
<?else: echo 'Nenhum post encontrado';?>  
<?php endif;?>



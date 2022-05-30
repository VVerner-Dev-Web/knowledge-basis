<?php defined('ABSPATH') || exit('No direct script access allowed'); ?>
<main id="main" class="">
  <div id="content" role="main" class="content-area">
    <section class="section dark hero" >
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row align-center bg-polka" id="row-1422824135">
                <div id="col-339111800" class="col medium-6 small-12 large-6">
                    <div class="col-inner">
                        <div class="text text-center">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <section class="section dark">
            <?php $query = new WP_Query([
        'post_type' => ['development', 'management'],
        'order_by'  => 'post_date',
        'order'     => 'DESC',
        'posts_per_page' => 6
    ]);
if ($query->have_posts()) :?>

    <div id="row-1474111950"
                class="row slider slider-recent-posts large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-2 ">
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
<?else: echo 'Nenhum post encontrado';?>  
<?php endif;?>


            
        </div> 
    </section>
    
    

   <?php
   $query = new WP_Query([
        'post_type' => ['development', 'management'],
        'order_by'  => 'post_date',
        'order'     => 'DESC',
        'posts_per_page' => 6
    ]);
    
if ($query->have_posts()) :?>

    <div id="row-1474111950" class="row">
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
<?else: echo 'Nenhum post encontrado';?>  
<?php endif;?>


    
    
</main>
 
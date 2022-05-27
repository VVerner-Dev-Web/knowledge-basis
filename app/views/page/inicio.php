
<main id="main" class="">
  <div id="content" role="main" class="content-area">
    <section class="section dark hero" >
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row align-center" id="row-1422824135">
                <div id="col-339111800" class="col medium-6 small-12 large-6">
                    <div class="col-inner">
                        <div class="text text-center">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <?php echo do_shortcode('[vv-slider-recent-posts]');?> 
            
        </div> 
    </section>

   <section class="section dark section-blog-recents">
        <div class="bg section-bg fill bg-fill bg-loaded"></div>
        <div class="section-content relative">
            <?php VVerner\Views::getInstance()->getView('components/blog_posts'); ?>
        </div>
    </section>
    

       
    </div>
</main>
 
<?php get_header();?>

<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?php printf( __( 'Search Results for: %s', 'buson' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mt-30">
            <?php
             while(have_posts()){
                   the_post();                            
            ?>
                <article class="blog_item">
                    <div class="blog_item_img">
                        <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <a href="#" class="blog_item_date">
                            <h3><?php echo get_the_date('j');?></h3>
                            <p><?php echo get_the_date('M');?></p>
                        </a>
                    </div>

                    <div class="blog_details">
                        <a class="d-inline-block" href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                        <ul class="blog-info-link">
                            <li><a href="#"><i class="fa fa-user"></i> <?php  $category = get_the_category();
                                                                        foreach($category as $cat){
                                                                            echo $cat->name . " ";
                                                                        } ?></a></li>
                            <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?></a></li>
                        </ul>
                    </div>
                </article>
            <?php
                }
                wp_reset_postdata();
            ?> 
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>
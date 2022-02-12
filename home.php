<?php 
get_header();?>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/breadcumb');?>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                            $args = array( 'post_type' => 'post');
                            $query= new WP_Query($args);
                            while($query->have_posts()){
                                $query->the_post();                            
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
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget">
                            <?php dynamic_sidebar(' sidebar-1 ');?>   
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <?php get_footer();?>
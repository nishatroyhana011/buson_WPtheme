<?php
/**
 * Template Name: Home Page
 * 
 */
get_header();?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <?php 
                    $args= array(
                        'post_type' => 'slider',
                        'posts_per_page' => 3 
                    );
                    $query = new WP_Query($args);
                    while( $query-> have_posts() ){
                        $query-> the_post();
                    ?>        
                    <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <p><?php the_field('slider_subtitle'); ?></p>
                                    <h1><?php the_title(); ?></h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="<?php the_field('slider_button_url'); ?>" class="btn hero-btn"><?php the_field('slider_button_text'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                     }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- slider Area End-->
        <?php get_template_part('template-parts/about','us');?>             

        <!-- services Area Start-->
        <?php get_template_part('template-parts/service');?>  
        <!-- services Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3><?php the_field('request_title','option');?></h3>
                            <p><?php the_field('request_description','option');?></p>
                            <a href="<?php the_field('request_button_url','option');?>" class="btn trusted-btn"><?php the_field('request_button_text','option');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3><?php the_field('section_title','option');?></h3>
                            <p><?php the_field('section_description','option');?></p>
                            <a href="<?php the_field('section_button_url','option');?>" class="border-btn border-btn2"><?php the_field('section_button_text','option');?></a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="<?php the_field('case_image','option');?>" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href=""><?php the_field('case_title','option');?></a></h4>
                                    <p><?php the_field('case_description','option');?></p>
                                    <span><?php the_field('case_subtitle','option');?></span>
                               </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="<?php the_field('case_title','option');?>" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href=""><?php the_field('case_image','option');?></a></h4>
                                    <p><?php the_field('case_description','option');?></p>
                                    <span><?php the_field('case_subtitle','option');?></span>
                               </div>
                            </div>    
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2><?php echo esc_html__('Teams', 'buson'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teams',
                            'post_per_pages' => 4
                        );
                        $team = new WP_Query($args); 
                        while( $team-> have_posts() ){
                            $team->the_post();
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/testimonial');?>  
        <!-- Testimonial Start -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/recent','news');?>             
        <!-- Recent Area End-->

    </main>
<?php get_footer();?>   
<div class="services-area section-padding2">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2><?php echo esc_html__('Our Services', 'buson'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'service',
                    'post_per_pages' => 6
                );
                $service = new WP_Query($args); 
                while( $service-> have_posts() ){
                    $service->the_post();
                ?>    
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center">
                        <div class="services-icon">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="services-caption">
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
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
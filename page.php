<?php
get_header();?>

      <!-- slider Area Start-->
      <?php get_template_part('template-parts/breadcumb');?>
     <!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="feature-img">
                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <?php the_content();?>
         </div>
      </div>   
   </section>
   <!--================ Blog Area end =================-->

   <?php get_footer();?>
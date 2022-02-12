<?php
get_header();?>

      <!-- slider Area Start-->
      <?php get_template_part('template-parts/breadcumb');?>
     <!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title();?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> <?php  $category = get_the_category();
                                                                                    foreach($category as $cat){
                                                                                        echo $cat->name . " ";
                                                                                    } ?></li>
                        <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?> Comments</a></li>
                     </ul>
                     <p class="excert">
                        <?php the_content();?>
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php
                              $prev_post = get_previous_post();
                              $prev_post_title = get_the_title($prev_post->ID);
                              $prev_post_thumbnail = get_the_post_thumbnail($prev_post->ID, 'thumbnail');
                           ?>   
                           <div class="thumb">
                              <?php echo $prev_post_thumbnail;?>
                           </div>
                           <div class="detials">
                              <p><?php echo esc_html__('Prev Post', 'buson');?></p>
                              <h4><?php previous_post_link( '%link', $prev_post_title);?></h4>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <?php
                              $next_post = get_next_post();
                              $next_post_title = get_the_title($next_post->ID,);
                              $next_post_thumbnail = get_the_post_thumbnail($next_post->ID, 'thumbnail');
                           ?> 
                           <div class="detials">
                              <p><?php echo esc_html__('Next Post', 'buson');?></p>
                              <h4><?php previous_post_link( '%link', $next_post_title);?></h4>
                           </div>
                           <div class="thumb">
                              <?php echo $next_post_thumbnail;?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                  <?php $author_id = $post->post_author;?>
                     <img src="<?php echo get_avatar( $author_id, 32 ); ?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo get_the_author_meta( 'display_name',$author_id );?></h4>
                        </a>
                        <p><?php echo get_the_author_meta( 'description',$author_id );?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
               <?php
                  // If comments are open or we have at least one comment, load up the comment template.
                  if ( comments_open() || get_comments_number() ) :
                     comments_template();
                  endif;
               ?>                                                                     
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
   <!--================ Blog Area end =================-->

   <?php get_footer();?>
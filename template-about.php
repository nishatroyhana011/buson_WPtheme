<?php 
/**
 * Template Name: About Page
 * 
 */

get_header();?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/breadcumb');?>               
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/about','us');?>   
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/testimonial');?>  
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/recent','news');?>             
        <!-- Recent Area End-->

    </main>
<?php get_footer();?>  
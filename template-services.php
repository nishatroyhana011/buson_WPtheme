<?php 
/**
 * Template Name: Service Page
 * 
 */

get_header();?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/breadcumb');?>
        <!-- slider Area End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/service');?> 
        <!-- services Area End-->
    
        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/recent','news');?>   
        <!-- Recent Area End-->

    </main>
<?php get_footer(); ?>   
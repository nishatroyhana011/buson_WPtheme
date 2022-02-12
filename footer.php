<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <?php
                                $social_about = get_field('footer_about','option');
                            ?> 
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo $social_about['footer_logo']['url'];?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $social_about['footer_description'];?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php 
                                
                                foreach($social_about['footer_socials'] as $social){
                                ?>
                                    <a href="<?php echo $social['footer_social_url'];?>"><i class="<?php echo $social['footer_social_icon']['value'];?>"></i></a>
                               <?php
                               }?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <?php dynamic_sidebar(' footer-1 ');?>
                            </div>
                       </div>    
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                                <?php dynamic_sidebar(' footer-2 ');?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                           <?php
                                $footer_contact = get_field('footer_contact','option');
                            ?> 
                               <h4>Get in Touch</h4>
                               <ul>
                                <?php 
                                    foreach($footer_contact as $contact){
                                ?>
                                    <li><a href=""><?php echo $contact['footer_adderss'];?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
     
                
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><?php the_field('footer_copyright', 'option');?></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
    <?php wp_footer(); ?>    
    </body>
</html>
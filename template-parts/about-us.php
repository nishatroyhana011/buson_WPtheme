        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php the_field('image', 'option'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php the_field('title', 'option'); ?></h2>
                           <p><?php the_field('description', 'option'); ?></p>
                            <a href="<?php the_field('button_url', 'option'); ?>" class="btn trusted-btn"><?php the_field('button_text', 'option'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->
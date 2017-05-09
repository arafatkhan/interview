
        <?php

           $slider = new WP_Query( 
                 array(
                    'post_type' => 'slider', 
                    'posts_per_page' => -1
                    )
            );

         ?>
                
           
            <!-- post -->
          
        <div id="service" class="service-primary" data-bg-img="<?php echo get_template_directory_uri(); ?>/img/background-img/services-bg.jpg">

            <div class="vc-parent">
                <div class="vc-child">
                    <div class="service-slider">
                         <?php if ( $slider->have_posts() ) : while ($slider->have_posts() ) : $slider->the_post(); ?>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="image">
                                            <img src="<?php echo get_post_meta( get_the_ID(), 'product_image', true );?>" alt=""> 

                                        </div>
                                        <div class="price-tag bg-green">
                                            <p> <?php echo get_post_meta(get_the_ID(), 'start_at', true); ?><span><?php echo get_post_meta(get_the_ID(), 'start_money', true); ?><em>/mo</em></span></p>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Service Item Content Start -->
                                        <div class="content">
                                            <?php echo get_post_meta(get_the_ID(), 'ser_des', true); ?>
                                        </div>
                                        <!-- Service Item Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <!-- post navigation -->
                        <?php else: ?>
                        <!-- no posts found -->
                        <?php endif; ?> 
                        <!--item end -->
                    </div>
                </div>
            </div>
        </div>
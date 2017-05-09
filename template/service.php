 <div id="feature">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2><span>why choose us</span>our services</h2>
                </div>
                <!-- Section Title End -->
                <div class="row AdjustRow">
                    <!-- Feature Item Start -->
                    <?php 
                    $service = new  WP_Query(
                    array(
                            'post_type' => 'service',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        )
                    );

                    ?>
                     <?php if ( $service->have_posts() ) : while ($service-> have_posts() ) : $service->the_post(); ?>
                    <!-- post -->
                   
                    <div class="col-md-3 col-sm-6 feature-item">
                        <div class="icon">
                            <i class="<?php echo get_post_meta( get_the_ID(), 'ser_font_awesome', true );?>"></i>
                       
                        </div>
                        <div class="content">
                            <h3 class="heading"><?php echo get_post_meta( get_the_ID(), 'ser_title', true ); ?></h3>
                            <p class="desc"><?php echo get_post_meta( get_the_ID(), 'ser_small_text_area', true ); ?></p>
                        </div>
                    </div>
                      <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <?php endif; ?>
                    <!-- Feature Item End -->
                </div>
            </div>
        </div>
  <div id="banner" class="banner-primary" data-bg-img="<?php echo get_template_directory_uri(); ?>/img/background-img/banner-bg.jpg">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2><span>looking a premium quality</span>domain name?</h2>
                </div>
                <!-- Section Title End -->
                <!-- Banner Content Start -->
                <div class="banner-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="domain--search" data-form-validation="true">
                                <form action="http://billing.ywhmcs.com/domainchecker.php?systpl=OrDomainCV1" method="post" id="domainSearchForm" class="clearfix">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="domain" class="form-control" placeholder="eg. example" required>
                                            <span class="input-group-addon">
                                                <input type="submit" value="Search" class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row extensions">
                                        
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".com" id="extCom" checked>
                                            <label for="extCom">.com</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".net" id="extNet">
                                            <label for="extNet">.net</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".org" id="extOrg">
                                            <label for="extOrg">.org</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".info" id="extInfo">
                                            <label for="extInfo">.info</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".biz" id="extBiz">
                                            <label for="extBiz">.biz</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".us" id="extUs">
                                            <label for="extUs">.us</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="extension-slider-holder">
                                <div class="extension-slider owl-carousel text-center text-white" data-items="5">

                                    <?php 

                                      $domain_post_type = new WP_Query(array(

                                         'post_type' => 'domain',
                                         'posts_per_page' => 2

                                        ));
                                     ?>
                                    <?php if ( $domain_post_type->have_posts() ) : while ( $domain_post_type->have_posts() ) : $domain_post_type->the_post(); ?>

                                      <?php $data = get_post_meta( get_the_ID(), 'domain_name_cost', true ); ?>

                                      <?php $dataright = get_post_meta( get_the_ID(), 'right_domain_group', true ); ?>
                                      
                                     <?php endwhile; ?>
                                     <!-- post navigation -->
                                     <?php else: ?>
                                     <!-- no posts found -->
                                     <?php endif; ?> 

                                        <?php foreach ($data as $value) {?>
                                    <div class="item">
                                             <p class="ext--name"><?php  echo $value['domain_name']; ?></p>
                                            <p class="ext--price"><?php  echo $value['per_domain_cost']; ?><span>/yr</span></p>
                                       </div>
                                       <?php }

                                     ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="domain--addons">
                                <h2><?php echo get_post_meta( get_the_ID(), 'Free_domain_cap', true ); ?></h2>
                                
                                <ul>
                                    <?php foreach ($dataright as $value) { ?>
                                        <li>
                                        <i class="<?php echo $value['right_font_awesome']; ?>"></i>
                                        <h3><?php echo $value['right_heading_text']; ?></h3>
                                        <p><?php echo $value['right_textarea_text']; ?></p>
                                    </li>
                                   <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Content End -->
            </div>
        </div>
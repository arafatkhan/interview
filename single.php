<?php get_header( ); ?>
 <?php include('template/slider.php') ?>
    <div class="container">
	 	<div class="row">
			 <div class="col-md-12 text-center">
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				 <!-- post -->
				 <h2><?php the_title(); ?></h2>
				 <?php the_post_thumbnail(array(800, 400)); ?>
					<p style="text-align: center; padding:30px auto;"><?php the_content(); ?></p>
				 <?php endwhile; ?>
				 <!-- post navigation -->
				 <?php else: ?>
				 <!-- no posts found -->
				 <?php endif; ?> 
			 </div>
	    </div>
		
    </div>
<?php get_footer(); ?>
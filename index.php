<?php get_header(); ?>  

<!-- header close -->

<!-- content begin -->
<div id="content" class="no-bottom  ">
	 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  
	<div class="homesmall_thumb">	<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('slider_thumb', array( 'class'	=> "img-responsive")); ?></a> </div>
	<div class="title_post"><h2> <?php the_title(); ?></h2>  </div>
	<div class="content_post"> <?php the_content();  ?></div>
   
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.','lalutheme'); ?></p>
	<?php endif; ?>
	
	
<?php get_footer(); ?>
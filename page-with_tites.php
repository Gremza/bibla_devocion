<?php
/*
Template Name: With header title
*/
get_header();  
?>  
 

	<div   class="container  page  ">
	 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <div class="title"><h2><span><?php the_title();?></span></h2></div>
  
  <?php the_content();  ?> 
   
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.','lalutheme'); ?></p>
	<?php endif; ?>
	</div>
<?php get_footer();  ?>


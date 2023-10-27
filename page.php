<?php get_header(); ?>  

<!-- header close -->

<!-- content begin -->
<div   class="container  page notit  ">
	 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  
  
  <?php the_content();  ?> 
   
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.','lalutheme'); ?></p>
	<?php endif; ?>
	</div>
	
<?php get_footer();  ?>


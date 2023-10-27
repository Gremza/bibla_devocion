<?php get_header(); ?>  
<div class="row post"> 
    <div class="container">
   	<h1><?php the_title(); ?></h1> 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();  ?> 
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.','lalutheme'); ?></p>
	<?php endif; ?>         
	         
	</div>
</div>
 
<?php get_footer(); ?>
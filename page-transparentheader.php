<?php
/*
Template Name: Transparent header
*/
get_header();  
?>  
<style>
 #headergrad{
 
 position: absolute;
height: 150px;
z-index: 9999;
width: 100%;
}
</style>
<!-- header close -->

<!-- content begin -->
<div   class="container-fluid   page no-padding  ">
	 <div class="row">
	 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  
  
  <?php the_content();  ?> 
   
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.','lalutheme'); ?></p>
	<?php endif; ?>
	</div>	</div>
	
<?php get_footer();  ?>


<?php
get_header(); ?> 
<div class="container">
<h1 class="titullfaqe"> <?php single_cat_title( ); ?></h1>  



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
<ul>
     <li>
        <div class="no-gutter col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="posti">
            <div class="imazhet">
                <a style="display:none;" class="btn btn-orange btn-lighter social-icon2" title="Share on Facebook" href="#" target="_blank" rel="nofollow" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+'<?php the_permalink()?>','facebook-share-dialog','width=626,height=436');return false;"><i class="fa fa-facebook"></i></a>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array( 'class'	=> "img-responsive")); ?></a>
                <div class="clear10"></div>
               
                    <h2 class="titull">  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h2>
                  </div> 
            </div>       
        </div>
    </li> 
</ul>    
<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.','gremza_university'); ?></p>
<?php endif; ?>  
        
</div>        
<?php get_footer(); ?>
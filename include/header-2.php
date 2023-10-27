<header> <!-- header Full width -->
<?php   $topchoice = get_theme_mod( 'gr_top_checkbox_settings', '' ); if ($topchoice == true) { ?>  
<div class="top ">
	<div class="container ">
		<div class=" top-left col-xs-6 no-padding"> 	<?php dynamic_sidebar( 'top_left' ); ?> 	 </div>
		<div class="top-right  col-xs-6 no-padding"> <?php require get_template_directory() . '/include/socialblock.php'; ?>		<?php dynamic_sidebar( 'top_right' ); ?>  </div>
	</div>
</div>
<?php }   ?> 
<div   <?php   $stiky = get_theme_mod( 'gr_stick_checkbox_settings', '' ); if ($stiky == true) { ?> id="headbar" <?php }   ?> > 
 <div class="container">
    <div class="row">    
	 
    <div class="col-lg-12 no-padding">
        <!-- logo begin --> 
        <div id="logo" class="col-lg-4 col-xs-8 no-padding">
            <a href="<?php  echo home_url(); ?>">
            <img class="img-responsive" src="<?php echo get_theme_mod('gr_logo');?>"   alt="">
            </a>
        </div>
         <!-- logo close -->
         
		<div class="headerright col-lg-8  hidden-xs right">	
			<div class="    right">	
		  	<?php dynamic_sidebar( 'right_header' ); ?> 
			</div>
		</div>
 
	<div class="col-lg-12 no-padding">
	<nav class="navbar navbar-default "  >
	<div class="container-fluid  "> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gr_menu_collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			 </button>
	    </div> <?php
				wp_nav_menu( array(
					'menu'              => 'header-menu',
					'theme_location'    => 'header-menu',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse ',
					'container_id'      => 'gr_menu_collapse',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
					);
				?>
	</div>
</nav>
</div>
</div>
</header>
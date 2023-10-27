<header><!-- header right -->
  <?php   $topchoice = get_theme_mod( 'gr_top_checkbox_settings', '' ); if ($topchoice == true) { ?>  
<div class="top ">
	<div class="container no-padding ">
		<div class="top-left col-xl-8 col-lg-8  col-md-8 col-sm-10 col-xs-8  no-padding"> 	<?php dynamic_sidebar( 'top_left' ); ?> 	 </div>
		<div class="top-right col-xl-4 col-lg-4  col-md-4 col-sm-2 col-xs-4  no-padding"> <?php require get_template_directory() . '/include/socialblock.php'; ?>		<?php dynamic_sidebar( 'top_right' ); ?>  </div>
	</div>
</div> 
<?php }   ?> 
<div   <?php   $stiky = get_theme_mod( 'gr_stick_checkbox_settings', '' ); if ($stiky == true) { ?> id="headbar" <?php }   ?> > 
  <div  class="container">
    <div class="row">    <div class="col-xl-12 col-lg-12 col-xs-12 col-md-12 col-sm-12 no-padding">
        <!-- logo begin --> 
        <div id="logo" class="col-xl-2 col-lg-2  col-md-3  col-sm-3 col-xs-8  no-padding">
            <a href="<?php  echo home_url(); ?>">
            <img class="img-responsive" src="<?php echo get_theme_mod('gr_logo');?>"   alt="">            </a>        
		</div>
         <!-- logo close -->
		<div class="headerright col-xl-10 col-lg-10 col-sm-8 col-md-8 ">		 
			<nav class="navbar navbar-default   "  >
				<div class="container-fluid  "> 
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
				</div>
			</nav>
		</div>
    <!-- <div class="searchbar   col-lg-2  col-md-2 hidden-xs no-padding">
     <?php if ( is_active_sidebar( 'right_header' ) ) : ?>
        <?php dynamic_sidebar( 'right_header' ); ?>
        <?php endif; ?>
 																				 
        </div> -->
</div>
</div>
</div></div>
</header>
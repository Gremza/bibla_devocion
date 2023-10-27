<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

<link rel="shortcut icon" type="image/jpg" href="<?php if (get_theme_mod( 'gr_favicon' )) : echo get_theme_mod( 'gr_favicon'); else: echo get_template_directory_uri().'/img/favicon.png'; endif; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 

 <!-- CSS Files
    ================================================== -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<?php get_template_part( 'include/styles' ); ?> 


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=<?php  echo  get_theme_mod( 'gr_font_select_settings', 'arial' );  ?> " rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=<?php  echo  get_theme_mod( 'gr_h3_select_settings', 'arial' );  ?> " rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=<?php  echo  get_theme_mod( 'gr_h1_select_settings', 'arial' );  ?> " rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=<?php  echo  get_theme_mod( 'gr_h2_select_settings', 'arial' );  ?> " rel="stylesheet"> 

<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div id="wrapper">
<!-- header begin -->

        
    <?php
    
    $header=get_theme_mod( 'gr_header_mode_settings', '1' );  
    get_template_part( 'include/header', $header);    
    get_template_part( 'include/styles',$header ); 
    ?> 

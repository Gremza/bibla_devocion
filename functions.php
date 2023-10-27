<?php
require_once dirname( __FILE__ ) . '/include/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'lalutheme_register_required_plugins' );
 
function lalutheme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Slider Revolution', // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/revslider.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'WPBakery Page Builder', // The plugin name.
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/js_composer.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '6.9.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'Mega Addon for WPBakery', // The plugin name.
			'slug'               => 'mega-addons', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/mega.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '10.6.9', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		 
	 
	 
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => false,
		),

	); 
	$config = array(
		'id'           => 'lalutheme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		 
	);

	tgmpa( $plugins, $config );
}
 
 
require get_template_directory() . '/update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'updatecheck.json',
    __FILE__,
    'bibladevecion'
);
  
require get_template_directory() . '/include/wp_bootstrap_navwalker.php';
require get_template_directory() . '/include/costumizer.php';
 function gu_add_image_responsive_class($content){
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive img-shadow"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}

add_filter('the_content', 'gu_add_image_responsive_class');
   
//widgets
function gu_widgets_init() {

    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Top Right',
		'id'            => 'top_right',
	) ); 	
	    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Top Left',
		'id'            => 'top_left',
	) ); 
	   register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Header',
		'id'            => 'right_header',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer Menu',
		'id'            => 'footermenu',
	) ); 
	 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 1  ',
		'id'            => 'footer1',
	) ); 
		 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 2  ',
		'id'            => 'footer2',
	) ); 
		 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 3  ',
		'id'            => 'footer3',
	) ); 
	register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 4  ',
		'id'            => 'footer4',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Related posts',
		'id'            => 'related',
	) ); 
	  register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Left Sub Footer',
		'id'            => 'left_subfooter',
	) ); 
 	  register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Sub Footer',
		'id'            => 'right_subfooter',
	) ); 
 

}
add_action( 'widgets_init', 'gu_widgets_init' );
 //menu
function gu_register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu','lalutheme' ),
		'footer-menu' => __( 'Footer Menu','lalutheme' ),
   
	  )
	);
  }
  add_action( 'init', 'gu_register_my_menus' );

//navigation
function gu_posts_nav() {
	if( is_singular() )
		return;
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;
	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="navigation"><ul>' . "\n";
	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li></li>';
	}
/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
// video responsive

function gn_alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'gn_alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'gn_alx_embed_html' );
  
function gu_scripts_with_jquery()
{
  // wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . /js/jquery.min.js',   true ); 
 
  wp_enqueue_script( 'jquery',  get_template_directory_uri() .'/js/jquery.min.js'  , array(),'', false );
  wp_enqueue_script( 'bootstrap',  get_template_directory_uri() .'/js/bootstrap.js'  , array(),'', true ); 
  wp_enqueue_script( 'scripts',  get_template_directory_uri() .'/js/scripts.js'  , array(),'', true ); 
  wp_enqueue_script( 'fontawesome',  'https://use.fontawesome.com/674fa29360.js'  , array(),'', true ); 
  
}

add_action( 'wp_footer', 'gu_scripts_with_jquery' );
  
function gr_enqueue_styles() {
        
    wp_enqueue_style( 'bootstrap',   get_template_directory_uri() . '/css/bootstrap.css',array(), '20130608' );
    wp_enqueue_style(  'bootstrapxxl',  get_template_directory_uri() . '/css/bootstrapxxl.css' ,array(), '20130608' );
    wp_enqueue_style( 'desktop',   get_template_directory_uri() . '/css/desktop.css',array(), '20130608' );
    wp_enqueue_style(  'menu',  get_template_directory_uri() . '/css/menu.css' ,array(), '20130608');
    wp_enqueue_style( 'mobile',   get_template_directory_uri() . '/css/mobile.css',array(), '20130608' );
    wp_enqueue_style( 'tablet',   get_template_directory_uri() . '/css/tablet.css' ,array(), '20130608');
    wp_enqueue_style( 'woocommerce',   get_template_directory_uri() . '/css/woocommerce.css' ,array(), '20130608');
    
}
add_action( 'wp_footer', 'gr_enqueue_styles' );   
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class=" dropdown"/','/ class=" " /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 
 
function  custom_nav_menu_link_attributes( $atts, $item, $args ){
//	if ( !wp_is_mobile() && $args->has_children  ) {
		 	  $atts['href'] = !empty( $item->url ) ? $item->url : '';
//	  }
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 99, 3 );
  
  function func_make_menu_clickable(){
  if ( !wp_is_mobile() ) { ?>
	<script type="text/javascript">
	  jQuery(document).ready(function($){      
		if($(window).width() >= 767){
		  $('li.menu-item a').click(function(){
			window.location = $(this).attr('href');
		  });
		}
	  });
	</script>
	<style type="text/css">
	@media all and (min-width: 767px) {
	.menu-item-has-children:hover > ul {
	display: block;
  }
  }
	</style>
  <?php }
  }
  add_action('wp_footer', 'func_make_menu_clickable', 1);


 //logo in login
 

if (!function_exists('gr_login_logo')) {
    function gr_login_logo()
    {
        $logo_url = wp_get_attachment_url(get_theme_mod('gr_logo'));
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo get_theme_mod('gr_logo'); ?>)!important;
                background-size: contain;
                margin: auto;
                width: 100%;
            }
        </style>
        <?php
    }
}
add_action('login_head', 'gr_login_logo');


function gr_logo()     {
	$logo_url = wp_get_attachment_url(get_theme_mod('gr_logo'));
	echo '<a href='.get_site_url().'><img src='.get_theme_mod('gr_logo').' style="max-width:200px; class="img-responsive"></a>' ;
	 
}
add_shortcode('logo','gr_logo');  


 //single product template
 //
 function gr_single_prod($single_template) {
 global $post;

 if ($post->post_type == 'product') {
      $single_template = dirname( __FILE__ ) . '/woocommerce/single-product.php';
 }
 return $single_template;
}
add_filter( 'single_template', 'gr_single_prod' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
 



//************ SHORTCODES */
//SITE URL
add_action( 'init', function() {

	add_shortcode( 'site_url', function( $atts = null, $content = null ) {
		return site_url();
	} );

} );
 
  function copyright() { 
 
	// Things that you want to do. 
	$message = date('Y'). ' All right reserverd © <a href=' .   do_shortcode('[site_url]') .'>'. get_bloginfo() .  '</a> '; 
	 
	// Output needs to be return
	return $message;
	} 
	// register shortcode
	add_shortcode('copyright', 'copyright'); 


	function gremza() { 
 
		// Things that you want to do. 
		$message =  ' Design by <a href="https://gremza.com"> Gremza </a> '; 
		 
		// Output needs to be return
		return $message;
		} 
		// register shortcode
		add_shortcode('gremza', 'gremza'); 
	
	// evince.uk visual composer activation nag remover
function admin_css() {
	echo '<style type="text/css">
   #vc_license-activation-notice {display:none !important;}
	</style>';
   }
   add_action('admin_head', 'admin_css'); 
	 
   function gr_social($params = array()) {

	extract(shortcode_atts(array(
	'file' => 'default' //Use the real file name here
	), $params));
	
	ob_start();
	include( dirname( __FILE__ ) . '/include/socialblock.php');
	 
	 
	
	return ob_get_clean();
	}
	
	add_shortcode('social','gr_social');
		

//excertp length
function gr_excerpt_length( $length ) {
    return get_theme_mod( 'gr_excerpt_settings', '20' ) ;
}
add_filter( 'excerpt_length', 'gr_excerpt_length');

function turn_off_feed() {
	wp_die( __('Our Feed is currently off,please visit our <a href=”'. get_bloginfo('insert_url_here') .'”>homepage</a>!') );
	}
	
	add_action('do_feed', 'turn_off_feed', 0);
	add_action('do_feed_rdf', 'turn_off_feed', 1);
	add_action('do_feed_rss', 'turn_off_feed', 1);
	add_action('do_feed_rss2', 'turn_off_feed', 1);
	add_action('do_feed_atom', 'turn_off_feed', 1);
	add_action('do_feed_rss2_comments', 'turn_off_feed', 1);
	add_action('do_feed_atom_comments', 'turn_off_feed', 1);
	
//lalutheme page on admin


add_action('admin_menu', 'lalatheme_page');
	
	function lalatheme_page()
	{
		// Add the top-level admin menu
		$page_title = 'Lalu theme';
		$menu_title = 'Lalu theme';
		$capability = 'manage_options';
		$menu_slug = 'lalatheme-settings';
		$function = 'lalathemesettings'; 
		$icon =  'data:image/svg+xml;base64,' . base64_encode( '<svg
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 20 20"
	 >
	   <path
		  style="fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.31579"
		  d="M 9.9999995,0.9473685 C 2,5.4736845 2,5.4736845 2,5.4736845 2,14.526315 2,14.526315 2,14.526315 9.9999995,19.052631 9.9999995,19.052631 9.9999995,19.052631 18,14.526315 18,14.526315 18,14.526315 18,5.4736845 18,5.4736845 18,5.4736845 Z m 0,15.0526305 c -3.3684207,0 -5.9999989,-2.631578 -5.9999989,-5.9999995 0,-3.368421 2.6315782,-6 5.9999989,-6 3.3684205,0 6.0000005,2.631579 6.0000005,6 0,3.3684215 -2.63158,5.9999995 -6.0000005,5.9999995 z"
		  id="path17" />
	   <path
		  style="fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.350878"
		  d="m 13.62573,10.052631 c 0,1.988305 -1.637426,3.62573 -3.6257305,3.62573 -1.9883036,0 -3.6257309,-1.637425 -3.6257309,-3.62573 0,-1.988304 1.6374273,-3.625731 3.6257309,-3.625731 1.9883045,0 3.6257305,1.637427 3.6257305,3.625731 z"
		  id="path19" />
	 </svg>' );

		add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

		 
	}
function lalathemesettings()
	{
?>

<div class="container">
	<h1> Lalu theme shortcodes</h1>
<div class="row">
	<div class="col-lg-12"><h2>copyright text on footer, put as a shortcode to footer left widget</h2></div>
	 <div class="col-lg-12">
		<code> [copyright]</code>
	</div> 
	</div>
<div class="row">
		<div class="col-lg-12"><h2>site_url link</h2></div>
	 <div class="col-lg-12">
		<code> [site_url]</code>
	</div> 
	</div>
<div class="row">
		<div class="col-lg-12"><h2>social links and icons</h2></div>
 	<div class="col-lg-12">
		<code> [social]</code>
	</div> 
	</div>
 
	<div class="row">
		<div class="col-lg-12"><h2>Insert website logo with home link</h2></div>
 	<div class="col-lg-12">
		<code> [logo]</code>
	</div> 
	</div>
	
	
	
</div>
<?php
}

//////////////////////////////////////////////
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

////remove comments////
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
/////remove comments end/////



add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
   .njt-fs-file-manager{
	z-index:99999;
	position:relative;
}
  </style>';
}







?>
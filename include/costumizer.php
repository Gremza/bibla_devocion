<?php
function gr_customize_register( $wp_customize ) {

        // Create our panels
        //panel gr_header
        $wp_customize->add_panel( 'gr_header', array( 
            'title'          => __('Theme Settings', 'lalutheme'),
            'description'    => __('Things on header', 'lalutheme'),
            'priority'          => 1, 
        ) );
        $wp_customize->add_section( 'gr_logo' , array(
            'title'             => __('Header costumizer', 'lalutheme'),
            'priority'          => 1, 
            'panel'             => 'gr_header',
        ) );
        $wp_customize->add_setting( 'gr_logo' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gr_logo_control', array(
            'label'      => __('Logo', 'lalutheme'), 
            'section'    => 'gr_logo',
            'settings'   => 'gr_logo',
            'priority'   => 1,
            'type'       => 'image',
        ) ));
    
        $wp_customize->add_setting( 'gr_favicon' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gr_favicon_control', array(
            'label'      => __('Favicon', 'lalutheme'), 
            'section'    => 'gr_logo',
            'settings'   => 'gr_favicon',
            'priority'   => 2,
            'type'       => 'image',
        ) ));
        $wp_customize->add_setting( 'gr_logo_width_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
            'priority'   => 3,
        ) );
    $wp_customize->add_control( 'gr_logo_width_settings', array(
    'type' => 'text',
    'section' => 'gr_logo', // Add a default or your own section
    'label' => __( 'Logo Width in px' ),
    'description' => __( 'No px needed to be add at the end. Expamle 100' ),
    'default'=>'',
    ) );

    //excerpt lengh
    
    $wp_customize->add_setting( 'gr_excerpt_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );   
    $wp_customize->add_control( 'gr_excerpt_settings', array(
        'type' => 'text',
        'section' => 'gr_logo', // Add a default or your own section
        'label' => __( 'Excerpt length' ),
        'settings' => 'gr_excerpt_settings',
        'description' => __( 'Length in words number.' ),
        'default'=>'20',
        'priority'   => 2,
        ) );

    //subfooter text size
    
    $wp_customize->add_setting( 'gr_subfooter_text_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );   
    $wp_customize->add_control( 'gr_subfooter_text_size_settings', array(
        'type' => 'text',
        'section' => 'gr_logo', // Add a default or your own section
        'label' => __( 'subfooter text size' ),
        'settings' => 'gr_subfooter_text_size_settings',
        'description' => __( '' ),
        'default'=>'20',
        'priority'   => 3,
        ) );
    //social links
    //fb
    $wp_customize->add_section( 'gr_social' , array(
        'title'             => __('Social settings', 'lalutheme'),
        'priority'          => 12, 
        'panel'             => 'gr_header',
    ) );  
    $wp_customize->add_setting( 'gr_social_fb_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     

    $wp_customize->add_control( 'gr_social_fb_settings', array(
    'type' => 'text',
    'section' => 'gr_social', // Add a default or your own section
    'label' => __( 'Facebook link' ),
    'settings' => 'gr_social_fb_settings',
    'default'=>'',
    'priority'          => 1,
    ) );

    //ig
    
    $wp_customize->add_setting( 'gr_social_ig_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     
    $wp_customize->add_control( 'gr_social_ig_settings', array(
    'type' => 'text',
    'section' => 'gr_social', // Add a default or your own section
    'label' => __( 'Instagram link' ),
    'settings' => 'gr_social_ig_settings',
    'default' => '',
    'priority'          => 2,
    ) );



    //yt
    
    $wp_customize->add_setting( 'gr_social_yt_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
            'default' => '',
        ) );     
    $wp_customize->add_control( 'gr_social_yt_settings', array(
    'type' => 'text',
    'section' => 'gr_social', // Add a default or your own section
    'label' => __( 'Youtube link' ),
        'settings' => 'gr_social_yt_settings',
        'priority'          => 3,
    ) );
 
    //linkedin
    
    $wp_customize->add_setting( 'gr_social_ln_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     
    $wp_customize->add_control( 'gr_social_ln_settings', array(
    'type' => 'text',
    'section' => 'gr_social', // Add a default or your own section
    'label' => __( 'linkedin link' ),
    'settings' => 'gr_social_ln_settings',
    'priority'          => 4,
    ) );
 
//other link
$wp_customize->add_setting( 'gr_social_other_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
    'default' => '',
) );     
$wp_customize->add_control( 'gr_social_other_settings', array(
'type' => 'text',
'section' => 'gr_social', // Add a default or your own section
'label' => __( 'Other link' ),
'settings' => 'gr_social_other_settings',
'priority'          => 5,
) );

$wp_customize->add_setting( 'gr_social_other_img_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gr_social_other_img_control', array(
    'label'      => __('other link Logo', 'lalutheme'), 
    'section'    => 'gr_social',
    'settings'   => 'gr_social_other_img_settings',
    'priority'   => 6,
    'type'       => 'image',
    ) ));

 ///////////////////////////


 $wp_customize->add_setting( 'gr_headerright_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
    'default' => '',
) );   
 
        
        $wp_customize->add_control( 'gr_headerright_settings', array(
        'type' => 'text',
        'section' => 'gr_logo', // Add a default or your own section
        'label' => __( 'Header Right Margin Top' ),
        'description' => __( 'No px needed, exmaple value: 35 or 50' ),
        'priority'   => 1,
        ) );
        
        
        
        $wp_customize->add_setting( 'gr_body_background_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_body_background_settings', array(
            'label' => 'Body Background',
            'section' => 'gr_colors',
            'settings' => 'gr_body_background_settings'
    
        )));
        $wp_customize->add_setting( 'gr_header_background_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_header_background_settings', array(
            'label' => 'header Background Color',
            'section' => 'gr_logo',
            'settings' => 'gr_header_background_settings'
    
        )));
            $wp_customize->add_setting( 'gr_toggle_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_toggle_settings', array(
            'label' => 'Color of toggle menu (hamburger)',
            'section' => 'gr_logo',
            'settings' => 'gr_toggle_settings'
    
        )));
            $wp_customize->add_setting( 'gr_menu_color_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_color_setting', array(
            'label' => 'Menu Color',
            'section' => 'gr_logo',
            'settings' => 'gr_menu_color_setting'
    
        )));
    
        $wp_customize->add_setting( 'gr_body_color_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_body_color_setting', array(
            'label' => 'Body text  color  ',
            'section' => 'gr_colors',
            'settings' => 'gr_body_color_setting'
    
        )));
    
    $wp_customize->add_setting( 'gr_header_mode_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_header_mode_settings', array(
        'label'      => __('Navigation Options', 'lalutheme'),
        'section'    => 'gr_logo',
        'settings'   => 'gr_header_mode_settings',
        'type'       => 'select',
            'choices'    => array( 
            '1' => __('Menu right', 'lalutheme'),
            '2' => __('Full length menu', 'lalutheme'),
            '3' => __('Trasparent Header', 'lalutheme'),
            
            
            ),
    ) );

    
        $wp_customize->add_setting( 'gr_menu_color_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_color_setting', array(
            'label' => 'Menu Color',
            'section' => 'gr_logo',
            'settings' => 'gr_menu_color_setting',
    
        )));
    

        $wp_customize->add_setting( 'gr_submenu_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_submenu_setting', array(
            'label' => 'Submenu Background Color',
            'section' => 'gr_logo',
            'settings' => 'gr_submenu_setting'
    
        )));
    


        $wp_customize->add_setting( 'gr_menu_sub_color_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_sub_color_setting', array(
            'label' => 'Submenu   Color',
            'section' => 'gr_logo',
            'settings' => 'gr_menu_sub_color_setting',
    
        )));
    
        
        $wp_customize->add_setting( 'gr_menu_active_setting' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_active_setting', array(
            'label' => 'Active Menu Color',
            'section' => 'gr_logo',
            'settings' => 'gr_menu_active_setting',
    
        )));
 // Add sticky menu

 //add setting
        $wp_customize->add_setting( 'gr_stick_checkbox_settings', array(
            'default' => '',
        ));

        //add control
        $wp_customize->add_control( 'gr_stick_checkbox_control', array(
            'label' => 'Activate sticky menu',
            'type'  => 'checkbox', // this indicates the type of control
            'section' => 'gr_logo',
            'settings' => 'gr_stick_checkbox_settings'
        ));
         


    //content

    $wp_customize->add_setting( 'gr_font_content_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_content_select_settings', array(
    'label'      => __('Font Contnet Selector', 'lalutheme'),
    'section'    => 'gr_logo',
    'settings'   => 'gr_font_content_select_settings',
    'type'       => 'select',
        'choices'    => array( 
        'Raleway' => __('Raleway', 'lalutheme'),
        'Lato' => __('Lato', 'lalutheme'),
        'Monda' => __('Monda', 'lalutheme'),
        'Anton' => __('Anton', 'lalutheme'),
        'Staatliches' => __('Staatliches', 'lalutheme'),
        'Kalam' => __('Kalam', 'lalutheme'),
        'Merienda' => __('Merienda', 'lalutheme'),
        'Mukta' => __('Mukta', 'lalutheme'),
        'Roboto' => __('Roboto', 'lalutheme'),
        'Bebas+Neue&display=swap'=> __('Bebas Neue', 'lalutheme'),
        'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),
        'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
        'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
        'corporates'=> __('corporates', 'lalutheme'),
        'corporatea'=> __('corporatea', 'lalutheme'),
        'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
        ),
    ) );

    $wp_customize->add_setting( 'gr_font_content_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_content_weight_settings', array(
    'label'      => __('Font Content Weight', 'lalutheme'),
    'section'    => 'gr_logo',
    'settings'   => 'gr_font_content_weight_settings',
    'type'       => 'select',
        'choices'    => array( 
        'normal' => __('Normal', 'lalutheme'),
        'Bold' => __('bold', 'lalutheme'),
        'lighter' => __('Lighter', 'lalutheme'),
        '100' => __('100', 'lalutheme'),
        '200' => __('200', 'lalutheme'),
        '300' => __('300', 'lalutheme'),
        '400' => __('400', 'lalutheme'),
        '800' => __('800', 'lalutheme'),
        
        
        ),
    ) );

    $wp_customize->add_setting( 'gr_font_content_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_content_size_settings', array(
    'type' => 'text',
    'section' => 'gr_logo', // Add a default or your own section
    'label' => __( 'Font Size Content' ),
    'description' => __( 'font must be in number expamle 12' ),
    'priority'   => 1,
    ) );




    //menuja

    $wp_customize->add_setting( 'gr_font_select_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_font_select_control', array(
        'label'      => __('Menu Font Selector', 'lalutheme'),
        'section'    => 'gr_logo',
        'settings'   => 'gr_font_select_settings',
        'type'       => 'select',
            'choices'    => array( 
            'Raleway' => __('Raleway', 'lalutheme'),
            'Lato' => __('Lato', 'lalutheme'),
            'Monda' => __('Monda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Staatliches' => __('Staatliches', 'lalutheme'),
            'Kalam' => __('Kalam', 'lalutheme'),
            'Merienda' => __('Merienda', 'lalutheme'),
            'Mukta' => __('Mukta', 'lalutheme'),
            'Roboto' => __('Roboto', 'lalutheme'),
            'Bebas+Neue&display=swap'=> __('Bebas Neue', 'lalutheme'),
            'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),          
            'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
                'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
                'corporates'=> __('corporates', 'lalutheme'),
                'corporatea'=> __('corporatea', 'lalutheme'),
                'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
            ),
    ) );
$wp_customize->add_setting( 'gr_position_select_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_position_select_control', array(
        'label'      => __('Menu Position Left/Right', 'lalutheme'),
        'section'    => 'gr_logo',
        'settings'   => 'gr_position_select_settings',
        'type'       => 'select',
            'choices'    => array( 
            'Left' => __('Left', 'lalutheme'),
            'Right' => __('Right', 'lalutheme'), 
            ),
    ) );

    $wp_customize->add_setting( 'gr_font_weight_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_font_weight_settings', array(
        'label'      => __('Font Weight', 'lalutheme'),
        'section'    => 'gr_logo',
        'settings'   => 'gr_font_weight_settings',
        'type'       => 'select',
            'choices'    => array( 
            'normal' => __('Normal', 'lalutheme'),
            'Bold' => __('bold', 'lalutheme'),
            'lighter' => __('Lighter', 'lalutheme'),
            '100' => __('100', 'lalutheme'),
            '200' => __('200', 'lalutheme'),
            '300' => __('300', 'lalutheme'),
            '400' => __('400', 'lalutheme'),
            '800' => __('800', 'lalutheme'),
            
            
            ),
    ) );

    $wp_customize->add_setting( 'gr_font_size_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_font_size_settings', array(
    'type' => 'text',
    'section' => 'gr_logo', // Add a default or your own section
    'label' => __( 'Font Size Menu' ),
    'description' => __( 'font must be in number expamle 12' ),
    'priority'   => 3,
    ) );


    //top
     //add setting
     $wp_customize->add_setting( 'gr_top_checkbox_settings', array(
        'default' => '',
    ));

    //add control
    $wp_customize->add_control( 'gr_top_checkbox_control', array(
        'label' => 'Activate Header Top',
        'type'  => 'checkbox', // this indicates the type of control
        'section' => 'gr_logo',
        'settings' => 'gr_top_checkbox_settings'
    ));
     
    $wp_customize->add_setting( 'gr_font_top_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_top_select_settings', array(
    'label'      => __('Top Font Selector', 'lalutheme'),
    'section'    => 'gr_logo',
    'settings'   => 'gr_font_top_select_settings',
    'type'       => 'select',
        'choices'    => array( 
        'Raleway' => __('Raleway', 'lalutheme'),
        'Lato' => __('Lato', 'lalutheme'),
        'Monda' => __('Monda', 'lalutheme'),
        'Anton' => __('Anton', 'lalutheme'),
        'Staatliches' => __('Staatliches', 'lalutheme'),
        'Kalam' => __('Kalam', 'lalutheme'),
        'Merienda' => __('Merienda', 'lalutheme'),
        'Mukta' => __('Mukta', 'lalutheme'),
        'Roboto' => __('Roboto', 'lalutheme'),
        'Bebas+Neue&display=swap'=> __('Bebas Neue', 'lalutheme'),
        'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),          
        'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
        'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
        'corporates'=> __('corporates', 'lalutheme'),
        'corporatea'=> __('corporatea', 'lalutheme'),
        'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
        ),
    ) );


    $wp_customize->add_setting( 'gr_font_top_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_top_weight_settings', array(
    'label'      => __('Font top Weight', 'lalutheme'),
    'section'    => 'gr_logo',
    'settings'   => 'gr_font_top_weight_settings',
    'type'       => 'select',
        'choices'    => array( 
        'normal' => __('Normal', 'lalutheme'),
        'Bold' => __('bold', 'lalutheme'),
        'lighter' => __('Lighter', 'lalutheme'),
        '100' => __('100', 'lalutheme'),
        '200' => __('200', 'lalutheme'),
        '300' => __('300', 'lalutheme'),
        '400' => __('400', 'lalutheme'),
        '800' => __('800', 'lalutheme'),
        
        
        ),
    ) );

    $wp_customize->add_setting( 'gr_font_top_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );

    $wp_customize->add_control( 'gr_font_top_size_settings', array(
    'type' => 'text',
    'section' => 'gr_logo', // Add a default or your own section
    'label' => __( 'Font Top Size' ),
    'description' => __( 'font must be in number expamle 12' ),
    ) );





    //H1 fonts settings

    $wp_customize->add_section( 'gr_fonts' , array(
            'title'             => __('Font and text', 'lalutheme'),
            'priority'          => 1, 
            'panel'             => 'gr_header',
        ) );

    //h1
    $wp_customize->add_setting( 'gr_h1_select_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h1_select_control', array(
        'label'      => __('Font H1 Selector', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h1_select_settings',
        'type'       => 'select',
            'choices'    => array( 
            'Raleway' => __('Raleway', 'lalutheme'),
            'Lato' => __('Lato', 'lalutheme'),
            'Monda' => __('Monda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Staatliches' => __('Staatliches', 'lalutheme'),
            'Kalam' => __('Kalam', 'lalutheme'),
            'Merienda' => __('Merienda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Bebas+Neue&display=swap'=> __('Bebas', 'lalutheme'),
            'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),
            'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
            'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
            'corporates'=> __('corporates', 'lalutheme'),
            'corporatea'=> __('corporatea', 'lalutheme'),
            'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
            
            ),
    ) );


    $wp_customize->add_setting( 'gr_h1_weight_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h1_weight_settings', array(
        'label'      => __('Font H1 Weight', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h1_weight_settings',
        'type'       => 'select',
            'choices'    => array( 
            'normal' => __('Normal', 'lalutheme'),
            'Bold' => __('bold', 'lalutheme'),
            'lighter' => __('Lighter', 'lalutheme'),
            '100' => __('100', 'lalutheme'),
            '200' => __('200', 'lalutheme'),
            '300' => __('300', 'lalutheme'),
            '400' => __('400', 'lalutheme'),
            '800' => __('800', 'lalutheme'),
            
            
            ),
    ) );

    $wp_customize->add_setting( 'gr_h1_size_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h1_size_settings', array(
    'type' => 'text',
    'section' => 'gr_fonts', // Add a default or your own section
    'label' => __( 'H1 Font Size' ),
    'description' => __( 'font must be in number expamle 12' ),
    ) );


    //h2

    $wp_customize->add_setting( 'gr_h2_select_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h2_select_control', array(
        'label'      => __('Font H2 Selector', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h2_select_settings',
        'type'       => 'select',
            'choices'    => array( 
            'Raleway' => __('Raleway', 'lalutheme'),
            'Lato' => __('Lato', 'lalutheme'),
            'Monda' => __('Monda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Staatliches' => __('Staatliches', 'lalutheme'),
            'Kalam' => __('Kalam', 'lalutheme'),
            'Merienda' => __('Merienda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Bebas+Neue&display=swap'=> __('Bebas', 'lalutheme'),
            'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),
            'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
            'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
            'corporates'=> __('corporates', 'lalutheme'),
            'corporatea'=> __('corporatea', 'lalutheme'),
            'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
            ),
    ) );


    $wp_customize->add_setting( 'gr_h2_weight_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h2_weight_settings', array(
        'label'      => __('Font H2 Weight', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h2_weight_settings',
        'type'       => 'select',
            'choices'    => array( 
            'normal' => __('Normal', 'lalutheme'),
            'Bold' => __('bold', 'lalutheme'),
            'lighter' => __('Lighter', 'lalutheme'),
            '100' => __('100', 'lalutheme'),
            '200' => __('200', 'lalutheme'),
            '300' => __('300', 'lalutheme'),
            '400' => __('400', 'lalutheme'),
            '800' => __('800', 'lalutheme'),
            
            
            ),
    ) );

    $wp_customize->add_setting( 'gr_h2_size_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h2_size_settings', array(
    'type' => 'text',
    'section' => 'gr_fonts', // Add a default or your own section
    'label' => __( 'H2 Font Size' ),
    'description' => __( 'font must be in number expamle 12' ),
    ) );


    //h3

    $wp_customize->add_setting( 'gr_h3_select_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h3_select_control', array(
        'label'      => __('Font H3 Selector', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h3_select_settings',
        'type'       => 'select',
            'choices'    => array( 
            'Raleway' => __('Raleway', 'lalutheme'),
            'Lato' => __('Lato', 'lalutheme'),
            'Monda' => __('Monda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Staatliches' => __('Staatliches', 'lalutheme'),
            'Kalam' => __('Kalam', 'lalutheme'),
            'Merienda' => __('Merienda', 'lalutheme'),
            'Anton' => __('Anton', 'lalutheme'),
            'Bebas+Neue&display=swap'=> __('Bebas', 'lalutheme'),
            'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),
            'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
            'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
            'corporates'=> __('corporates', 'lalutheme'),
            'corporatea'=> __('corporatea', 'lalutheme'),
            'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
            ),
    ) );


    $wp_customize->add_setting( 'gr_h3_weight_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h3_weight_settings', array(
        'label'      => __('Font H3 Weight', 'lalutheme'),
        'section'    => 'gr_fonts',
        'settings'   => 'gr_h3_weight_settings',
        'type'       => 'select',
            'choices'    => array( 
            'normal' => __('Normal', 'lalutheme'),
            'Bold' => __('bold', 'lalutheme'),
            'lighter' => __('Lighter', 'lalutheme'),
            '100' => __('100', 'lalutheme'),
            '200' => __('200', 'lalutheme'),
            '300' => __('300', 'lalutheme'),
            '400' => __('400', 'lalutheme'),
            '800' => __('800', 'lalutheme'),
            
            
            ),
    ) );

    $wp_customize->add_setting( 'gr_h3_size_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_h3_size_settings', array(
    'type' => 'text',
    'section' => 'gr_fonts', // Add a default or your own section
    'label' => __( 'H3 Font Size' ),
    'description' => __( 'font must be in number expamle 12' ),
    ) );

//h4

    $wp_customize->add_setting( 'gr_h4_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h4_select_control', array(
    'label'      => __('Font h4 Selector', 'lalutheme'),
    'section'    => 'gr_fonts',
    'settings'   => 'gr_h4_select_settings',
    'type'       => 'select',
        'choices'    => array( 
        'Raleway' => __('Raleway', 'lalutheme'),
        'Lato' => __('Lato', 'lalutheme'),
        'Monda' => __('Monda', 'lalutheme'),
        'Anton' => __('Anton', 'lalutheme'),
        'Staatliches' => __('Staatliches', 'lalutheme'),
        'Kalam' => __('Kalam', 'lalutheme'),
        'Merienda' => __('Merienda', 'lalutheme'),
        'Anton' => __('Anton', 'lalutheme'),
        'Bebas+Neue&display=swap'=> __('Bebas', 'lalutheme'),
        'Montserrat:wght@100&display=swap'=> __('Montserrat', 'lalutheme'),
        'Cinzel+Decorative&display=swap'=> __('Cinzel Decorative', 'lalutheme'),
        'Source+Sans+Pro:200,300'=> __('Sans Source', 'lalutheme'),
        'corporates'=> __('corporates', 'lalutheme'),
        'corporatea'=> __('corporatea', 'lalutheme'),
        'Open+Sans:wght@300;400;500;800&display=swap'=> __('Open Sans', 'lalutheme'),
        ),
) );


$wp_customize->add_setting( 'gr_h4_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h4_weight_settings', array(
    'label'      => __('Font h4 Weight', 'lalutheme'),
    'section'    => 'gr_fonts',
    'settings'   => 'gr_h4_weight_settings',
    'type'       => 'select',
        'choices'    => array( 
        'normal' => __('Normal', 'lalutheme'),
        'Bold' => __('bold', 'lalutheme'),
        'lighter' => __('Lighter', 'lalutheme'),
        '100' => __('100', 'lalutheme'),
        '200' => __('200', 'lalutheme'),
        '300' => __('300', 'lalutheme'),
        '400' => __('400', 'lalutheme'),
        '800' => __('800', 'lalutheme'),
        
        
        ),
) );

$wp_customize->add_setting( 'gr_h4_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h4_size_settings', array(
'type' => 'text',
'section' => 'gr_fonts', // Add a default or your own section
'label' => __( 'h4 Font Size' ),
'description' => __( 'font must be in number expamle 12' ),
) );





    //colors

    $wp_customize->add_section( 'gr_colors' , array(
            'title'             => __('Colors', 'lalutheme'),
            'priority'          => 1, 
            'panel'             => 'gr_header',
        ) );



    $wp_customize->add_setting( 'gr_a_color_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_a_color_settings', array(
            'label' => 'Links color',
            'section' => 'gr_colors',
            'settings' => 'gr_a_color_settings',
    
        )));
    

    //socials
    
        $wp_customize->add_setting( 'gr_social_color_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_social_color', array(
            'label' => 'Social links color',
            'section' => 'gr_colors',
            'settings' => 'gr_social_color_settings',
    
        )));




    $wp_customize->add_setting( 'gr_top_color_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_top_color_settings', array(
            'label' => 'Top Color Text',
            'section' => 'gr_colors',
            'settings' => 'gr_top_color_settings',
    
        )));
    $wp_customize->add_setting( 'gr_top_bg_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_top_bg_settings', array(
            'label' => 'Top Background  ',
            'section' => 'gr_colors',
            'settings' => 'gr_top_bg_settings',
    
        )));

    //social svg dimessions
    //footer bg color
    $wp_customize->add_setting( 'gr_footer_bg_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_footer_bg_settings', array(
        'label' => 'Footer Backgorund Color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_footer_bg_settings',

    )));

    $wp_customize->add_setting( 'gr_footer_txt_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_footer_txt_settings', array(
        'label' => ' Footer text Color   ',
        'section' => 'gr_colors',
        'settings' => 'gr_footer_txt_settings',

    )));
    //subfooter bg color
    $wp_customize->add_setting( 'gr_subfooter_bg_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_subfooter_bg_settings', array(
        'label' => 'SubFooter Backgorund Color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_subfooter_bg_settings',

    )));
    
    //HADER COLORS
    $wp_customize->add_setting( 'gr_h1_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_h1_color_settings', array(
        'label' => 'H1 color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_h1_color_settings',

    )));

    $wp_customize->add_setting( 'gr_h2_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_h2_color_settings', array(
        'label' => 'H2 color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_h2_color_settings',

    )));
    $wp_customize->add_setting( 'gr_h3_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_h3_color_settings', array(
        'label' => 'H3 color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_h3_color_settings',

    )));
    
    $wp_customize->add_setting( 'gr_social_width_height_settings' , array(
            'type'          => 'theme_mod', 
            'transport'     => 'refresh',
        ) );
        
    $wp_customize->add_control( 'gr_social_width_height_settings', array(
    'type' => 'text',
    'section' => 'gr_social', // Add a default or your own section
    'label' => __( 'Social icons size in px ' ),
    'description' => __( 'Size is in pixel, there is no need to add px at the end. ex 30' ),
    ) );
    



























        }
        add_action( 'customize_register', 'gr_customize_register' );
 ?>
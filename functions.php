<?php
    

    //Added Common Basic Setup
    function skeleton_basic(){
        
        //Added Basic Page Stuff
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails', array( 'post' ) );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'post-formats', array('image', 'links', 'gallery', 'audio', 'video', 'quote', 'aside' ) );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'html5', array( 'comment-form', 'search', 'comments' ) );
        
        //Load TextDomains
        load_textdomain( 'skeleton', get_template_directory_uri().'/lang' );
       
        //Added Menus
        function nav_menu_register( $menu_id, $menu_title ){
            register_nav_menus(array(
                $menu_id     => __( $menu_title, 'skeleton' ),
            ));
        }
        nav_menu_register('main_menu', 'Main Menu');   
        
    }
    add_action( 'after_setup_theme', 'skeleton_basic' );


    //Added Sidebar or Widgets
    function theme_widgets() {
        register_sidebar( array(
            'name'          => __( 'Single Page Sidebar', 'skeleton' ),
            'id'            => 'right_sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'skeleton' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'theme_widgets' );


    //Added Enqueue Style
    function skeleton_enqueue(){

        //Font Awesome 4.7
        wp_enqueue_style('font-awesome-on', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'); // Online Store

        //wp_enqueue_style('font-awesome-off', get_template_directory_uri().'/css/fa.css');

        //Animate CSS
        wp_enqueue_style('Animate-on', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); // Online Store

        //wp_enqueue_style('Animate-off', get_template_directory_uri().'/css/fa.css');

        //Bootstrap 5.2
        wp_enqueue_style('Bootstrap-on', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'); //Online Store

        //wp_enqueue_style('Bootstrap-off', get_template_directory_uri().'/css/bootstrap.css');

        //Main CSS File - It will connect your 
        wp_enqueue_style('main', get_stylesheet_uri(), NULL, microtime());
        //Please Delete Microtime Function when you upload your site in server as a final version.


        //Default jQuery From Wordpress
        wp_enqueue_script('jquery');

        //Bootstrap Bundle 5.2
        wp_enqueue_script('Bootstrap-On', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js', NULL, true); 
        //Online Store

        //wp_enqueue_script('Boostrap-Off', get_template_directory_uri().'/js/bootstrap.js');

        //Custom JavaScript here
        wp_enqueue_script('Custom', get_template_directory_uri().'/js/main.js', NULL, microtime()); 
        //Please Delete Microtime Function when you upload your site in server as a final version.


    }
    add_action( 'wp_enqueue_scripts', 'skeleton_enqueue' );


    /*=================================
    * Added Customize code
    =================================*/
    
    function skeleton_customize_register( $wp_customize ){

        $wp_customize->add_section('header_section', array(
            //code goes here
        ));

        $wp_customize->add_setting('header_options', array(
            //code goes here
        ));

        //This Particular Customization only for Image
        $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'header_options', array(
            'label'             => __('Upload Your Logo', 'skeleton'),
            'section'           => 'header_section',
            'setting'           => 'header_options',
        )));

        //Customization for Text Based Field
        $wp_customize->add_control( 'header_options', array(
            //Code Goes here
        ) );

    }
    add_action('customize_register', 'skeleton_customize_register');


    /*====================================
    * Link Redux Framework to get Theme Options with _azadi option varialble data
    ====================================*/

    require_once( 'lib/redux/redux-framework.php' );
    require_once( 'lib/redux/sample/config.php' );


    /*====================================
    * Link CMB2 Framework for Adding New Metaboxes
    ====================================*/

    require_once( 'lib/cmb2/init.php' );
    require_once( 'lib/cmb2/functions.php' );

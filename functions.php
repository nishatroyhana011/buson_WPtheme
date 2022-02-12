<?php

//theme set up
function buson_setup(){
    load_theme_textdomain( 'buson', get_template_directory(). '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array('slider', 'service', 'teams', 'post', 'cases', 'testimonials'));
    register_nav_menus( array(
        'primary-menu' => __('Primary Menu', 'buson'),
        'footer-menu' => __('Footer Menu', 'buson')
    ));
}
add_action( 'after_setup_theme', 'buson_setup');

//adding css and js
function add_buson_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0', 'all');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'jquery.sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.0, true);

      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
}
add_action( 'wp_enqueue_scripts', 'add_buson_scripts' );

//==============================custom posts================================//

//adding slider
function buson_custom_slider() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Sliders', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New slider', 'buson' ),
        'new_item'              => __( 'New slider', 'buson' ),
        'edit_item'             => __( 'Edit slider', 'buson' ),
        'view_item'             => __( 'View slider', 'buson' ),
        'all_items'             => __( 'All sliders', 'buson' ),
        'search_items'          => __( 'Search sliders', 'buson' ),
        'not_found'             => __( 'No sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'slider custom post type.',
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-slides',
        'supports'           => array( 'title', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'slider', $args );
}
add_action( 'init', 'buson_custom_slider' );  
  
//adding services
function buson_custom_service() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Service', 'buson' ),
        'new_item'              => __( 'New Service', 'buson' ),
        'edit_item'             => __( 'Edit Service', 'buson' ),
        'view_item'             => __( 'View Service', 'buson' ),
        'all_items'             => __( 'All Service', 'buson' ),
        'search_items'          => __( 'Search Services', 'buson' ),
        'not_found'             => __( 'No Services found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 15,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'service', $args );
}
add_action( 'init', 'buson_custom_service' );  
  
//adding team members
function buson_custom_teams() {
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'member', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Teams', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Member', 'buson' ),
        'new_item'              => __( 'New Member', 'buson' ),
        'edit_item'             => __( 'Edit member', 'buson' ),
        'view_item'             => __( 'View member', 'buson' ),
        'all_items'             => __( 'All members', 'buson' ),
        'search_items'          => __( 'Search members', 'buson' ),
        'not_found'             => __( 'No members found.', 'buson' ),
        'not_found_in_trash'    => __( 'No members found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'teams custom post type.',
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 17,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'teams', $args );
}
add_action( 'init', 'buson_custom_teams' );  
  
//adding testimonials
function buson_custom_testimonials() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Testimonial', 'buson' ),
        'new_item'              => __( 'New Testimonial', 'buson' ),
        'edit_item'             => __( 'Edit Testimonial', 'buson' ),
        'view_item'             => __( 'View Testimonial', 'buson' ),
        'all_items'             => __( 'All Testimonials', 'buson' ),
        'search_items'          => __( 'Search Testimonials', 'buson' ),
        'not_found'             => __( 'No testimonials found.', 'buson' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 18,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'buson_custom_testimonials' );  
  
//adding cases
function buson_custom_cases() {
    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Cases', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Case', 'buson' ),
        'new_item'              => __( 'New Case', 'buson' ),
        'edit_item'             => __( 'Edit Case', 'buson' ),
        'view_item'             => __( 'View Case', 'buson' ),
        'all_items'             => __( 'All Cases', 'buson' ),
        'search_items'          => __( 'Search Cases', 'buson' ),
        'not_found'             => __( 'No Cases found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Cases found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Cases custom post type.',
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 19,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'cases', $args );
}
add_action( 'init', 'buson_custom_cases' );  
  
//header footer editing
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('About section And Logo Settings', 'buson'),
		'menu_title'	=> __('Theme Options','buson'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Completed Cases Settings','buson'),
		'menu_title'	=> __('Case','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Request for callback Settings','buson'),
		'menu_title'	=> __('Callback','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Header Settings','buson'),
		'menu_title'	=> __('Header','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Footer Settings','buson'),
		'menu_title'	=> __('Footer','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));

}
/**
 * Add a sidebar.
 */
function buson_main_sidebar_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar 1', 'buson' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'widgets for blog page.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'buson_main_sidebar_init'); 

function buson_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'buson' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all pages.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'buson_slug_widgets_init' );

//second sidebar

function buson_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'buson' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all pages.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'buson_widgets_init' );
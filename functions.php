<?php
ob_start();
include "setting/setting.php";
include "inc/cpt.php";
include "inc/meta.php";

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function myblog_setup(){
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Register image sizes
	add_image_size( 'myblog-featured-post-large', 508, 198, true );

	add_image_size( 'myblog-featured-post-small', 253, 180, true );

	add_image_size( 'myblog-featured-large1', 334, 194, true );

	add_image_size( 'myblog-featured-small1', 110, 96, true );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo',
			array(
					'flex-width' => true,
					'flex-height' => true,
			)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' => esc_html__( 'Primary', 'myblog' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background' );
	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
	) );

}
add_action('after_setup_theme', 'myblog_setup');


/**
 * Enqueue scripts and styles.
 */
function myblog_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css');

	// //Register font-awesome style
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', false, '4.6.2' );

	// //Register responsive style
	// wp_enqueue_style( 'rainbownews-responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0.0' );

 //    //Register swiper
 //    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.css', false, '1.0.0' );

 //    //Register animate
 //    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, '3.5.1' );

 //    //Register swiper
 //    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array( 'jquery' ), '3.3.1', true );

 //    //Register wow
 //    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), '1.1.2', true );

	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-latest.js', array('jquery'), true);

	wp_enqueue_script( 'myblog_script', get_template_directory_uri() . '/assets/js/jquery-1.7.2.min.js', array( 'jquery' ), '1.7.2', true );

	wp_enqueue_script( 'myscript', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), true );

	wp_enqueue_script( 'infinite-scroll', get_template_directory_uri() . '/assets/js/jquery.infinitescroll.js', array( 'jquery' ), true );

	wp_enqueue_script( 'lazy-load', get_template_directory_uri() . '/assets/js/lazyload.min.js', true );

	// //Register main.js
	// wp_enqueue_script( 'rainbownews-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );

	// wp_enqueue_script( 'rainbownews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'rainbownews-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'myblog_scripts', 999);

function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function add_class_to_img_and_p_in_content($content) {

   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 myblogimg"$3>';

   $content = preg_replace($pattern, $replacement, $content);

   return $content;
}
add_filter('the_content', 'add_class_to_img_and_p_in_content',11);

function myblog_customize_register( $wp_customize ) {
  //All our sections, settings, and controls will be added here

  $wp_customize->remove_section( 'colors');

}
add_action( 'customize_register', 'myblog_customize_register',50 );

class My_Sub_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"link-subs\">\n";
  }
  function end_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
}

?>
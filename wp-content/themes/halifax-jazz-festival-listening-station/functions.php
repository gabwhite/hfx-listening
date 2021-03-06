<?php
/**
 * Halifax Jazz Festival - Listening Station functions and definitions
 *
 * @package Halifax Jazz Festival - Listening Station
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'halifax_jazz_festival_listening_station_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function halifax_jazz_festival_listening_station_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Halifax Jazz Festival - Listening Station, use a find and replace
	 * to change 'halifax-jazz-festival-listening-station' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'halifax-jazz-festival-listening-station', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'halifax-jazz-festival-listening-station' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'halifax_jazz_festival_listening_station_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // halifax_jazz_festival_listening_station_setup
add_action( 'after_setup_theme', 'halifax_jazz_festival_listening_station_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function halifax_jazz_festival_listening_station_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'halifax-jazz-festival-listening-station' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'halifax_jazz_festival_listening_station_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function halifax_jazz_festival_listening_station_scripts() {
	wp_enqueue_style("google-fonts", "http://fonts.googleapis.com/css?family=Dosis:400,500,700|Open+Sans:400italic,400,700' rel='stylesheet' type='text/css");

	wp_enqueue_style( 'halifax-jazz-festival-listening-station-style', get_stylesheet_uri() );

	wp_enqueue_style("Animate CSS", get_template_directory_uri()."/scss/animate.css");

	wp_enqueue_script("styling-select", get_template_directory_uri()."/js/styling_select/js/select.js", array("jquery") );

	wp_enqueue_script( 'halifax-jazz-festival-listening-station-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'halifax-jazz-festival-listening-station-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script("retinajs", get_template_directory_uri()."/js/retina.js", array("jquery"));

	wp_enqueue_style("fancyboxCss", get_template_directory_uri()."/js/fancybox/source/jquery.fancybox.css");

	wp_enqueue_script("fancybox", get_template_directory_uri()."/js/fancybox/source/jquery.fancybox.pack.js", array("jquery"));

	wp_enqueue_script("fancybox-helper", get_template_directory_uri()."/js/fancybox/source/helpers/jquery.fancybox-media.js", array("jquery"));

	wp_enqueue_script("scripts", get_template_directory_uri()."/js/scripts.js", array("jquery"));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'halifax_jazz_festival_listening_station_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

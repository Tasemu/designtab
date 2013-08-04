<?php
/**
 * DesignTab functions and definitions
 *
 * @package DesignTab
 */

/**
* Include support for post thumbnails
*/

add_theme_support( 'post-thumbnails' );

/**
* Include support for custom header
*/

$args = array(
	'width'         => 320,
	'uploads'       => true,
	'height'        => 59,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'header-text'   => false
);
add_theme_support( 'custom-header', $args );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'designtab_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function designtab_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on DesignTab, use a find and replace
	 * to change 'designtab' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'designtab', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'designtab' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'designtab_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // designtab_setup
add_action( 'after_setup_theme', 'designtab_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function designtab_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'designtab' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'designtab' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'designtab_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function designtab_scripts() {
	wp_enqueue_style( 'designtab-style', get_stylesheet_uri() );

	wp_enqueue_script( 'designtab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'likes', get_template_directory_uri() . '/js/likes.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'designtab-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'designtab-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'designtab_scripts' );

function get_twitter() {
	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?screen_name=raadiome';
	$requestMethod = 'GET';
	$twitter = new TwitterAPIExchange($settings);
	$follow_count=$twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();
	            $testCount = json_decode($follow_count, true);
}
add_action( 'after_loop_end', 'get_twitter' );

function html5_insert_image($html, $id, $caption, $title, $align, $url) {
  $html5 = "<figure id='post-$id media-$id' class='align-$align image-box'>";
  $html5 .= "<img src='$url' alt='$title' />";
  if ($caption) {
    $html5 .= "<figcaption>$caption</figcaption>";
  }
  $html5 .= "</figure>";
  return $html5;
}
add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );

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


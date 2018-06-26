<?php
/**
 * mffs Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mffs_theme
 */

if ( ! function_exists( 'mffs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mffs_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // mffs_setup
add_action( 'after_setup_theme', 'mffs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function mffs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mffs_content_width', 640 );
}
add_action( 'after_setup_theme', 'mffs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mffs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Newsletter' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mffs_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function mffs_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'mffs_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function mffs_scripts() {
	wp_enqueue_style( 'mffs-style', get_stylesheet_uri() );



	// enqueue Font Awesome style
	wp_enqueue_style( 'mffs-fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );

	// flickity carousel css
	wp_enqueue_style( 'mffs-flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );

	wp_enqueue_style('mffs-google-fonts', "https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Raleway:400,600,700");

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'mffs-flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', null, null, true );

	wp_enqueue_script( 'mffs-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'mffs-script', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), time() , true );

	wp_enqueue_script( 'mffs-numscroller', get_template_directory_uri() . '/build/js/numscroller.min.js', array('jquery'), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
/**
 * Sidebar Widget Area for sicial media
 */
function my_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Social Media' ),
		'id'            => 'sidebar-custom',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html( 'Contact info' ),
		'id'            => 'sidebar-contact-info',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'my_widgets_init' );

add_action( 'wp_enqueue_scripts', 'mffs_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

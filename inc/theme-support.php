<?php
/**
 * medisoft-2 functions and definitions
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/ 
 *
 * @package medisoft-2
 */

if ( ! function_exists( 'medisoft_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function medisoft_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on medisoft-2, use a find and replace
		 * to change 'medisoft-2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'medisoft-2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
			// file does not exist... return an error.
			return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
			// file exists... require it.
		    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
		}

		// wp_nav menu

		register_nav_menus( array(
		    'main-menu' => __( 'Main Menu', 'medisoft1.2' ),
		    'appoint-menu' => __( 'Appoinment Menu', 'medisoft1.2' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'medisoft_2_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'medisoft_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medisoft_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medisoft_2_content_width', 640 );
}
add_action( 'after_setup_theme', 'medisoft_2_content_width', 0 );


// Custom Exerpt

 function cExcerpt($number = 20, $readmore = 'Read More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	array_push($var, '<br> <br> <br><a class="btn btn-default btn-read"  href="'.get_the_permalink().'">'.$readmore.' <i class="fa fa-angle-right"></i></a>');
 	$var = implode(' ', $var);

 	return $var;
 }


  function rExcerpt($number = 20, $readmore = 'Read More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	$var = implode(' ', $var);

 	return $var;
 }


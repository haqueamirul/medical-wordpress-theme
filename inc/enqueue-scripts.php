<?php
/**
 * medisoft1.2 functions and definitions
 *
  * @link https://soft-theme.com/medisoft/medisoft-2/ 
 *
 * @package medisoft-2
 *
 * Enqueue scripts and styles.
 */
function medisoft_2_scripts() {
	wp_enqueue_style( 'medisoft-2-style', get_stylesheet_uri() );
	wp_enqueue_style( 'medisoft-2-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'medisoft-2-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'medisoft-2-icofont', get_template_directory_uri() . '/css/icofont.css');
	wp_enqueue_style( 'medisoft-2-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'medisoft-2-slicknav', get_template_directory_uri() . '/css/slicknav.css');
	wp_enqueue_style( 'medisoft-2-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'medisoft-2-owl.theme', get_template_directory_uri() . '/css/owl.theme.default.css');
	wp_enqueue_style( 'medisoft-2-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'medisoft-2-datepicker', get_template_directory_uri() . '/css/datepicker.css');
	wp_enqueue_style( 'medisoft-2-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'medisoft-2-responsive', get_template_directory_uri() . '/css/responsive.css');


	/**
	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	 // Internet Explorer HTML5 support 
    wp_enqueue_script( 'medisoft-2-html5shiv','https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'medisoft-2-html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'medisoft-2-respond','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'medisoft-2-respond', 'conditional', 'lt IE 9' );


	wp_enqueue_script( 'medisoft-2-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-jquery.slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-isotope.pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );


	wp_enqueue_script( 'medisoft-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'medisoft-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medisoft_2_scripts' );
<?php

/**
 * Register widget area.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/ 
 */
function medisoft1_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'medisoft-2' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
		'before_widget' => '<div class="col-md-3 col-sm-5 col-xs-12"><div class="footer-widget footer-menu">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Recent Post Sidebar', 'medisoft-2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
		'before_widget' => '<div class="recent_category">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Two', 'medisoft-2' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
			'before_widget' => '<div class="blog_category"><div class="category_header">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Recent Comment Sidebar', 'medisoft-2' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
			'before_widget' => '<div class="comment_section"><div class="category_header">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4></div><div class="comment_box">',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Tags Sidebar', 'medisoft-2' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
			'before_widget' => '<div class="tag_box"><div class="category_header">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Search Box Sidebar', 'medisoft-2' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here.', 'medisoft-2' ),
			'before_widget' => '<div class="blog_search">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'medisoft1_2_widgets_init' );
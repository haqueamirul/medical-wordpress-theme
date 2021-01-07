<?php

/*
	==========================================
	 Custom Post Type
	==========================================
*/

function medisoft_custom_post_type (){
	
		$labels = array(
        'name'                => _x( 'Portfolio', 'Portfolio', 'medisoft-2' ),
        'singular_name'       => _x( 'Portfolio', 'Portfolio', 'medisoft-2' ),
        'menu_name'           => __( 'Portfolioes', 'medisoft-2' ),
        'parent_item_colon'   => __( 'Parent Item:', 'medisoft-2' ),
        'all_items'           => __( 'All Items', 'medisoft-2' ),
        'view_item'           => __( 'View Item', 'medisoft-2' ),
        'add_new_item'        => __( 'Add New Item', 'medisoft-2' ),
        'add_new'             => __( 'Add New', 'medisoft-2' ),
        'edit_item'           => __( 'Edit Item', 'medisoft-2' ),
        'update_item'         => __( 'Update Item', 'medisoft-2' ),
        'search_items'        => __( 'Search Item', 'medisoft-2' ),
        'not_found'           => __( 'Not found', 'medisoft-2' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'medisoft-2' ),
    );
    $args = array(
        'label'               => __( 'Portfolioes', 'medisoft-2' ),
        'description'         => __( 'Portfolio', 'medisoft-2' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'gallerycategory', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-images-alt2',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'portfolio', $args );


	/// Department ===================================================================

	 $labels = array(
        'name'                => _x( 'Department', 'Department', 'medisoft-2' ),
        'singular_name'       => _x( 'Department', 'Department', 'medisoft-2' ),
        'menu_name'           => __( 'Departments', 'medisoft-2' ),
        'parent_item_colon'   => __( 'Parent Item:', 'medisoft-2' ),
        'all_items'           => __( 'All Items', 'medisoft-2' ),
        'view_item'           => __( 'View Item', 'medisoft-2' ),
        'add_new_item'        => __( 'Add New Item', 'medisoft-2' ),
        'add_new'             => __( 'Add New', 'medisoft-2' ),
        'edit_item'           => __( 'Edit Item', 'medisoft-2' ),
        'update_item'         => __( 'Update Item', 'medisoft-2' ),
        'search_items'        => __( 'Search Item', 'medisoft-2' ),
        'not_found'           => __( 'Not found', 'medisoft-2' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'medisoft-2' ),
    );
    $args = array(
        'label'               => __( 'Departments', 'medisoft-2' ),
        'description'         => __( 'Department', 'medisoft-2' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'departmentcategory', 'post_tag' ),
        'hierarchical'        => false,
        'supports' => array(
			'title',
		),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-welcome-add-page',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'department', $args ); 



}
add_action('init','medisoft_custom_post_type');

function medisoft_custom_texonomi() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Gallery Category',
		'singular_name' => 'Gallery Category',
		'search_items' => 'Search Gallery Category',
		'all_items' => 'All Gallery Category',
		'parent_item' => 'Parent Gallery Category',
		'parent_item_colon' => 'Parent Gallery Category:',
		'edit_item' => 'Edit Gallery Category',
		'update_item' => 'Update Gallery Category',
		'add_new_item' => 'Add New Work Gallery Category',
		'new_item_name' => 'New Gallery Category Name',
		'menu_name' => 'Gallery Category'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'gallerycategory' )
	);
	
	register_taxonomy('gallerycategory', array('portfolio'), $args);
	
	/// Department ===================================================================
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Department Category',
		'singular_name' => 'Department Category',
		'search_items' => 'Search Department Category',
		'all_items' => 'All Department Category',
		'parent_item' => 'Parent Department Category',
		'parent_item_colon' => 'Parent Department Category:',
		'edit_item' => 'Edit Department Category',
		'update_item' => 'Update Department Category',
		'add_new_item' => 'Add New Work Department Category',
		'new_item_name' => 'New Department Category Name',
		'menu_name' => 'Department Category'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'departmentcategory' )
	);
	
	register_taxonomy('departmentcategory', array('department'), $args);


}

add_action( 'init' , 'medisoft_custom_texonomi' );





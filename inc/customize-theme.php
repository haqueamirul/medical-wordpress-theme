<?php
/**
 * medisoft.2 functions and definitions
 *
  * @link https://soft-theme.com/medisoft/medisoft-2/ 
 *
 * @package medisoft-2
 */



function soft_prefix_custom_register( $wp_customize ) {

	$wp_customize->add_panel( 'panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Options', 'medisoft-2' ),
	    'description' => __( 'Description of what this panel does.', 'medisoft-2' ),
	) );

	//Costom Logo section =======================================================================

		$wp_customize->add_section( 'logo_id', array(
		    'priority' => 15,
		    'capability' => 'edit_theme_options',
		    'theme_supports' => '',
		    'title' => __( 'Logo Section', 'medisoft-2' ),
		    'description' => '',
		    'panel' => 'panel_id',
		) );

		$wp_customize->add_setting( 'logo-image', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_snitize_img',
		) );

		$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'logo-image',
					array(
						'label' => __('Upload Your Logo','medisoft-2'),
						'section' => 'logo_id',
						'settings' => 'logo-image',
					)
				)
			);

		// Address sections =============================================================


		$wp_customize->add_setting( 'header_email', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'header_email', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'logo_id',
		    'label' => __( 'Header Email.', 'medisoft-2' ),
		    'description' => 'Write your header email here.',
		) );

		$wp_customize->add_setting( 'header_phone', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'header_phone', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'logo_id',
		    'label' => __( 'Header Phone Number.', 'medisoft-2' ),
		    'description' => 'Write your header phone number here.',
		) );

		// Header top section ===============================================================


		$wp_customize->add_section( 'header_top_section', array(
		    'priority' => 5,
		    'capability' => 'edit_theme_options',
		    'theme_supports' => '',
		    'title' => __( 'Top Section', 'medisoft-2' ),
		    'description' => '',
		    'panel' => 'panel_id',
		) );

		$wp_customize->add_setting( 'opening_hourse', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'opening_hourse', array(
		    'type' => 'text',
		    'priority' => 10,
		    'section' => 'header_top_section',
		    'label' => __( 'Opening Hours Text', 'medisoft-2' ),
		    'description' => 'Write your opening hours here.',
		) );

		// Social Section ===============================================================


		$wp_customize->add_section( 'social_section', array(
		    'priority' => 10,
		    'capability' => 'edit_theme_options',
		    'theme_supports' => '',
		    'title' => __( 'Top Social Section', 'medisoft-2' ),
		    'description' => '',
		    'panel' => 'panel_id',
		) );

		$wp_customize->add_setting( 'show_search_box', array(
		    'default'        => false,
		    'capability'     => 'edit_theme_options',
		    'sanitize_callback' => 'theme_slug_sanitize_checkbox',

		) );

		$wp_customize->add_control( 'show_search_box', array(
		    'settings' => 'show_search_box',
		    'label'    => 'Show Serch Box',
		    'section'  => 'social_section',
		    'type'     => 'checkbox'
		) );


		$wp_customize->add_setting( 'facebook_link', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'facebook_link', array(
		    'type' => 'text',
		    'priority' => 15,
		    'section' => 'social_section',
		    'label' => __( 'Facebook Link.', 'medisoft-2' ),
		    'description' => 'Write your facebook link here.',
		) );

		$wp_customize->add_setting( 'twitter_link', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'twitter_link', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'social_section',
		    'label' => __( 'Twitter Link.', 'medisoft-2' ),
		    'description' => 'Write your twitter link here.',
		) );

		$wp_customize->add_setting( 'google_plus_link', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'google_plus_link', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'social_section',
		    'label' => __( 'Google Plus Link.', 'medisoft-2' ),
		    'description' => 'Write your google plus link here.',
		) );

		$wp_customize->add_setting( 'linkedin_link', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'linkedin_link', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'social_section',
		    'label' => __( 'Linkedin Link.', 'medisoft-2' ),
		    'description' => 'Write your linkedin link here.',
		) );


		// Copyright Sections =============================================================

		$wp_customize->add_section( 'copyright_section', array(
		    'priority' => 25,
		    'capability' => 'edit_theme_options',
		    'theme_supports' => '',
		    'title' => __( 'Copyright Section', 'medisoft-2' ),
		    'description' => '',
		    'panel' => 'panel_id',
		) );

		$wp_customize->add_setting( 'copyright_text', array(
			'default' => 'copyright medisoft 2018. design by',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'copyright_text', array(
		    'type' => 'text',
		    'priority' => 10,
		    'section' => 'copyright_section',
		    'label' => __( 'Copyright Text', 'medisoft-2' ),
		    'description' => 'Write your copyright text here.',
		) );

		$wp_customize->add_setting( 'dev_name', array(
			'default' => 'Soft-theme',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'dev_name', array(
		    'type' => 'text',
		    'priority' => 15,
		    'section' => 'copyright_section',
		    'label' => __( 'Copany Name', 'medisoft-2' ),
		    'description' => 'Write your name here.',
		) );

		$wp_customize->add_setting( 'dev_link', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback' => 'medisoft_1_2_sanitize_text',
		) );

		$wp_customize->add_control( 'dev_link', array(
		    'type' => 'text',
		    'priority' => 20,
		    'section' => 'copyright_section',
		    'label' => __( 'Copany Link', 'medisoft-2' ),
		    'description' => 'Write your link here.',
		) );

	}
add_action( 'customize_register', 'soft_prefix_custom_register' );

function medisoft_1_2_snitize_img( $input ){

    /* default output */
    $output = '';

    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];

    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }

    return $output;
}

function medisoft_1_2_sanitize_text( $str ) {
    return sanitize_text_field( $str );
} 

function medisoft_1_2_sanitize_textarea_field( $str ) {
    $filtered = _medisoft_1_2_sanitize_text_fields( $str, true );
 
    /**
     * Filters a sanitized textarea field string.
     *
     * @since 4.7.0
     *
     * @param string $filtered The sanitized string.
     * @param string $str      The string prior to being sanitized.
     */
    return apply_filters( 'medisoft_1_2_sanitize_textarea_field', $filtered, $str );
}

//checkbox sanitization function
        function theme_slug_sanitize_checkbox( $input ){
             
            //returns true if checkbox is checked
            return ( isset( $input ) ? true : false );
        }


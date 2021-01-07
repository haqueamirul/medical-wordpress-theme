<?php
/**
 * medisoft-2 functions and definitions
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/ 
 *
 * @package medisoft-2
 */
// Register customize theme
require_once get_template_directory() . '/inc/customize-theme.php';
require_once get_template_directory() . '/inc/custom-post.php';



function add_editor_style( $stylesheet = 'editor-style.css' ) {
    add_theme_support( 'editor-style' );
 
    if ( ! is_admin() )
        return;
 
    global $editor_styles;
    $editor_styles = (array) $editor_styles;
    $stylesheet    = (array) $stylesheet;
    if ( is_rtl() ) {
        $rtl_stylesheet = str_replace('.css', '-rtl.css', $stylesheet[0]);
        $stylesheet[] = $rtl_stylesheet;
    }
 
    $editor_styles = array_merge( $editor_styles, $stylesheet );
}
/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework  
 *
 */
require_once get_template_directory() .'/theme-options/cs-framework.php';
require_once get_template_directory() .'/inc/widget/recent-post.php';
require_once get_template_directory() .'/inc/widget/search-widget.php';
require_once get_template_directory() .'/inc/medisoft-plugin-activation.php';


// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

/**
 * Implement the Custom theme-support.
 */
require get_template_directory() . '/inc/theme-support.php';	

/**
 * Implement the Custom widget-register.
 */
require get_template_directory() . '/inc/widget-register.php';

/**
 * Implement the Custom enqueue-scripts.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>
<!doctype html> 
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <?php get_template_part( 'template-parts/header/top' , 'header' ); ?>
    <?php get_template_part( 'template-parts/header/logo' , 'contact' ); ?>
    <?php get_template_part( 'template-parts/header/navigation' ); ?>
  </header>
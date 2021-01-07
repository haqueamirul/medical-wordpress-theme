<?php
/**
 * The template for navigation
 *
 * Contains the closing of the #content div and all content after.
 *
  * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>


<div class="menu-section">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-7 col-xs-3">
          <div class="mainmenu">

            <?php
				wp_nav_menu( array(
				    'theme_location'    => 'main-menu',
				    'depth'             => 3,
				    'container'         => 'div',
				    'container_class'   => 'menu',
				    'menu_class'        => 'navigation',
				    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker(),
				) );
			?>

          </div><!-- /.menu-section -->
          
        </div><!-- /.col-md-10 -->
        <div class="col-md-2 col-sm-5 col-xs-4">
          <?php
				wp_nav_menu( array(
				    'theme_location'    => 'appoint-menu',
				    'depth'             => 2,
				    'container'         => 'div',
				    'container_class'   => 'appoinment',
				    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker(),
				) );
			?>
        </div><!-- /.col-md-2 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.menu-section -->
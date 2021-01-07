<?php
/**
 * The template for logo-contact
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<div class="top-middle">
	<div class="container">
	  <div class="row">
	    <div class="col-md-4 col-sm-2">
	      <div class="logo_section">
	        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_theme_mod('logo-image'); ?>" alt="LOGO"></a>
	      </div><!-- /.logo_section -->
	    </div><!-- /.col-md-4 -->
	    <div class="col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2">
	      <div class="top-contact">
	        <!-- Item 1 -->
	        <?php if ( get_theme_mod('header_email') ): ?>
	        <div class="contact-dts">
	            <div class="icon-box">
	              <i class="icofont icofont-ui-message"></i>
	            </div><!-- /.icon-box -->
	            <div class="con-info">
	              <ul>
	                <li><?php _e('email','medisoft-2'); ?></li>
	                <li><?php echo get_theme_mod('header_email'); ?></li>
	              </ul>
	            </div><!-- /.contact-info -->
	        </div><!-- /.contact-dts -->
	        <?php endif; ?>

	        <!-- Item 2 -->
	        <?php if ( get_theme_mod('header_phone') ): ?>
	        <div class="contact-dts">
	          <div class="icon-box">
	            <i class="icofont icofont-ui-touch-phone"></i>
	          </div><!-- /.icon-box -->
	          <div class="con-info">
	            <ul>
	              <li><?php _e('call now','medisoft-2'); ?></li>
	              <li><?php echo get_theme_mod('header_phone'); ?></li>
	            </ul>
	          </div><!-- /.contact-info -->
	        </div><!-- /.contact-dts -->
	        <?php endif; ?>
	      </div><!-- /.top-contact -->
	    </div><!-- /.col-md-6 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.top-middle -->
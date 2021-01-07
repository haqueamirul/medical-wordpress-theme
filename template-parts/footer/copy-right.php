<?php
/**
 * The template for footer section
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<div class="footer-bottom">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12">
	      <div class="copyright">
	        <?php if ( get_theme_mod('dev_name') ): ?>
	        <h4>&copy; <?php echo get_theme_mod('copyright_text'); ?> <a href="<?php echo get_theme_mod('dev_link'); ?>"><?php echo get_theme_mod('dev_name'); ?></a></h4>
	        <?php endif ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>
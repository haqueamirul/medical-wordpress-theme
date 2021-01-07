<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

if ( ! is_active_sidebar() ) {
	return;
}
?>

<div class="col-md-4 col-md-offset-1">
	<div class="blog_right_part">


		<?php dynamic_sidebar('sidebar-6'); ?> 
		<?php dynamic_sidebar('sidebar-1'); ?> 
		<?php dynamic_sidebar('sidebar-3'); ?> 
		<?php dynamic_sidebar('sidebar-4'); ?> 
		<?php dynamic_sidebar('sidebar-5'); ?> 


	</div><!-- /.blog_right_part -->
</div><!-- /.col-md-4 -->

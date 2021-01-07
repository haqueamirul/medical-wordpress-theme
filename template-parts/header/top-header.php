<?php
/**
 * The template for top-header
 *
 * Contains the closing of the #content div and all content after.
 *
  * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<div class="top-menu">
	<div class="container">
	  <div class="row">
	    <div class="col-md-6 col-sm-12">
	      <div class="top-left">
	        <span><?php echo get_theme_mod('opening_hourse'); ?></span>
	      </div>
	    </div><!-- /.col-md-6 -->
	    <div class="col-md-6 col-sm-12">
	      <div class="top-right">

	        <?php if( get_theme_mod('show_search_box') ) : ?>

	        <div class="top_search">
	          <form method="post" action="">
	            <input type="text" value="" name="s" class="from-controls search" placeholder="Search here...."  required/>
	            <button type="submit">
	              <i class="icofont icofont-search-alt-1"></i>
	            </button>
	          </form>
	        </div><!-- /.top_search -->

	        <?php endif; ?>

	        <div class="top_social">
	          <ul>
	            <?php if ( get_theme_mod('facebook_link') ): ?>
	            <li><a href="<?php get_theme_mod('facebook_link'); ?>"><i class="icofont icofont-social-facebook"></i></a></li>
	            <?php endif; 
	                if ( get_theme_mod('twitter_link') ) : 
	             ?>
	            <li><a href="<?php get_theme_mod('twitter_link'); ?>"><i class="icofont icofont-social-twitter"></i></a></li>
	            <?php endif; 
	                if ( get_theme_mod('google_plus_link') ) : 
	             ?>
	            <li><a href="<?php get_theme_mod('google_plus_link'); ?>"><i class="icofont icofont-social-google-plus"></i></a></li>
	            <?php endif; 
	                if ( get_theme_mod('linkedin_link') ) : 
	             ?>
	            <li><a href="<?php get_theme_mod('linkedin_link'); ?>"><i class="icofont icofont-social-linkedin"></i></a></li>
	            <?php endif; ?>
	          </ul>
	        </div><!-- /.top_social -->
	      </div><!-- /.top-right -->
	    </div><!-- /.col-md-6 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.top-menu -->
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

get_header(); ?>

	<section class="banner-section" style="background: url('<?php echo get_template_directory_uri(); ?>/images/department_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="banner_header">
  				<h2><?php the_title(); ?></h2>
  			</div><!-- /.banner_header -->
  		</div><!-- /.col-md-12 -->
  	</div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.banner-section -->
<section class="single_section sec_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-7">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();

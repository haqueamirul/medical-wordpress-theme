<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

get_header(); ?>

	<section class="banner-section" style="background: url('<?php echo cs_get_option('depart_top_bg_img'); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 277px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="banner_header">
          <h2><?php the_title(); ?></h2>
          <ul>
            <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('home','medisoft-2'); ?></a></li>
            <li><?php the_title(); ?></li>
          </ul>
        </div><!-- /.banner_header -->
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.banner-section -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

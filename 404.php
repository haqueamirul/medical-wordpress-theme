<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error_section sec_padding">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-6">
		            <div class="error_header">
		              <h6><?php esc_html_e( '404 page not found.', 'medisoft-2' ); ?></h6>
		            </div><br><!-- /.erro_header -->
		            <?php dynamic_sidebar('sidebar-6'); ?> 
		            
		          </div><!-- /.col-md-12 -->
		          <div class="col-md-4 col-md-offset-1">
					<div class="blog_right_part">


						
						<?php dynamic_sidebar('sidebar-1'); ?> 
						<?php dynamic_sidebar('sidebar-3'); ?> 
						<?php dynamic_sidebar('sidebar-4'); ?> 
						<?php dynamic_sidebar('sidebar-5'); ?> 


					</div><!-- /.blog_right_part -->
				</div><!-- /.col-md-4 -->
		        </div><!-- /.row -->
		      </div><!-- /.container -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
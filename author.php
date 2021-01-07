<?php
/**
 * The template for author pages
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
 
<section class="blog_section sec_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-7">

				<div class="author-info">
					<div class="author-avatar">
						<?php
						/**
						 * Filter the Twenty Sixteen author bio avatar size.
						 *
						 * @since Twenty Sixteen 1.0
						 *
						 * @param int $size The avatar height and width size in pixels.
						 */
						$author_bio_avatar_size = apply_filters( 'medisoft_2_author_bio_avatar_size', 42 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->

					<div class="author-description">
						<h2 class="author-title"><span class="author-heading"><?php _e( 'Author:', 'medisoft-2' ); ?></span> <?php echo get_the_author(); ?></h2>

						<p class="author-bio">
							<?php the_author_meta( 'description' ); ?>
							<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s', 'medisoft-2' ), get_the_author() ); ?>
							</a>
						</p><!-- .author-bio -->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
				
			</div>
		</div>
	</div>
</section>
 
<?php 
 get_footer();
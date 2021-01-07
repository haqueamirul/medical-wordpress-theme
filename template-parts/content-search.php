<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_item">
		<?php 
		if ( 'post' === get_post_type() ) : ?>
			<div class="blog_date">
				<p><span><?php the_time('D, Y'); ?></p>
			</div><!-- /.blog_date -->
		<?php
		endif; ?>
		<div class="blog_box"> 
			<?php
			if ( 'post' == the_post_thumbnail() ) : ?>
				<div class="blog_thumbnail">
					<?php the_post_thumbnail(); ?>
				</div><!-- /.blog_thumbnail -->
			<?php
			endif; ?>
			<div class="blog_content">
				
				<?php
					if ( is_singular() ) :
						the_title( '<h3>', '</h3>' );
					else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					endif;

				?>
				<span>posted by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><?php the_author(); ?></a></span>
					

					

				<p>
				<?php
					echo cExcerpt('20');( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'medisoft-2' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'medisoft-2' ),
						'after'  => '</div>',
					) );
				?>
				</p>
			</div><!-- .blog_content -->
		</div><!-- .blog_box -->
	</div><!-- .blog_item -->

	<footer class="entry-footer">
		<?php medisoft1_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * The template for category pages
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
 
				<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'medisoft-2' ), single_cat_title( '', false ) ); ?></h1>

					<?php
						// Show an optional term description.
						$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .archive-header -->

				<?php
						// Start the Loop.
				while ( have_posts() ) :
					the_post();
					/*
					* Include the post format-specific template for the content. If you want to
					* use this in a child theme, then include a file called content-___.php
					* (where ___ is the post format) and that will be used instead.
					*/
					get_template_part( 'content', get_post_format() );
						endwhile;
						// Previous/next page navigation.
						the_posts_navigation();
					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );
					endif;
				?>
			</div>
		</div>
	</div>
</section>
 
<?php 
 get_footer();
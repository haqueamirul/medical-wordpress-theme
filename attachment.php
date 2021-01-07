<?php
/**
 * The template for attachment pages
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

				<?php
				/*
				 * Run the loop to output the attachment.
				 * If you want to overload this in a child theme then include a file
				 * called loop-attachment.php and that will be used instead.
				 */
				get_template_part( 'loop', 'attachment' );
				?>
				
			</div>
		</div>
	</div>
</section>
 
<?php 
 get_footer();
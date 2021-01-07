<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="single_comment_section">
	<div class="comment_part">
			<?php
				// You can start editing here -- including this comment!
				if ( have_comments() ) : ?>
					<h2 class="comments-title">
						<?php
							printf( _nx( '1 Comment', '%1$s Comment', get_comments_number(), 'comments title', 'medisoft-2' ),
								number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
						?>
					</h2>

					<?php if ( get_comment_pages_count() > 1 ) : ?>
						<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
							<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'medisoft-2' ); ?></h1>
							<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'medisoft-2' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'medisoft-2' ) ); ?></div>
						</nav><!-- #comment-nav-above -->
					<?php endif; // Check for comment navigation. ?>

					<ol class="comment-list">
						<?php
							wp_list_comments( array(
								'style'       => 'ol',
								'short_ping'  => true,
								'avatar_size' => 50,
							) );
						?>
					</ol><!-- .comment-list -->

					<?php if ( get_comment_pages_count() > 1 ) : ?>
						<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
							<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'medisoft-2' ); ?></h1>
							<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'medisoft-2' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'medisoft-2' ) ); ?></div>
						</nav><!-- #comment-nav-below -->
					<?php endif; // Check for comment navigation. ?>

	                    <?php

					// If comments are closed and there are comments, let's leave a little note, shall we?

				endif; // Check for have_comments().

				// If comments are closed and there are comments, let's leave a little note, shall we?
					if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

						<p class="no-comments"><?php _e( 'Comments are closed.', 'medisoft-2' ); ?></p>
					<?php
					endif;


					// Create form

					$fields = array(
					'author' =>
					'<div class="form-group"><label for="author">'.__('Name','domainname').'</label><span class="required">*</span><input id="author" name="author" type="text" class="form-control" value="'.esc_attr($commenter['coment_author']).'" required="required" /></div>',

					'email' =>
					'<div class="form-group"><label for="email">'.__('Email','domainname').'</label><span class="required">*</span><input id="email" name="email" type="text" class="form-control form-size" value="'.esc_attr($commenter['coment_author_email']).'" required="required" /></div>',

					);


					$args = array(
						'class_submit' => 'form-button',
						'label_submit' => __('Submit','medisoft-2'),
						'comment_field' => '<div class="form-group"><label for="comment">'._x('Message','Noun','medisoft-2').'</label><textarea id="comment" class="form-control message-box" name="comment" rows="5" required="required"></textarea></div>',
						'fields'       => apply_filters('comment_form_default_fields', $fields)
					);

					comment_form($args);


				?>

	</div>
</div>

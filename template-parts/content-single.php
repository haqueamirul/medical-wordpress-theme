<?php
/**
 * Template part for displaying posts
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_header">
	  <ul>
	    <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('Home','medisoft-2'); ?></a></li>
	    <li><?php the_title(); ?></li>
	  </ul>    
	</div><!-- /.post_header -->
	<div class="post_box">
		<?php
		if ( 'post' == the_post_thumbnail() ) : ?>
			<div class="post_thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- /.post_thumbnail -->
		<?php
		endif; ?>

	  <div class="post_meta">
	  	<?php 
		if ( 'post' === get_post_type() ) : ?>
			<ul>
				<li><?php the_time('F d, Y'); ?></li>
				<li><a href="<?php echo get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><?php the_author(); ?></a></li>
	      		<li><?php comments_popup_link('No Comment','One Comment','% Comments','medisoft','comment off'); ?></li>
			</ul>
		<?php
		endif; ?>
	  </div><!-- /.post_meta -->
	  <div class="post_content">
	    <?php
			if ( is_singular() ) :
				the_title( '<h3>', '</h1>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

		?>
	    <p>
		<?php
			the_content( sprintf(
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
	  </div><!-- /.post_content -->
	</div><!-- /.post_box -->

	<div class="single_page_share">
	  <div class="single_page_nav">
	    <ul>
	      <li class="share"><?php _e('Share this on','medisoft-2'); ?></li>
	      <li>
	          <a href="http://www.facebook.com/sharer.php"><i class="icofont icofont-social-facebook"></i></a>
	      </li>
	      <li>
	          <a href="http://twitter.com/home/?status=<?php the_title()?>-<?php the_permalink(); ?>"><i class="icofont icofont-social-twitter"></i></a>
	      </li>
	      <li>
	          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?> &amp;url=<?php the_permalink(); ?>"><i class="icofont icofont-social-linkedin"></i></a>
	      </li>
	      <li>
	          <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="icofont icofont-social-google-plus"></i></a>
	      </li>
	    </ul>
	  </div><!-- single_page_nav -->
	</div><!-- /.single_page_share -->

	<div class="related_post">
	  <div class="related_header">
	    <h4><?php _e('related post','medisoft-2'); ?></h4>
	  </div><!-- related_header -->
	  <div class="row">

	  	<?php
	  		$args = array(
	  			'category__in' => wp_get_post_categories( $post->ID ),
	  			'numberpost'   => 3
	  		);

	  		$relatedpost = get_posts( $args );

	  		if( $relatedpost ) : 
	  			setup_postdata( $post );

	  			foreach ( $relatedpost as $post ) :
	  	?>

	    <div class="col-md-4 col-sm-4">
	      <div class="related_box">
	        <div class="related_thumbnail">
	          <?php the_post_thumbnail(); ?>
	        </div><!-- related_thumbnail -->
	        <div class="related_content">
	          <span><?php the_time('F d, Y'); ?></span>
	          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	        </div><!-- /.related_content -->
	      </div><!-- related_box -->
	    </div><!-- col-md-4 -->

	     	<?php endforeach; ?>
	     <?php endif; ?>

	  </div><!-- row -->
	</div><!-- related_post -->
</article><!-- #post-<?php the_ID(); ?> -->
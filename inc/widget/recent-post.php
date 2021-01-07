<?php

class recent_post_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('recent_post_widget', 'Medisoft Recent Post', array(
			'description' => 'Add your Add medisoft recent post widget.'
		));
	}
	public function widget($args, $instsnce){ ?>

		<?php echo $args['before_widget']; ?>
			<div class="category_header">
				<?php echo $args['before_title'].$instsnce[title].$args['after_title']; ?>
			</div>
		<?php 
			$recentpost = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 3
			));

			while ( $recentpost->have_posts() ) : $recentpost->the_post() 
		?>	
		<div class="recent_section">
			<div class="recent_thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- /.recent_thumbnail -->
			<div class="recent_content">
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php echo rExcerpt('20'); ?></p>
			</div><!-- /.recent_content -->
		</div><!-- /.recent_section -->
		
	<?php endwhile; ?>
		<?php echo $args['after_widget']; ?>
	<?php	}

	public function form($three){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $three['title']; ?>" class="widefat">
		</p>

<?php	}
}

function post_recent_widget(){
	register_widget('recent_post_widget');
}
add_action('widgets_init','post_recent_widget');





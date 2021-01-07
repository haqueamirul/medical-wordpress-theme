<?php

class medisoft_search extends WP_Widget{
	public function __construct(){
		parent:: __construct('medisoft_search', 'Medisoft Search Box', array(
			'description' => 'Add your Add medisoft search box widget.'
		));
	}
	public function widget($args, $instsnce){ ?>

		<?php echo $args['before_widget']; ?>
			<form method="post" action="">
			    <input type="search" name="s" class="form-control"
			    value="" placeholder="Search here...."  required/>
			     <button type="submit"><i class="icofont icofont-search"></i></button>
			</form>
		<?php echo $args['after_widget']; ?>
	<?php	}

	public function form($three){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $three['title']; ?>" class="widefat">
		</p>

<?php	}
}

function search_widget(){
	register_widget('medisoft_search');
}
add_action('widgets_init','search_widget');





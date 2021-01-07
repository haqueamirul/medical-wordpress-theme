<?php
/**
 * The template for displaying search forms
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */
?>

<form role="search" method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<div class="input-group">

		<label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'medisoft-2' ); ?></label>
    	<input type="text" class="form-control search-query" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'medisoft-2' ); ?>" value="<?php the_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'medisoft-2' ); ?>" />
    	<span class="input-group-btn">
      		<button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'medisoft-2' ); ?>">
      			<span class="glyphicon glyphicon-search"></span>
      		</button>
    	</span>

  	</div>

</form>
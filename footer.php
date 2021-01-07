<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

	<?php get_template_part( 'template-parts/footer/get' , 'touch' ); ?>

	<footer>
      <?php get_template_part( 'template-parts/footer/footer' , 'section' ); ?>
      <?php get_template_part( 'template-parts/footer/copy' , 'right' ); ?>
      
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
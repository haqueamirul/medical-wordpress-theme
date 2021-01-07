<?php
/**
 * The template for footer section
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<div class="footer-top">
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-5 col-xs-12">
      <div class="footer-widget">
        <a href="<?php echo esc_url( home_url() ); ?>"">
          <img src="<?php echo cs_get_option('footer_image'); ?>" alt="img" class="img-responsive">
        </a>
        <p><?php echo cs_get_option('footer_content'); ?></p>
        <div class="socil-icon">
          <ul>
           <?php

              $footer_section1 = cs_get_option('footer_social_group');

                if ( !empty($footer_section1) ) {

                foreach ( $footer_section1 as $single_footer ) {
              
              ?>


            <li><a href="<?php echo esc_html($single_footer['footer_social_icon_link']); ?>"><i class="<?php echo esc_html($single_footer['footer_social_icon']); ?>"></i></a></li>


               <?php   }
                }

            ?>
          </ul>
        </div>
      </div>
    </div>


    <?php dynamic_sidebar('sidebar-2'); ?>


  </div>
</div>
</div>
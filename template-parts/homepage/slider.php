<!-- =========================
            Slider SECTION
========================= -->
<section class="slider-section">
  <div class="slider-active owl-carousel owl-theme">

    <?php
      $slider_group = cs_get_option('slider_group_section');

      foreach ( $slider_group as $single_slider ) :

    ?>

    <div class="single-slider opacity-background">

      <img src="<?php echo esc_html($single_slider['slider_image_2']); ?>" alt="" />
      <div class="slider-content">
        <div class="table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <h2><?php echo esc_html($single_slider['slider_title']); ?></h2>
                  <h3><?php echo esc_html($single_slider['slider_subtitle']); ?></h3>
                  <p><?php echo esc_html($single_slider['slider_textarea']); ?></p>
                  <a href="#" class="btn btn-default btn-book">book now</a>
                  <a href="#" class="btn btn-default btn-learn">learn more</a>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="slider_thumnail">
                    <img src="<?php echo esc_html($single_slider['slider_image_1']); ?>" alt="img" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach;
    wp_reset_postdata();
   ?>
    
  </div>
</section><!-- /.slider-section -->
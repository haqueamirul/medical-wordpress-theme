<?php 
/*
Template Name: Medisoft Home 
*/
get_header(); 
    
    get_template_part( 'template-parts/homepage/slider' ); 

?>
    
    <!-- =========================
            Welcome SECTION
    ========================= -->
    <section class="welcome_section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="welcome_content">
              <div class="welcome_header">
                <h2><?php echo esc_html(cs_get_option('welcome_title')); ?></h2>
                <p><?php echo esc_html(cs_get_option('welcome_content')); ?></p>
              </div><!-- /.welcome_header -->


              <?php

              $welcome_sections = cs_get_option('welcome_group_section');

                if ( !empty($welcome_sections) ) {

                foreach ( $welcome_sections as $single_welcome ) {
              
              ?>

              <div class="col-md-6 col-sm-6 box">
                <div class="details_box">
                  <div class="icon_box">
                    <i class="<?php echo $single_welcome['welcome_item_icon']; ?>"></i>
                  </div><!-- /.icon_box -->
                  <div class="content_box">
                    <h3><?php echo esc_html($single_welcome['welcome_item_title']); ?></h3>
                    <p><?php echo esc_html($single_welcome['welcome_item_content']); ?></p>
                  </div><!-- /.content_box -->
                </div><!-- /.details_box -->
              </div><!-- /.col-md-6 -->

             <?php } } ?>

             
            </div><!-- /.welcome_content -->
          </div><!-- /.col-md-7 -->
          
          <div class="col-md-4 col-md-offset-1 col-sm-12">
            <div class="welcome_thumbnail">
              <img src="<?php echo cs_get_option('welcome_image'); ?>" alt="img" class="img-responsive">
            </div><!-- /.welcome_thumnail -->
          </div><!-- /.col-md-offset-1 -->
        </div><!-- /.row -->
      </div><!-- /.conatiner -->
    </section><!-- /.welcome_section -->
     <!-- =========================
            Department SECTION
    ========================= -->
    <section class="department_section sec_padding" style="background: url('<?php echo cs_get_option('deparment_bg_img'); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="department_header">
              <h2><?php echo cs_get_option('un_dept_title'); ?></h2>
              <p><?php echo cs_get_option('un_dept_desc'); ?> </p>
            </div><!-- /.department_header -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="row">

          <?php

              $un_depart_sec = cs_get_option('un_depart_group');

                if ( !empty($un_depart_sec) ) {

                foreach ( $un_depart_sec as $single_un_deparment ) {
              
              ?>

          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="department_box">
              <a href="<?php echo esc_html($single_un_deparment['un_department_link']); ?>" title="click here"><img src="<?php echo esc_html($single_un_deparment['un_department_image']); ?>" alt="img" class="img-responsive"></a>
              <h4><a href="<?php echo esc_html($single_un_deparment['un_department_link']); ?>"><?php echo esc_html($single_un_deparment['un_department_name']); ?></a></h4>
            </div><!-- /.depatrment_box -->
          </div><!-- /.co-md-2 -->

          <?php   }
                }

            ?>
          
        </div><!-- /.row -->
      </div><!-- /.conatiner -->
    </section><!-- /.department_section -->
    <!-- =========================
            Gallery SECTION
    ========================= -->

    <?php if ( cs_get_option('gallery_title') ): ?>

    <section class="gallery_section sec_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="gallery_header">
              <h2><?php echo cs_get_option('gallery_title'); ?></h2>
              <p><?php echo cs_get_option('gallery_contetn'); ?></p>
            </div><!-- /.gallery_header -->

            <div class="gallery_filter">
              <ul>
                <li class="active" data-filter="*"><?php _e('All','medisoft-2'); ?></li>

                <?php 
                    $all_terms = get_terms('gallerycategory', array(
                        'hide_empty' => false
                    ));
                    foreach ($all_terms as $single_term) {
                       echo '<li data-filter=".'. $single_term->slug .'">'. $single_term->name .'</li>'; 
                    }
                ?>

              </ul>
            </div><!-- /.gallery_filter -->

            <div class="gallery_item">

              <?php 
                  $filtering_post = null;
                  $filtering_post = new WP_Query(array(
                      'post_type' => 'portfolio',
                      'posts_per_page' => -1
                  ));

                  while ( $filtering_post->have_posts() ) : $filtering_post->the_post(); 

                  $post_terms = get_the_terms(get_the_ID(), 'gallerycategory');

                  $meta_data = get_post_meta( get_the_ID(), '_custom_portfolio_options', true );
                  
              ?>            
                  <div class="single_item <?php foreach ($post_terms as $post_term) {
                           echo $post_term->slug . ' ';
                        } ?>">
                    <div class="gallery_box">
                      <?php the_post_thumbnail(); ?>
                      <div class="box-content">
                          <h3 class="title"><?php the_title(); ?></h3>
                          <ul class="icon">
                              <li>
                                <a class="view" href="<?php echo $meta_data['section_1_upload']; ?>">
                                 <i class="icofont icofont-search"></i>
                                </a>
                              </li>
                          </ul>
                          <p><?php echo $meta_data['section_1_textarea']; ?></p>
                      </div><!-- /.box_content -->
                    </div><!-- /.gallery_box -->
                  </div><!-- /.single_item -->

              <?php endwhile; 
                  wp_reset_postdata(); 
              ?>           
                
      

            </div><!-- /.gallery_item -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.gallery_section -->

    <?php endif ?>

    <!-- =========================
            Doctor SECTION
    ========================= -->
    <?php if ( cs_get_option('font_doctor_title') ): ?>

    <section class="doctor_section sec_padding" style="background: url('<?php echo cs_get_option('font_doctor_bg'); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="doctor_header">
              <h2><?php echo cs_get_option('font_doctor_title'); ?></h2>
              <p><?php echo cs_get_option('font_docctor_con'); ?></p>
            </div><!-- /.doctor_header -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        

        <div class="row">
          <div class="col-md-12">
            <div class="doctor_slider_active owl-carousel owl-theme">
              <?php
                $all_terms = get_terms( array(
                  'taxonomy'   => 'departmentcategory',
                  'hide_empty' => false
                ));

                foreach ($all_terms as $single_term) {
               ?>

              <?php 
                  $all_doctors = new WP_Query(array(
                    'post_type' => 'department',
                    'posts_per_page' => -1
                  ));
                if ( $all_doctors->have_posts() ) : while ( $all_doctors->have_posts() ) : $all_doctors->the_post(); 

                  $doctor_meta = get_post_meta( $post->ID, '_custom_doctors_list', true );
   

                  // getting group field
                  $all_doctors_group = ( ! empty( $doctor_meta['doctor_list_doc'] ) ) ? $doctor_meta['doctor_list_doc'] : '';

                  if ( ! empty( $all_doctors_group ) ) {
                    foreach ( $all_doctors_group as $single_all_doctors ) {

              ?>

              <div class="item">
                <div class="doctor-box">
                  <img src="<?php echo $single_all_doctors['doctor_image']; ?>" alt="img" class="img-responsive">
                  <div class="doctor-content">
                    <h3><?php echo $single_all_doctors['doctor_name']; ?></h3>
                    <div class="icon">
                      <ul>
                        <?php if ( $single_all_doctors['facebook_link'] ): ?>
                            <li><a href="<?php echo $single_all_doctors['facebook_link']; ?>"><i class="icofont icofont-social-facebook"></i></a></li>
                        <?php endif;
                          if ( $single_all_doctors['twitter_link'] ):
                         ?>
                            <li><a href="<?php echo $single_all_doctors['twitter_link']; ?>"><i class="icofont icofont-social-twitter"></i></a></li>
                        <?php endif;
                          if ( $single_all_doctors['google_link'] ):
                         ?>
                            <li><a href="<?php echo $single_all_doctors['google_link']; ?>"><i class="icofont icofont-social-google-plus"></i></a></li>
                        <?php endif; ?>
                      </ul>
                     <a href="<?php echo $single_all_doctors['doc_profile_link']; ?>" class="btn btn-default btn-profile">view profile</a>
                    </div>
                    <span><?php echo $single_term->name; ?></span>
                  </div><!-- /.doctor-content  -->
                </div><!-- /.doctor-box -->
              </div><!-- /.item -->

              <?php } } endwhile; 
                endif;
               ?>

               <?php } ?>

            </div><!-- /.doctor_slider_active -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

      </div><!-- /.container -->
    </section><!-- /.doctor_section -->

  <?php endif; ?>
    
 <?php get_footer(); ?>
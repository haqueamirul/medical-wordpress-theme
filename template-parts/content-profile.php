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
	<div class="row">
		 <?php 
           $doctor_meta = get_post_meta( $post->ID, '_custom_doctors_list', true );

            // var_dump( $meta_groups );    

            // getting group field
            $doctor_group = ( ! empty( $doctor_meta['doctor_list_doc'] ) ) ? $doctor_meta['doctor_list_doc'] : '';

            if ( ! empty( $doctor_group ) ) {
              foreach ( $doctor_group as $single_doctor ) { ?>

      <div class="col-md-5">
        <div class="doctor_profile">
          <div class="profile_thumbnail">
            <img src="<?php echo $single_doctor['doctor_image']; ?>" alt="img">
          </div><!-- /.profile_thumbnail -->
          <div class="profile_content">
            <h3><?php echo $single_doctor['doctor_name']; ?></h3>
            <h4>m.d.ph.d</h4>
            <span>the surgury clinic</span>
            <ul>
              <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
              <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
              <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
            </ul>
          </div><!-- /.profile_content -->
        </div><!-- /.doctor_profile -->
      </div><!-- /.col-md-5 -->

      <?php   }
            }

        ?>
                                
      <div class="col-md-7">
        <div class="profile_details">
          <div class="details_part">
            <div class="details_header">
              <h4>speciality</h4>
            </div><!-- /.details_header -->
            <div class="details_content">
              <h5>surgury</h5>
            </div><!-- /.details_content -->
          </div><!-- /.details_part -->

          <div class="details_part">
            <div class="details_header">
              <h4>degrees</h4>
            </div><!-- /.details_header -->
            <div class="details_content">
              <h5><span>m.d.ph.d</span> of surgury</h5>
            </div><!-- /.details_content -->
          </div><!-- /.details_part -->

          <div class="details_part">
            <div class="details_header">
              <h4>training</h4>
            </div><!-- /.details_header -->
            <div class="details_content">
              <p>Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.</p>
            </div><!-- /.details_content -->
          </div><!-- /.details_part -->

          <div class="details_part">
            <div class="details_header">
              <h4>awards</h4>
            </div><!-- /.details_header -->
            <div class="details_content">
              <ul>
                <li>lorem ipsum dolor sit amet</li>
                <li>lorem ipsum dolor sit amet</li>
                <li>lorem ipsum dolor sit amet</li>
                <li>lorem ipsum dolor sit amet</li>
                <li>lorem ipsum dolor sit amet</li>
                <li>lorem ipsum dolor sit amet</li>
              </ul>
            </div><!-- /.details_content -->
          </div><!-- /.details_part -->
        </div><!-- /.profile_details -->
      </div><!-- /.col-md-7 -->
    </div><!-- /.row -->
</article><!-- #post-<?php the_ID(); ?> -->
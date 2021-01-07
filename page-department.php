<?php 
/*
Template Name: Department
*/
get_header(); ?>
    <!-- ========================= 
            Banner SECTION
    ========================= -->
    <section class="banner-section" style="background: url('<?php echo cs_get_option('depart_top_bg_img'); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 277px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_header">
              <h2><?php the_title(); ?></h2>
              <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('home','medisoft-2'); ?></a></li>
                <li><?php the_title(); ?></li>
              </ul>
            </div><!-- /.banner_header -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner-section -->
    <!-- =========================
          Department SECTION
    ========================= -->
    <section class="deprartment_page_section sec_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="doctor_collapse">
             <div class="panel-group" id="accordion" role="tablist"  aria-multiselectable="true">








              <?php
                  $all_terms = get_terms( array(
                    'taxonomy'   => 'departmentcategory',
                    'hide_empty' => false
                  ));

                  
                  $i=$x=$d1=$d2=$d3=$d4='';
                  $y = 0;
                  $z = 99;
                  $k = 199;
                  $l = 299;

                  foreach ($all_terms as $single_term) {

                    $i++;
                  ?>
 
              


                <div class="panel">
                   <div class="panel-heading <?php  $d1=($i==1)? 'active' :''; echo $d1;?>" role="tab" id="<?php echo $single_term->slug.$i; ?>">
                      <h4 class="panel-title">
                         <a <?php $d2=($i==1)? '':'class="collapsed"'; echo $d2;?> data-toggle="collapse" role="button" data-parent="#accordion" href="#<?php echo $single_term->slug; ?>" aria-expanded="<?php $d3=($i==1)?'true' :'false'; echo $d3; ?>" aria-controls="<?php echo $single_term->slug; ?>">
                         <span class="panel_title_heading"><?php echo $single_term->name; ?></span>
                         </a>
                      </h4>
                   </div>
                   <div id="<?php echo $single_term->slug; ?>" class="panel-collapse collapse <?php $d4=($i==1)? 'in' : ''; echo $d4; ?>" role="tabpanel" aria-labelledby="<?php echo $single_term->slug.$i; ?>">
                      <div class="panel-body">
                       <div class="row">
                         <div class="col-md-12">
                            <ul  class="nav nav-pills nav-justified">
                              <li class="active"><a  href="#<?php echo $single_term->slug.$y; ?>" data-toggle="tab">treatment</a></li>
                              <li><a href="#<?php echo $single_term->slug.$z; ?>" data-toggle="tab">doctor list</a></li>
                              <li><a href="#<?php echo $single_term->slug.$k; ?>" data-toggle="tab">investigation</a></li>
                              <li><a href="#<?php echo $single_term->slug.$l; ?>" data-toggle="tab">timetable</a></li>
                            </ul>
                         </div><!-- /.col-md-12 -->
                       </div><!-- /.row -->

                        <div class="tab-content">
                          <!-- Tab Pane 1 -->
                          <?php 
                            $depart = new WP_Query(array(
                              'post_type' => 'department',
                              'posts_per_page' => -1,
                              'departmentcategory' => $single_term->slug
                            ));
                          if ( $depart->have_posts() ) : while ( $depart->have_posts() ) : $depart->the_post(); ?>

                          <div class="tab-pane  fade in active" id="<?php echo $single_term->slug.$y; ?>">
                            <div class="test_list_section">
                              <ul>
                                <?php 
                                   $meta_data = get_post_meta( $post->ID, '_custom_page_options', true );

                                    // var_dump( $meta_groups );    

                                    // getting group field
                                    $meta_groups = ( ! empty( $meta_data['unique_option_901'] ) ) ? $meta_data['unique_option_901'] : '';

                                    if ( ! empty( $meta_groups ) ) {
                                      foreach ( $meta_groups as $meta_group ) {
                                        echo '<li>'. $meta_group['unique_option_901_text_1'] .'<span>$'. $meta_group['treat_price'] .'</span></li>';
                                      }
                                    }

                                ?>
                              </ul>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane One -->

                          <?php endwhile; 
                            endif;
                           ?>

                           <?php 
                            $depart = new WP_Query(array(
                              'post_type' => 'department',
                              'posts_per_page' => -1,
                              'departmentcategory' => $single_term->slug
                            ));
                          if ( $depart->have_posts() ) : while ( $depart->have_posts() ) : $depart->the_post(); ?>

                          <!-- Tab Pane 2 -->
                          <div class="tab-pane fade" id="<?php echo $single_term->slug.$z; ?>">
                            <div class="doctor_list">
                              <div class="row">

                                 <?php 
                                   $doctor_meta = get_post_meta( $post->ID, '_custom_doctors_list', true );

                                    // var_dump( $meta_groups );    

                                    // getting group field
                                    $doctor_group = ( ! empty( $doctor_meta['doctor_list_doc'] ) ) ? $doctor_meta['doctor_list_doc'] : '';

                                    if ( ! empty( $doctor_group ) ) {
                                      foreach ( $doctor_group as $single_doctor ) { ?>


                                        <div class="col-md-4 col-sm-6">
                                          <div class="doctor_box">
                                              <img src="<?php echo $single_doctor['doctor_image']; ?>" alt="img">
                                              <div class="profile_view">
                                                 <a href="<?php echo $single_doctor['doc_profile_link']; ?>" class="btn-default btn-prf">View profile</a>
                                              </div>
                                              <div class="doctor_content">
                                                  <h3><?php echo $single_doctor['doctor_name']; ?></h3>
                                              </div><!-- /.doctor_conten t -->
                                          </div><!-- /.doctor_box -->
                                        </div><!-- /.col-md-4 -->


                                   <?php   }
                                    }

                                ?>
                                  


                              </div><!-- /.row -->
                            </div><!-- /.doctor_list -->
                          </div><!-- /.tab-pane Two -->

                          <?php endwhile; 
                            endif;
                           ?>

                          <!-- Tab Pane 3 -->
                          <?php 
                            $investi = new WP_Query(array(
                              'post_type' => 'department',
                              'posts_per_page' => -1,
                              'departmentcategory' => $single_term->slug
                            ));
                          if ( $investi->have_posts() ) : while ( $investi->have_posts() ) : $investi->the_post(); ?>

                          <div class="tab-pane fade" id="<?php echo $single_term->slug.$k; ?>">
                             <div class="test_list_section">
                                <ul>
                                  <?php 
                                   $inbest_meta = get_post_meta( $post->ID, '_custom_investigation_page', true );

                                    // var_dump( $meta_groups );    

                                    // getting group field
                                    $investi_group = ( ! empty( $inbest_meta['invest_group_sec'] ) ) ? $inbest_meta['invest_group_sec'] : '';

                                    if ( ! empty( $investi_group ) ) {
                                      foreach ( $investi_group as $single_inbesti ) {
                                        echo '<li>'. $single_inbesti['investigation_name'] .'<span>$'. $single_inbesti['invest_price'] .'</span></li>';
                                      }
                                    }

                                ?>
                                </ul>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane Three -->

                          <?php endwhile; 
                            endif;
                           ?>

                          <!-- Tab Pane 4 -->



                          <?php 
                            $timetable = new WP_Query(array(
                              'post_type' => 'department',
                              'posts_per_page' => -1,
                              'departmentcategory' => $single_term->slug
                            ));
                          if ( $timetable->have_posts() ) : while ( $timetable->have_posts() ) : $timetable->the_post(); ?>

                          <div class="tab-pane fade" id="<?php echo $single_term->slug.$l; ?>">
                            <div class="time_table table-responsive">
                              <table class="table table-condensed table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th><?php _e('time','medisoft-2'); ?></th>
                                    
                                  <?php 
                                   $timeday_meta = get_post_meta( $post->ID, '_custom_timetable_list', true );

                                    // var_dump( $meta_groups );    

                                    // getting group field
                                    $timeday_group = ( ! empty( $timeday_meta['time_table_day_name'] ) ) ? $timeday_meta['time_table_day_name'] : '';

                                    if ( ! empty( $timeday_group ) ) {
                                      foreach ( $timeday_group as $single_timeday ) { ?>

                                          <th><?php echo $single_timeday['day_name']; ?></th>

                                    <?php   }
                                    }

                                ?>
                                  </tr>
                                </thead>

                                <tbody>

                                  

                                 

                                  <?php 
                                   $doctor_name_meta = get_post_meta( $post->ID, '_custom_timetable_list', true );

                                    // var_dump( $meta_groups );    

                                    // getting group field
                                    $doc_name_group = ( ! empty( $doctor_name_meta['time_table_time_doctor'] ) ) ? $doctor_name_meta['time_table_time_doctor'] : '';

                                    if ( ! empty( $doc_name_group ) ) {
                                      foreach ( $doc_name_group as $single_doctorname ) { ?>
                                       <tr>
                                        <td><?php echo $single_doctorname['time_now']; ?></td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_1'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_1']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_2'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_2']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_3'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_3']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_4'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_4']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_5'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_5']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_6'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_6']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                        <td class="events">
                                          <?php if ( $single_doctorname['time_doctor_name_7'] ): ?>
                                          <h6><?php echo $single_term->name; ?></h6>
                                          <span><a href="<?php the_permalink(); ?>"><?php echo $single_doctorname['time_doctor_name_7']; ?></a></span>
                                          <?php endif ?>
                                        </td>
                                      </tr>

                                     <?php   }
                                    }

                                ?>

                                 

                                 
                                </tbody>
                              </table>
                            </div><!-- /.time_table -->
                          </div><!-- /.tab-pane Four -->

                          <?php endwhile; 
                            endif;
                           ?>

                        </div><!-- Tab-Content -->
                      </div><!-- /.panel-body 1 -->
                   </div><!-- /.panel-collapse 1 -->
                </div><!-- /.panel/panel-default 1 -->


                 <?php  $x++;
                        $y++;
                        $z++;
                        $k++;
                        $l++;
                    
                  }
                ?>


               
             </div><!-- /.panel-group -->
            </div><!-- /.doctor_collapse -->
          </div><!-- /.col-md-7 -->

          <?php if ( cs_get_option('depart_sidebar_title') ): ?>
            
          <div class="col-md-3">
            <div class="department_sidebar">
              <div class="opening_section">
                <div class="opening_header">
                  <h6><?php echo cs_get_option('depart_sidebar_title'); ?></h6>
                </div><!-- /.opening_header -->
                <ul>
                  <?php

                  $department_side_day = cs_get_option('depart_sidebar_group');

                    if ( !empty($department_side_day) ) {

                    foreach ( $department_side_day as $single_dept_day ) {
                  
                  ?>
                  <li><?php echo esc_html($single_dept_day['dept_side_day']); ?> <span><?php echo esc_html($single_dept_day['dept_side_time']); ?></span></li>
                   <?php } } ?>
                </ul>
              </div><!-- /.opening_section -->  
            </div><!-- /.department_sidebar -->
          </div><!-- /.col-md-4 -->
          <?php endif ?>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog_section -->
    
<?php get_footer(); ?>
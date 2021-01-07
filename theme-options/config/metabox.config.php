<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_portfolio_options',
  'title'     => 'Custom Portfolio Options',
  'post_type' => 'portfolio',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Section One',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(



        array(
          'id'    => 'section_1_upload',
          'type'  => 'upload',
          'title' => 'Upload Second Image',
        ),

        array(
          'id'    => 'section_1_textarea',
          'type'  => 'textarea',
          'title' => 'Portfolio Textarea Field',
        ),

      ), // end: fields
    ), // end: a section

  ),
);
// ----------------------------------------- 
// Page Metabox Options For department                  -
// -----------------------------------------

$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Treatment Options',
  'post_type' => 'department',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Treatment Section',
      'icon'  => 'fa fa-cog',
      // begin: fields
      'fields' => array(
            array(
              'id'              => 'unique_option_901',
              'type'            => 'group',
              'title'           => 'Treatment Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'unique_option_901_text_1', 
                  'type'  => 'text',
                  'title' => 'Treatment Name',
                ),

                array(
                  'id'    => 'treat_price', 
                  'type'  => 'text',
                  'title' => 'Traetment Price',
                ),
              ),
            ),

      ), // end: fields
    ), // end: a section
   ),
  );


//DFoctor List 

    $options[]    = array(
        'id'        => '_custom_doctors_list',
        'title'     => 'Doctor List',
        'post_type' => 'department',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(

    array(
      'name'  => 'section_doc',
      'title' => 'Doctor List',
      'icon'  => 'fa fa-cog',
      // begin: fields
      'fields' => array(
            array(
              'id'              => 'doctor_list_doc',
              'type'            => 'group',
              'title'           => 'Doctor Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'doctor_image',
                  'type'  => 'upload',
                  'title' => 'Upload Doctor Image',
                ),

                array(
                  'id'    => 'doctor_name',
                  'type'  => 'text',
                  'title' => 'Doctor Name',
                ),

                array(
                  'id'    => 'doc_profile_link',
                  'type'  => 'text',
                  'title' => 'Doctor Profile Link.',
                ),

                array(
                  'id'    => 'facebook_link',
                  'type'  => 'text',
                  'title' => 'Facebook Link.',
                ),

                array(
                  'id'    => 'twitter_link',
                  'type'  => 'text',
                  'title' => 'Twitter Link.',
                ),

                array(
                  'id'    => 'google_link',
                  'type'  => 'text',
                  'title' => 'Google Plus Link.',
                ),
              ),
            ),

      ), // end: fields
    ), // end: a section
  ),
);

// Investigation 

$options[]    = array(
  'id'        => '_custom_investigation_page',
  'title'     => 'Investigation Options',
  'post_type' => 'department',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'invest_section',
      'title' => 'Investigation Section',
      'icon'  => 'fa fa-cog',
      // begin: fields
      'fields' => array(
            array(
              'id'              => 'invest_group_sec',
              'type'            => 'group',
              'title'           => 'Investigation Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'investigation_name', 
                  'type'  => 'text',
                  'title' => 'Investigation Name',
                ),

                array(
                  'id'    => 'invest_price', 
                  'type'  => 'text',
                  'title' => 'Investigation Price',
                ),
              ),
            ),

      ), // end: fields
    ), // end: a section
   ),
  );

//Time table========================================= 

    $options[]    = array(
        'id'        => '_custom_timetable_list',
        'title'     => 'Time Table',
        'post_type' => 'department',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(

    array(
      'name'  => 'Sec_timetable',
      'title' => 'Time Table',
      'icon'  => 'fa fa-cog',
      // begin: fields
      'fields' => array(

            array(
              'id'              => 'time_table_day_name',
              'type'            => 'group',
              'title'           => 'Day name Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'day_name',
                  'type'  => 'text',
                  'title' => 'Write Day Name Here',
                ),
              ),
            ),

            array(
              'id'              => 'time_table_time_doctor',
              'type'            => 'group',
              'title'           => 'Doctor name Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'time_now',
                  'type'  => 'text',
                  'title' => 'Write Your Doctor Name Time',
                ),
                array(
                  'id'    => 'time_doctor_name_1',
                  'type'  => 'text',
                  'title' => 'Doctor Name 1st Day',
                ),
                array(
                  'id'    => 'time_doctor_name_2',
                  'type'  => 'text',
                  'title' => 'Doctor Name 2nd Day',
                ),
                array(
                  'id'    => 'time_doctor_name_3',
                  'type'  => 'text',
                  'title' => 'Doctor Name 3rd Day',
                ),
                array(
                  'id'    => 'time_doctor_name_4',
                  'type'  => 'text',
                  'title' => 'Doctor Name 4th Day',
                ),
                array(
                  'id'    => 'time_doctor_name_5',
                  'type'  => 'text',
                  'title' => 'Doctor Name 5th Day',
                ),
                array(
                  'id'    => 'time_doctor_name_6',
                  'type'  => 'text',
                  'title' => 'Doctor Name 6th Day',
                ),
                array(
                  'id'    => 'time_doctor_name_7',
                  'type'  => 'text',
                  'title' => 'Doctor Name 7th Day',
                ),
              ),
            ),


      ), // end: fields
    ), // end: a section
  ),
);

CSFramework_Metabox::instance( $options );

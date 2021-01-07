<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Medisoft Options <small>by Soft-theme</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// medisoft slider sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'slider_section',
  'title'       => 'Slider Section',
  'icon'        => 'fa fa-slideshare',

  // begin: fields
  'fields'      => array(

        array(
          'id'              => 'slider_group_section',
          'type'            => 'group',
          'title'           => 'Slider Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Slider',
          'fields'          => array(

            array(
              'id'          => 'slider_image_1',
              'type'        => 'upload',
              'title'       => 'Slider Front Image',
            ),

            array(
              'id'          => 'slider_image_2',
              'type'        => 'upload',
              'title'       => 'Slider Bacground Image',
            ),

            array(
              'id'          => 'slider_title',
              'type'        => 'text',
              'title'       => 'Slider Title',
            ),

            array(
              'id'          => 'slider_subtitle',
              'type'        => 'text',
              'title'       => 'Slider SubTitle',
            ),

            array(
              'id'          => 'slider_textarea',
              'type'        => 'textarea',
              'title'       => 'Slider Text',
            ),

          )
        ),

  ), // end: fields
);

// ----------------------------------------
// medisoft About sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'welcome_section',
  'title'       => 'Welcome Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'welcome_title',
          'type'        => 'text',
          'title'       => 'Welcome Title',
        ),

        array(
          'id'          => 'welcome_content',
          'type'        => 'textarea',
          'title'       => 'Welcome Contet',
        ),

        array(
          'id'          => 'welcome_image',
          'type'        => 'upload',
          'title'       => 'Welcome Image',
        ),

        array(
          'id'              => 'welcome_group_section',
          'type'            => 'group',
          'title'           => 'Welcome Fields Item',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'welcome_item_icon',
              'type'        => 'icon',
              'title'       => 'Welcome Item Icon',
            ),

            array(
              'id'          => 'welcome_item_title',
              'type'        => 'text',
              'title'       => 'Welcome Item Title',
            ),

            array(
              'id'          => 'welcome_item_content',
              'type'        => 'textarea',
              'title'       => 'Welcome Item Content',
            ),

          )
        ),

  ), // end: fields
);




// ----------------------------------------
// medisoft unique department sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'un_department_section',
  'title'       => 'Unique Department Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'deparment_bg_img',
          'type'        => 'upload',
          'title'       => 'Department Background Image',
        ),

      array(
          'id'          => 'un_dept_title',
          'type'        => 'text',
          'title'       => 'Department Title',
        ),

        array(
          'id'          => 'un_dept_desc',
          'type'        => 'textarea',
          'title'       => 'Department Contet',
        ),

        array(
          'id'              => 'un_depart_group',
          'type'            => 'group',
          'title'           => 'Unique Department Fields Item',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'un_department_image',
              'type'        => 'upload',
              'title'       => 'Department Image',
            ),

            array(
              'id'          => 'un_department_name',
              'type'        => 'text',
              'title'       => 'Department Name.',
            ),

            array(
              'id'          => 'un_department_link',
              'type'        => 'text',
              'title'       => 'Department Link.',
            ),

          )
        ),

  ), // end: fields
);


// ----------------------------------------
// medisoft gallery sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'gallery_section',
  'title'       => 'Gallery Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'gallery_title',
          'type'        => 'text',
          'title'       => 'Gallery Title',
        ),

      array(
          'id'          => 'gallery_contetn',
          'type'        => 'textarea',
          'title'       => 'Gallery Content',
        ),
        
      ), // end: fields
);



// ----------------------------------------
// medisoft gallery sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'doctor_sec_font',
  'title'       => 'Doctors Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'font_doctor_bg',
          'type'        => 'upload',
          'title'       => 'Doctor Background Image',
        ),

      array(
          'id'          => 'font_doctor_title',
          'type'        => 'text',
          'title'       => 'Doctor Title',
        ),

      array(
          'id'          => 'font_docctor_con',
          'type'        => 'textarea',
          'title'       => 'Doctor Content',
        ),
        
      ), // end: fields
);


// ----------------------------------------
// medisoft gallery sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'get_in_touch',
  'title'       => 'Get In Touch Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'get_touch_title',
          'type'        => 'text',
          'title'       => 'Get In Touch Title',
        ),

      array(
          'id'          => 'get_touch_content',
          'type'        => 'textarea',
          'title'       => 'Get In Touch Content',
        ),
        
      ), // end: fields
);


// ----------------------------------------
// medisoft all page header image sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'page_header_image',
  'title'       => 'All Page Header Image',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'depart_top_bg_img',
          'type'        => 'upload',
          'title'       => 'Department Top Background Image',
        ),

        
      ), // end: fields
);
// ----------------------------------------
// medisoft department sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'department_top_section',
  'title'       => 'Department Sidebar Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'depart_sidebar_title',
          'type'        => 'text',
          'title'       => 'Department sidebar Title',
        ),

      array(
          'id'              => 'depart_sidebar_group',
          'type'            => 'group',
          'title'           => 'Department sidebar Day & Time Fields Item',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'dept_side_day',
              'type'        => 'text',
              'title'       => 'Day Name',
            ),

            array(
              'id'          => 'dept_side_time',
              'type'        => 'text',
              'title'       => 'Day Time',
            ),

          )
        ),
        
      ), // end: fields
);

// ----------------------------------------
// medisoft Footer sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer_section',
  'title'       => 'Footer Section',
  'icon'        => 'fa fa-eraser',

  // begin: fields
  'fields'      => array(

      array(
          'id'          => 'footer_image',
          'type'        => 'upload',
          'title'       => 'Footer Logo',
        ),

        array(
          'id'          => 'footer_content',
          'type'        => 'textarea',
          'title'       => 'Footer Contet',
        ),

        array(
          'id'              => 'footer_social_group',
          'type'            => 'group',
          'title'           => 'Footer Social Fields Item',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'footer_social_icon',
              'type'        => 'icon',
              'title'       => 'Footer Social Icon',
            ),

            array(
              'id'          => 'footer_social_icon_link',
              'type'        => 'text',
              'title'       => 'Footer Social Icon Link.',
            ),

          )
        ),

  ), // end: fields
);





CSFramework::instance( $settings, $options );

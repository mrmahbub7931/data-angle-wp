<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.\


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'data_angel';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title'      => 'Data Angel',
        'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'angel-child-panel',
        'menu_icon'       =>  'dashicons-dashboard',
        'ajax_save'       => true,
        'show_reset_all'  => false,
        'framework_title' => 'Data Angel Panel',
    ) );
  

    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Home page',
      'fields' => array(
        array(
          'type'    => 'heading',
          'content' => 'Featured Section',
        ),
        // Select with categories
        array(
          'id'          => 'featured_post',
          'type'        => 'select',
          'title'       => 'Select Featured Post Category',
          'placeholder' => 'Select a category',
          'options'     => 'categories',
        ),
        array(
          'type'    => 'heading',
          'content' => 'Call to Action Section',
        ),
        array(
          'id'          => 'call-action-page-text',
          'type'        => 'textarea',
          'title'       => 'Call to Action Content',
        ),
        array(
          'id'          => 'call-action-page-link',
          'type'        => 'select',
          'title'       => 'Select Call to Action Page',
          'placeholder' => 'Select a page',
          'options'     => 'pages',
        ),
        array(
          'type'    => 'heading',
          'content' => 'Team section',
        ),
        array(
          'id'          => 'team_sec_heading_title',
          'type'        => 'text',
          'title'       => 'Team Section Heading Title',
        ),
        array(
          'id'          => 'team_sec_heading_text',
          'type'        => 'textarea',
          'title'       => 'Team Section Heading Text',
        ),
        array(
          'type'    => 'heading',
          'content' => 'Footer section',
        ),

      )
    ) );
    // Create Footer section
    CSF::createSection( $prefix, array(
      'title'  => 'Footer Section',
      'fields' => array(
        array(
          'type'    => 'heading',
          'content' => 'Footer top section',
        ),
        // Select with categories
        array(
          'id'          => 'footer_phone',
          'type'        => 'wp_editor',
          'title'       => 'Enter your phone number',
          'desc' =>  'You can use br tag if you want to display multiple phone number'
        ),
        array(
          'id'          => 'footer_email',
          'type'        => 'wp_editor',
          'title'       => 'Enter your Email',
          'desc' =>  'You can use br tag if you want to display multiple Email'
        ),
        array(
          'id'          => 'footer_address',
          'type'        => 'wp_editor',
          'title'       => 'Enter your Address',
        ),
        array(
          'id'        => 'footer_social',
          'type'      => 'group',
          'title'     => 'Social Icon',
          'fields'    => array(
            array(
              'id'    => 'social_icon',
              'type'  => 'icon',
              'title' => 'Social Icon',
            ),
            array(
              'id'    => 'social_url',
              'type'  => 'text',
              'title' => 'Social Url',
            )
          ),
        ),
      )
    ) );
  
  }
  



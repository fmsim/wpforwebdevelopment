<?php
/** Add support for WordPress features **/
  function custom_theme_styles() {
    add_theme_support( 'post-formats', [
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat'
      ]
    );
    add_theme_support('html5', array('search-form'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_default_headers(
      array( // enclosing array
        'codepoet' => array( // begin register image
          'url'           => '%s/images/Code-Is-Poetry.jpg',
          'thumbnail_url' => '%s/images/Code-Is-Poetry.jpg',
          'description'   => 'Code is Poetry'
        ), // end register image
          'confused' => array( // begin register image
            'url'           => '%s/images/Confused.jpg',
            'thumbnail_url' => '%s/images/Confused.jpg',
            'description'   => 'Waymarker'
          ), // end register image
          'adultbookbussiness' => array( // begin register image
            'url'           => '%s/images/adult-book-business.jpg',
            'thumbnail_url' => '%s/images/adult-book-business.jpg',
            'description'   => 'Working hard by traveling'
          ), // end register image
      ) // ends enclosing array
    ); // ends register default headers
    $defaults = array(
      'default-image'      => '',
      'default-text-color' => '000',
      'width'              => 822,
      'height'             => 250,
      'flex-width'         => true,
      'flex-height'        => true
    );
    add_theme_support('custom-header', $defaults);
    $defaults_background = array(
      'default-color'      => '',
      'default-image'      => '%1$s/images/repeat-pattern.jpg',
      'default-repeat'     => 'repeat', // no-repeat
      'default-position-x' => 'left',
      'default-position-y' => 'top',
      'default-size'       => 'auto'
    );
    add_theme_support('custom-background', $defaults_background);
  }
  add_action('after_setup_theme', 'custom_theme_styles');
  /** Create a function to handle all the theme setup items **/
  function load_on_initialize() {
    add_theme_support('menus');
    register_nav_menu('main-menu', 'The main header menu');
  }
  add_action('init', 'load_on_initialize');
  /** Register the sidebars **/
  function theme_widgets_and_sidebars() {
    register_sidebar(array(
      'name'          => "Main Sidebar",
      'id'            => 'main-sidebar',
      'description'   => "The main sidebar of our theme",
      'class'         => 'widget-block',
      'before_widget' => '<article id="%1$s" class="widget %2$s">',
      'after_widget'  => '</article>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    ));
    register_sidebar(array(
      'name'          => "404 Sidebar",
      'id'            => 'not-found-widget',
      'description'   => "The widget for the 404 page to direct visitors to more relevant content",
      'class'         => 'widget-block',
      'before_widget' => '<article id="%1$s" class="widget %2$s">',
      'after_widget'  => '</article>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    ));
  }
  add_action('widgets_init', 'theme_widgets_and_sidebars');

  /*
    sprinf()
    % - a literal percent character. No argument is required
    s - the argument is treated as and presented as a string
  */

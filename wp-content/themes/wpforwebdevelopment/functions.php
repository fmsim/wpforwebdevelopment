<?php
/*******************************************************************************
  Function to load our styles and scripts into the head tag
*******************************************************************************/
  function load_site_styles_and_scripts() {
    // Register styles
    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Volkhov:400,400i,700,700i',
      false, null);
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css',
      array(), '4.1.1', 'all');
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('layouts', get_template_directory_uri() . '/layouts.css', false, '1.0', 'all');
    // Enqueue styles
    wp_enqueue_style('googlefonts');
    wp_enqueue_style('bootstrapcss');
    wp_enqueue_style('layouts');
    wp_enqueue_style('style');
    // Register scripts
    wp_register_script('popperjs', get_template_directory_uri() . '/js/popper.min.js',
      array(), '1.14.3', true);
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js',
      array('jquery'), '4.1.1', true);
    wp_register_script('script', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('popperjs');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_script('script');
  }
  add_action('wp_enqueue_scripts', 'load_site_styles_and_scripts');
/*******************************************************************************
  Add support for WordPress features
*******************************************************************************/
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
    /** custom-logo **/
    $defaults = array(
      'width'       => 300,
      'flex-height' => true
    );
    add_theme_support('custom-logo', $defaults);
    /** custom-header **/
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
  /*****************************************************************************
    Register the sidebars
  *****************************************************************************/
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
    register_sidebar(array(
      'name'          => "Header Widget",
      'id'            => 'header-widget',
      'description'   => "The widget for the header section of our theme",
      'class'         => 'header_block widget-block',
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

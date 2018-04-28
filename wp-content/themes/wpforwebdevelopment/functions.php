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
  }
  add_action('widgets_init', 'theme_widgets_and_sidebars');

  /*
    sprinf()
    % - a literal percent character. No argument is required
    s - the argument is treated as and presented as a string
  */

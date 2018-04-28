<?php
/** Add support for WordPress features **/
  function custom_theme_styles() {
    add_theme_support( "post-formats", [
        "aside",
        "image",
        "video",
        "quote",
        "link",
        "gallery",
        "status",
        "audio",
        "chat"
      ]
    );
  }
  add_action("after_setup_theme", "custom_theme_styles");
  /** Create a function to handle all the theme setup items **/
  function load_on_initialize() {
    add_theme_support("menus");
    register_nav_menu("main-menu", "The main header menu");
  }
  add_action("init", "load_on_initialize");

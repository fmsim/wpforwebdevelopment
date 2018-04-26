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

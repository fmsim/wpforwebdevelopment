<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
    <body <?php body_class(); ?>>
      <div id="wrapper"> <!-- Holds the whole website -->
        <header>
          <?php
            $webNameExtend = get_post_meta($post->ID, 'web-name-extension', true);
            if (!empty($webNameExtend)) :
          ?>
            <h1 id="wp-name"><a href="<?php bloginfo('url'); ?>">
              <?php bloginfo('name'); ?>
              <?php echo " " . $webNameExtend; ?>
            </a></h1>
          <?php else : ?>
            <h1 id="wp-name"><a href="<?php bloginfo('url'); ?>">
              <?php bloginfo('name'); ?>
            </a></h1>
          <?php endif; ?>
          <h3 id="site-description"><?php bloginfo('description') ?></h3>
        </header>
        <nav id="primary-menu">
          <?php
            wp_nav_menu(array(
              "theme_location"  => "main-menu",
              "container_class" => "main-nav"
            ));
          ?>
        </nav>

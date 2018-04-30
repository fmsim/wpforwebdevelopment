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
          <div id="branding">
            <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
              <section id="site-logo">
                <?php the_custom_logo(); ?>
              </section>
            <?php endif; ?>
            <h1 id="wp-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h3 id="site-description"><?php bloginfo('description') ?></h3>
          </div> <!-- #branding -->
          <?php if (has_header_image()) : ?>
            <section id="custom-header-image"> <!-- header image container -->
              <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>"
                width="<?php get_custom_header()->width; ?>"
                alt="Develop WordPress Themes!">
            </section> <!-- ends header image container (#custom-header-image) -->
          <?php endif; ?>
        </header>
        <nav id="primary-menu">
          <?php
            wp_nav_menu(array(
              "theme_location"  => "main-menu",
              "container_class" => "main-nav"
            ));
          ?>
        </nav>
<?php // alt="Develop WordPress Themes!" ?>
<?php // if (get_header_image()) : ?>
<?php //endif; ?>

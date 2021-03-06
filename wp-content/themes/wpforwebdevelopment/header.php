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
      <div id="wrapper" class="container-fluid"> <!-- Holds the whole website -->
        <header class="row">
          <div id="branding" class="col-md-9"> <!-- >= 768px -->
            <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
              <section id="site-logo">
                <?php the_custom_logo(); ?>
              </section>
            <?php endif; ?>
            <section id="branding-text"> <!-- begin branding text -->
              <h1 id="wp-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
              <h3 id="site-description"><?php bloginfo('description') ?></h3>
            </section> <!-- end #branding-text  -->
          </div> <!-- #branding -->
          <section id="header-sidebar" class="col-md-3">
            <?php
              if (is_active_sidebar('header-widget')) {
                dynamic_sidebar('header-widget');
              } else {
                echo "This sidebar is not active";
              }
            ?>
          </section>
          <?php if (has_header_image()) : ?>
            <section id="custom-header-image"> <!-- header image container -->
              <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>"
                width="<?php get_custom_header()->width; ?>"
                alt="Develop WordPress Themes!">
            </section> <!-- ends header image container (#custom-header-image) -->
          <?php endif; ?>
        </header>
        <nav id="primary-menu" class="row">
          <?php
            wp_nav_menu(array(
              "theme_location"  => "main-menu",
              "container_class" => "main-nav col-md-12"
            ));
          ?>
        </nav>
<?php // alt="Develop WordPress Themes!" ?>
<?php // if (get_header_image()) : ?>
<?php //endif; ?>

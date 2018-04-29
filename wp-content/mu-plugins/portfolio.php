<?php
  /*
   Plugin Name: Portfolio
   Plugin URI :
   Author: Frank Simon
   Author URI:
   Description: Custom post type to display a portfolio
   Version: 1.0
   License: GNU General Public License v3.0 or later
   License URI: http://www.gnu.org/licenses/gpl-3.0
  */
  function portfolio_post_type() {
    register_post_type('portfolio', array( //enclosing array
        'labels' => array( // labels array
          'name'               => 'Portfolios',
          'singular_name'      => 'Portfolio',
          'add_new'            => 'Add New',
          'add_new_item'       => 'Add New Portfolio',
          'edit'               => 'Edit',
          'edit_item'          => 'Edit Portfolio',
          'new_item'           => 'New Portfolio',
          'view'               => 'View',
          'view_item'          => 'View Portfolio',
          'search_item'        => 'Search Portfolios',
          'not_found'          => 'No Portfolios found',
          'not_found_in_trash' => 'No Portfolios found in trash',
          'parent'             => 'Parent Portfolio'
        ), // ends labels array
        'public'               => true,
        'show_ui'              => true,
        'menu_position'        => 5,
        'hierarchical'         => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'custom-fields',
          'thumbnail'
        ),
        'taxonomies' => array(
          'post_tag',
          'category'
        ),
        'menu_icon'            => 'dashicons-art',
        'has_archive'          => true,
        'capability_type'      => 'post'
      ) // ends enclosing array
    );
  }
  add_action('init', 'portfolio_post_type');
?>

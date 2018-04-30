<?php
  /*
    Template Name: Portfolio Gallery
  */
  /*
    @package WordPress
    @subpackage Wordpress_For_Web_Devolepment
    @since WordPress for Web Development 0.1
  */
?>
<?php get_header(); ?>
<section id="container"> <!-- Holds the content and sidebar panes -->
  <section id="content"> <!-- The main information panel for our theme -->
  <?php
    $args = array(
      'post_type'      => 'portfolio',
      'post_status'    => 'published',
      'posts_per_page' => '8'
    );
    $art_posts = new WP_Query($args);
     if ($art_posts->have_posts()) : while ($art_posts->have_posts()) : $art_posts->the_post(); ?>
      <section <?php post_class(); ?> id="portfolio-<?php the_ID(); ?>"> <!-- Opening line for headline and content  -->
        <p id="pubished-date"><?php $post_date = get_the_date('l, F j, Y'); echo $post_date; ?></p>
        <p id="category-slug">In the category <?php the_category(); ?></p>
        <h2 class="wp-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3>This Template is <?php global $template; echo basename($template); ?></h3>
        <?php
          // Check to see if the thumbnail exists before displaying it
          if (has_post_thumbnail()) : ?>
          <div class="post-featured-image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php endif; ?>
        <?php the_excerpt(); ?>
      </section> <!-- Closing line for headline and content -->
      <?php endwhile; ?>
    <?php endif; ?>
  </section> <!-- #content -->
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
</section> <!-- #container -->

<?php
  /*
    Template Name: Display Off the Beaten Path Posts
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
      'post_type'      => 'post',
      'post_status'    => 'published',
      'category_name'  => 'catpath',
      //'cat'            => '-1',
      'posts_per_page' => '6'
    );
    $cat1_posts = new WP_Query($args);
     if ($cat1_posts->have_posts()) : while ($cat1_posts->have_posts()) : $cat1_posts->the_post(); ?>
      <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for headline and content  -->
        <h2 class="wp-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3>This Template is <?php global $template; echo basename($template); ?></h3>
        <?php the_category(); ?>
        <?php the_content(); ?>
      </section> <!-- Closing line for headline and content -->
      <?php endwhile; ?>
    <?php endif; ?>
  </section> <!-- #content -->
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
</section> <!-- #container -->

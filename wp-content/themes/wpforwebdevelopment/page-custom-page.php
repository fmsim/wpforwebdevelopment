<?php
  /*
    Template Name: My Custom Page
  */
  /*
    My first custom page template
    @package WordPress
    @subpackage Wordpress_For_Web_Devolepment
    @since WordPress for Web Development 0.1
  */
?>
<?php get_header('cfield'); ?> <!-- header-cfield.php => (header-)'cfield'(.php) -->
<section id="container"> <!-- Holds the content and sidebar panes -->
  <section id="content"> <!-- The main information panel for our theme -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for headline and content  -->
          <h2 class="wp-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <h3>This Template is <?php global $template; echo basename($template); ?></h3>
          <?php the_content(); ?>
        </section> <!-- Closing line for headline and content -->
      <?php endwhile; ?>
    <?php endif; ?>
  </section> <!-- #content -->
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
</section> <!-- #container -->

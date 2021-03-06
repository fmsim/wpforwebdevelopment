<?php
  /*
    The template for displayin single posts.
    This is the template that displays all single posts by default.
    Please note that this is the WordPress construct for single posts and that
    other "posts" on your WordPress site will use a different template.
    @package WordPress
    @subpackage Wordpress_For_Web_Devolepment
    @since WordPress for Web Development 0.1
  */
?>
<?php get_header(); ?>
<section id="container"> <!-- Holds the content and sidebar panes -->
  <section id="content"> <!-- The main information panel for our theme -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for headline and content  -->
        <h2 class="wp-title">
          <a href="
            <?php the_permalink(); ?>
          ">
            <?php the_title(); ?>
          </a>
        </h2>
        <h3>This Template is <?php global $template; echo basename($template); ?></h3>
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-featured-image">
            <?php the_post_thumbnail('medium'); ?>
          </div>
        <?php endif; ?>
        <?php the_content(); ?>
      </section> <!-- Closing line for headline and content -->
      <?php endwhile; ?>
      <section class="post-nav"> <!-- Opening line for post navigation -->
        <p><?php previous_post_link("%link", "Previuos Post"); ?></p>
        <p><?php next_post_link("%link", "Next Post"); ?></p>
      </section> <!-- Closing line for post navigation -->
      <?php else : ?>
    <?php endif; ?>
    <!--
    <p>We will replace this content once we are connected to the visual editor.</p>
    <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    </p>
    <p>
      In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
    </p>
    -->
  </section> <!-- #content -->
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
</section> <!-- #container -->

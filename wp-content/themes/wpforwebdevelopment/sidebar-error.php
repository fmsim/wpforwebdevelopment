<section id="sidebar">
  <?php if (is_active_sidebar('not-found-widget')) : ?>
    <?php dynamic_sidebar('not-found-widget'); ?>
  <?php else : ?>
    <?php the_widget('WP_Widget_Recent_Posts'); ?>
  <?php endif; ?>
</section>

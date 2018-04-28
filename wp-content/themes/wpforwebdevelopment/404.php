<?php
  /*
    The template for displaying 404 "not found" pages.
    This is the template that displays all error pages by default.
    @package WordPress
    @subpackage Wordpress_For_Web_Devolepment
    @since WordPress for Web Development 0.1
  */
?>
<?php get_header(); ?>
<section id="container"> <!-- Holds the content and sidebar panes -->
  <section id="content"> <!-- The main information panel for our theme -->
      <section class="error" id="post-error"> <!-- Opening line for headline and content  -->
        <h2 class="wp-title">Content not found!</h2>
        <h3>This Template is <?php global $template; echo basename($template); ?></h3>
        <img src="http://localhost/wpforwebdevelopment/wp-content/uploads/2018/04/emberarrasing.png"
          alt="What you are looking for couldn't be found">
        <h3>This is embarrasing</h3>
        <p>It looks like what you are looking for couldn't be found</p>
      </section> <!-- Closing line for headline and content -->
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
  <?php get_sidebar('error'); ?> <!-- sidebar-error.php  => (sidebar-)'error'(.php) -->
  <?php get_footer(); ?>
</section> <!-- #container -->

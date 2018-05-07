<!-- <?php echo basename(__FILE__); ?>-->

<?php  /* Template Name: Home */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <div class="container">
    </div>

    <div class="preview">
      <section>
        <h4>Work</h4>
      </section>
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg"></a>
      </div>
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg"></a>
      </div>
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg"></a>
      </div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <section>
      <!--<?php get_template_part('columnlayout'); ?> -->
      <!--<?php get_template_part('loop'); ?>-->
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

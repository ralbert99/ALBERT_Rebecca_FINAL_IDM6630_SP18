<!-- <?php echo basename(__FILE__); ?>-->

<link rel="stylesheet" type="text/css" href="PUBLIC/css/theme-styles.css" >
<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow">

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <div class="container">
      <img src="<?php bloginfo('template_url'); ?>/img/banner.png">
    </div>

    <div class="preview">
      <section>
        <h4>Work</h4>
      </section>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
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

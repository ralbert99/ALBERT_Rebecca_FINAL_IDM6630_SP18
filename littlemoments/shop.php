<!-- <?php echo basename(__FILE__); ?>-->

<?php /* Template Name: Shop */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <div class="container">
  </div>

  <body class="shop" <?php body_class(); ?>>

    <h1>Shop Page</h1>

    <div class="preview">

      <?php get_template_part('loop-store'); ?>


      <!-- <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
      </div>
    </div> -->

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

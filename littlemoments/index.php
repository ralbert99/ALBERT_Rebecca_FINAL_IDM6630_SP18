<!-- <?php echo basename(__FILE__); ?>-->

<?php  /* Template Name: Home */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <div class="container">
      <h1>Little Moments</h1>
    </div>

    <div class="preview">
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/jewelry3.jpg"></a>
      </div>
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/jewelry9.jpg"></a>
      </div>
      <div class="column">
        <a href="<?php echo get_site_url(); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/img/jewelry5.jpg"></a>
      </div>
      <p>Little Moments hopes to capture the memories and moments that are special to each individual in a unique, handmade format. Utilizing a variety of pigments, resin, and organic elements, each piece is uniquely crafted with an individual moment in mind. Visit the shop page for a full view of the pieces available, and then go on over to the contact page to get in contact with the creator to order your unique piece.</p>
    </div>
    <section>
      <!--<?php get_template_part('columnlayout'); ?> -->
      <!--<?php get_template_part('loop'); ?>-->
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

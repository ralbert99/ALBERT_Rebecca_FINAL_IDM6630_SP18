<!-- <?php echo basename(__FILE__); ?>-->

<?php /* Template Name: About */ ?>

<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">


<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body class="about" <?php body_class(); ?>>

    <header>
      <div class="container">
      </div>
        <div class="column">
          <img src="<?php bloginfo('template_url'); ?>/img/marble_header.jpg">
        </div>
      <h2>About Us</h2>
      <p>Little Moments is a small business that hopes to support the continued
      production of handmade, artisnal crafts and beyond.</p>
    </header>


    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

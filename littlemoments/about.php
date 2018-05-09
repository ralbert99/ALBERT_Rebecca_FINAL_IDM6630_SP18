<!-- <?php echo basename(__FILE__); ?>-->

<?php /* Template Name: About */ ?>

<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">


<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body class="about" <?php body_class(); ?>>

      <div class="container">
        <h1>Little Moments</h1>
      </div>

      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/img/moodyprofpic.jpg">
        <h2>About Us</h2>
        <p>Little Moments is a small business that hopes to support the continued
        production of handmade, artisnal crafts and beyond.</p>
      </div>

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

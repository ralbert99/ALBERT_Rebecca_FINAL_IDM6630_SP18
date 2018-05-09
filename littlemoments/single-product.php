<!-- <?php echo basename(__FILE__); ?>-->

<?php  /* Template Name: Product */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <div class="container">
    </div>

    <div class="preview">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class = "column" <?php post_class(); ?>>
              <?php the_content(); ?>
          </article>
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

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

<?php
      
  $arg = array(
    "post_type" => 'product',
    "post_stats" => 'published'
  );

  $product_query = new WP_Query($arg);

  if ( $product_query->have_posts() ) : while ( $product_query->have_posts() ) : $product_query->the_post(); ?>
   
   
   <article <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>"><?php the_title('<h2>','</h2>'); the_post_thumbnail();?></a>
    </article>
  
  
  
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
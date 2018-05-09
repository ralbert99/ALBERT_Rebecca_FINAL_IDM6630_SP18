<!-- <?php echo basename(__FILE__); ?>-->

<?php /* Template Name: Contact */ ?>


<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <div class="container">
    <h1>Little Moments</h1>
  </div>

  <body>

    <header class="form">
      <h2>Contact</h2>
    </header>

    <form>
      First name:<br>
      <input type="text" name="firstname"><br>
      Last name:<br>
      <input type="text" name="lastname"><br>
      Email:<br>
      <input type="email" name="email"><br>
      Note and Piece:<br>
      <input type="text" name="text"><br>
      <input type="submit">
    </form>

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->

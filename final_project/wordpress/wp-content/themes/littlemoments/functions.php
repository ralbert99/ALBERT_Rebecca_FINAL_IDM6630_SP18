<?php

  function register_my_menu() {
  register_nav_menu('nav',__( 'Navigation' ));
  }
  add_action( 'init', 'register_my_menu' );

  function create_product_post_type() {

    $labels = array (
      'name' => _x('Products' , 'post_type_general_name'),
    );

    $args = array(
      'labels' => $labels,
      'public' => true
    );


    register_post_type( 'product' , $args);
  }

  add_action('init' , 'create_product_post_type');

  add_theme_support('post-thumbnails');

  function loadCSS() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme-styles.css');
  }

  add_action('wp_enqueue_scripts','loadCSS');

  function customBodyClasses($classes) {

    if (is_single()) {
      $classes[] = 'my-single-class';
    }



    $classes[] = 'my-class';
    $classes[] = 'second';
    $classes[] = 'third';

    return $classes;
  }

  add_filter('body_class','customBodyClasses');

  add_filter('show_admin_bar','__return_false');

 ?>

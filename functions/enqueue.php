<?php

  function twentytwenty_child_css() {
    $directory_uri = esc_url( get_stylesheet_directory_uri() );
    wp_deregister_style( 'styles-child' );
    wp_deregister_style( 'wp-block-library' );
    wp_deregister_style( 'twentytwenty-print-style' );

    wp_register_style( 'main-style-child', $directory_uri. '/build/css/style.css', array(),time() );
    wp_enqueue_style( 'main-style-child' );

    wp_register_style( 'lu_bulma',  $directory_uri. '/assets/css/bulma/css/bulma.min.css');
    wp_enqueue_style( 'lu_bulma' );

    wp_register_style( 'slick_css', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style( 'slick_css' );

  }
  add_action( 'wp_enqueue_scripts', 'twentytwenty_child_css', 1001 );

  function load_js () {
    wp_register_script('custom', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/app.js', array('jquery'), '1.0.0', true);
    wp_register_script('slick_js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" , array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick_js');

    $site_settings = array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'page_id' => get_the_ID(),
      'json_data' => get_json_data()
    );
    wp_localize_script( 'custom', 'site_settings', $site_settings );
    wp_enqueue_script('custom');
  }
  
  add_action('wp_enqueue_scripts', 'load_js');
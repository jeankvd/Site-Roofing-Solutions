<?php

add_theme_support( "menus" );

  function prs_theme_styles() {
    wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/abebc5126b.css', '', '', '' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '', '', '' );
    wp_enqueue_style( 'main_css', get_stylesheet_uri(), '', '', '' );
  }

  add_action( 'wp_enqueue_scripts', 'prs_theme_styles');

  function prs_theme_scripts() {
    wp_enqueue_script( "main_js", get_template_directory_uri() . '/js/app.js', '', '' , true );
  }

  add_action( 'wp_enqueue_scripts', 'prs_theme_scripts', '', '');

  function register_theme_menus() {
    register_nav_menus(array(
        'primary' => 'primary_menu'
      )
    );
  }

  add_action( 'init', 'register_theme_menus');

?>

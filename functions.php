<?php

add_theme_support( "menus" );

  function prs_theme_styles() {
    wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/abebc5126b.css', '', '', '' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Muli:300,700|Poppins:400,700', '', '', '' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '', '', '' );
    wp_enqueue_style( 'main_css', get_stylesheet_uri(), '', '', '' );
  }

  add_action( 'wp_enqueue_scripts', 'prs_theme_styles');

  function prs_theme_scripts() {
    wp_enqueue_script( "main_js", get_template_directory_uri() . '/js/app.js', '', '' , true );
    wp_enqueue_script( "font_awesome-js", 'https://use.fontawesome.com/abebc5126b.js', '', '' , true );    
  }

  add_action( 'wp_enqueue_scripts', 'prs_theme_scripts', '', '');

  function register_theme_menus() {
    register_nav_menus(array(
        'primary' => 'primary_menu'
      )
    );
  }

  add_action( 'init', 'register_theme_menus');

  function custom_excerpt_length( $length ) {
        return 20;
    }

  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
  }

  create_widget("FAQ Sidebar", "faq", "Displays on the right of About Us Page");
  create_widget("Primary Sidebar", "primary", "Displays on the right of the blog page");

?>

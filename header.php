<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'title' ); ?></title>

    <!--  Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Poppins:400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/abebc5126b.js"></script>

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md fixed-top" id="unscrolled">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>" >
            Perfect Roofing Solutions
          </a>
          <?php
            $defaults =  array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'navbar-nav ml-auto'
              );

            wp_nav_menu($defaults);
          ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

<?php get_header(); ?>

<!-- Hero -->
<div class="jumbotron jumbotron-fluid" id="hero">
  <div id="video-overlay"></div>
  <video autoplay loop class="video-fullscreen" id="video-background">
    <source src="<?php echo get_template_directory_uri() . "/img/hero.mp4" ?>" type="video/mp4">
    <source src="http://pushhere.push.netdna-cdn.com/videos/push.webm" type="video/webm">
  </video>
  <div class="container">
    <img src="<?php echo get_template_directory_uri() . "/img/placeholder.png" ?>" alt="logo">
    <h1 class="display-3">Perfect Solution Roofing</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <button type="button" class="btn btn-primary btn-lg">Get in Contact</button>
  </div>
</div>
<!-- End Hero -->

<!-- About Us Jumbotron -->
<div class="jumbotron jumbotron-fluid" id="about">
  <div class="container">
    <h1 class="display-3">Your Roofing Solutions in One Place</h1>
    <p class="lead">From Shingles and Tiles to Commercial FlatRoof Preparations, we provide services in all of Miami and South Florida.</p>
  </div>
</div>
<!-- End Jumbotron -->

<!-- Content -->
<div class="container" id="services">
  <h2>What We Do</h2>
  <div class="row">
    <div class="col-sm">
      <i class="fa fa-wrench" aria-hidden="true"></i>
      <h4>Shingles & Tiles</h4>
      <p>Lorem Ipsum contem stratum gatum bacon content lorem ipsum Lorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsum</p>
      <a class="btn btn-lg" href="#">Learn More</a>
    </div>
    <div class="col-sm">
      <i class="fa fa-home" aria-hidden="true"></i>
      <h4>Flatroof</h4>
      <p>Lorem Ipsum contem stratum gatum bacon content lorem ipsum Lorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsum</p>
      <a class="btn btn-lg" href="#">Learn More</a>
    </div>
    <div class="col-sm">
      <i class="fa fa-building" aria-hidden="true"></i>
      <h4>Repairs</h4>
      <p>Lorem Ipsum contem stratum gatum bacon content lorem ipsum Lorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsumLorem Ipsum contem stratum gatum bacon content lorem ipsum</p>
      <a class="btn btn-lg" href="#">Learn More</a>
    </div>
  </div>
</div>
<!-- End Content -->

<!-- Contact Us -->
<div class="jumbotron jumbotron-fluid">

  <div class="container">
    <h1 class="display-3">Contact Us to get a quote</h1>
    <p class="lead">Go Ahead And Contact Us to Get a Quote</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
    </p>
  </div>
</div>
<!-- End Contact Us -->

<?php get_footer( );?>

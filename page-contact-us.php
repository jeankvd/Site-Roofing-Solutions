<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="jumbotron jumbotron-fluid" id="contact-banner">
  <div id="overlay"></div>
  <h1><?php the_title(); ?></h1>
</div>

<!-- Content -->
<div class="container">
  <p id="contact-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<?php the_content(); ?></p>
  <hr>
  <div id="contact-info">
    <h3>Office and Phone Number</h3>
    <p>3203 e 6ht st <br> Miami, Florida 33972, USA</p>
    <span>(239)-200-2373</span>
  </div>
<hr>
  
</div>

<?php endwhile; ?>
<?php endif; ?>




<!-- Form -->
<div class="container">
  <form id="main-form" action='<?php the_permalink(); ?>' method="POST">

<h3>Tell Us How We Can Help You</h3>

<h4>Name</h4>
  <div class="row">
    <div class="col-6">
      <input class="" type="text" name="first_name" id="first_name" placeholder="">
      <label for="first_name">First.</label>
    </div>

    <div class="col-6">
      <input class="" type="text" name="last_name" id="last_name" placeholder="">
      <label for="last_Name">Last.</label>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <h4>Email</h4>
      <input class="col-sm-6" type="email" name="email" id="email" placeholder="">
    </div>

  <div class="col-sm-6">
    <h4>Phone</h4>
    <input class="col-sm-6 ml-auto" type="tel" name="phone" placeholder="">
  </div>
  </div>

    <h4>How can we help You</h4>
    <textarea placeholder="" name="text" class="col-12"></textarea>

    <input type="submit" class="btn" name="submit" action="post" value="Submit">
  </form>
  <?php
  if(isset($_POST['first_name'])) {
    $name = $_POST['first_name'] . " " . $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];
    $to = "djjean85@gmail.com";
    $subject = "$name inquire";
    $message = "Hi I'm $name and my phone number is $phone and my email is $email . You can help me with this: $text";
    mail($to, $subject, $message);
  } ?>
</div>


<?php get_footer( );?>

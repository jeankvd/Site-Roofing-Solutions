<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="jumbotron">
  <h1><?php the_title(); ?></h1>
</div>
<!-- Banne -->
Some Banner

<!-- Content -->
<div class="container">
  <hr>
  <h2 id="info"><?php the_content(); ?></h2>
  <hr>
</div>

<?php endwhile; ?>
<?php endif; ?>

<!-- Form -->
<div class="container">
  <form class="row">
     <input class="col-6" type="text" name="first_name" id="first_name" placeholder="first_Name">
     <input class="col-6 ml-auto" type="text" name="last_name" id="last_name" placeholder="last_Name">
     <input class="col-6" type="email" name="email" id="email" placeholder="Email">
     <input class="col-6 ml-auto" type="tel" name="phone" placeholder="Phone">
     <textarea placeholder="How can We Help" class="col-12"></textarea>
     <input type="submit" name="submit" action="post" value="Submit">
  </form>
</div>

<?php get_footer( );?>

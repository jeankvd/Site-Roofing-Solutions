<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="jumbotron">
  <h1>Our Blog</h1>
</div>
<div class="container">
  <p>See more about Us</p>
</div>

<?php the_title() ?>
<?php the_excerpt() ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer( );?>

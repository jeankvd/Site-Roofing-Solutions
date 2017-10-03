<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="jumbotron">
  <h1><?php the_title() ?></h1>
</div>

Some Banner

<div class="container">
  <hr>
  <h2 id="info"><?php the_content(); ?></h2>
  <hr>
</div>

 <footer>
   
 </footer>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer( );?>

<?php get_header(); ?>


<div class="jumbotron jumbotron-fluid" id="blog-banner">
  <h1>Our Blog</h1>
</div>

<div class="container">
  <div class="row" >
    <div class="col-9" id="blog-list">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

      <div class="" id="blog-container">
          <h4><?php the_title() ?></h4>
          <?php the_excerpt() ?>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer( );?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="jumbotron jumbotron-fluid" id="blog-banner">
  <h1><?php the_title(); ?></h1>
</div>

<div class="container">
  <div class="row" >
    <div class="col-9" id="blog-list">
      <div class="blog-entry" id="blog-container">
          <?php the_content() ?>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer( );?>

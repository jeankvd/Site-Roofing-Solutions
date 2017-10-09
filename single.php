<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="jumbotron jumbotron-fluid" id="blog-banner">
  <h1><?php the_title(); ?></h1>
</div>

<div class="container">
  <div class="row" >
    <div class="col-9" id="blog-list">
      <div class="" id="blog-container">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
          <?php the_content() ?>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer( );?>

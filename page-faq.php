<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="jumbotron jumbotron-fluid" id="faq-banner">
  <h1><?php the_title(); ?></h1>
</div>

<!-- Content -->


<div class="container" >
  <div class="row">
    <div class="col-9" id="faq-list">
      <div id="info"><?php the_content(); ?></div>
    </div>

<?php get_sidebar("faq") ?>

  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer( );?>
